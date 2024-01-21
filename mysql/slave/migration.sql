CREATE USER 'app_read_user'@'%' IDENTIFIED BY 'read_password'; 
GRANT SELECT ON `blog%`.* TO 'app_read_user'@'%'; 
FLUSH PRIVILEGES;
