
CREATE USER 'onyeka'@'%' IDENTIFIED WITH mysql_native_password BY 'onyeka';
GRANT ALL PRIVILEGES ON * . * TO 'onyeka'@'%';
FLUSH PRIVILEGES;