CREATE DATABASE security_db;

USE security_db;

CREATE TABLE users(

id INT AUTO_INCREMENT PRIMARY KEY,

username VARCHAR(100) UNIQUE,

password VARCHAR(255)

);
