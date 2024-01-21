-- Create replication user
CREATE USER 'slave_user'@'%' IDENTIFIED BY 'slave_password'; 
GRANT REPLICATION SLAVE ON *.* TO 'slave_user'@'%'; 
FLUSH PRIVILEGES;

-- Create user with write permissions on databases starting with "blog"
CREATE USER 'app_write_user'@'%' IDENTIFIED BY 'write_password'; 
GRANT ALL PRIVILEGES ON `blog%`.* TO 'app_write_user'@'%'; 
FLUSH PRIVILEGES;

-- Create user with read permissions on databases starting with "blog"
CREATE USER 'app_read_user'@'%' IDENTIFIED BY 'read_password'; 
GRANT SELECT ON `blog%`.* TO 'app_read_user'@'%'; 
FLUSH PRIVILEGES;