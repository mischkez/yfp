#!/bin/bash

docker-compose down -v

# Remove existing data

sudo chown -R $USER:$USER ./mysql/master/data/
sudo chown -R $USER:$USER ./mysql/slave/data/

find ./mysql/master/data/  -mindepth 1 -not -name '.gitkeep' -delete
find ./mysql/slave/data/  -mindepth 1 -not -name '.gitkeep' -delete

# Build and start the Docker containers
docker-compose build
docker-compose up -d

until docker exec mysql_master sh -c 'export MYSQL_PWD=root; mysql -u root -e ";"'
do
    echo "Waiting for mysql_master database connection..."
    sleep 4
done


# Wait for the slave MySQL server to be ready
until docker-compose exec mysql_slave sh -c 'export MYSQL_PWD=root; mysql -u root -e ";"'
do
    echo "Waiting for mysql_slave database connection..."
    sleep 4
done

# Get the master's binary log file and position
MS_STATUS=`docker exec mysql_master sh -c 'export MYSQL_PWD=root; mysql -u root -e "SHOW MASTER STATUS"'`
CURRENT_LOG=`echo $MS_STATUS | awk '{print $6}'`
CURRENT_POS=`echo $MS_STATUS | awk '{print $7}'`

# Configure and start replication on the slave server
start_slave_stmt="CHANGE MASTER TO MASTER_HOST='mysql_master',MASTER_USER='slave_user',MASTER_PASSWORD='slave_password',MASTER_LOG_FILE='$CURRENT_LOG',MASTER_LOG_POS=$CURRENT_POS; START SLAVE;"
start_slave_cmd='export MYSQL_PWD=root; mysql -u root -e "'
start_slave_cmd+="$start_slave_stmt"
start_slave_cmd+='"'
docker exec mysql_slave sh -c "$start_slave_cmd"

# Check the slave status to verify replication is running
docker exec mysql_slave sh -c "export MYSQL_PWD=root; mysql -u root -e 'SHOW SLAVE STATUS \G'"

# Create the blog_premium database on the master server
docker exec mysql_master sh -c "export MYSQL_PWD=root; mysql -u root -e 'CREATE DATABASE blog_premium'"

