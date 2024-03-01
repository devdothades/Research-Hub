# copy all of these and paste it at the SQL console ide and execute the code

CREATE DATABASE IF NOT EXISTS ACLC;
USE ACLC;

CREATE TABLE accounts(
                      id INT AUTO_INCREMENT PRIMARY KEY,
                      full_name VARCHAR(255) NOT NULL,
                      email VARCHAR(255) NOT NULL,
                      password VARCHAR(255) NOT NULL
);

CREATE TABLE messages(
                         id INT AUTO_INCREMENT PRIMARY KEY,
                         name VARCHAR(255) NOT NULL,
                         email VARCHAR(255) NOT NULL,
                         message VARCHAR(1000) NOT NULL
);

CREATE TABLE researches(
                         id INT AUTO_INCREMENT PRIMARY KEY,
                         uploader VARCHAR(255) NOT NULL,
                         title VARCHAR(255) NOT NULL,
                         authors VARCHAR(255) NOT NULL,
                         category VARCHAR(255) NOT NULL,
                         strand VARCHAR(255) NOT NULL,
                         description VARCHAR(1000) NOT NULL,
                         pdf_name VARCHAR(255) NOT NULL,
                         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE comments(
                         id INT AUTO_INCREMENT PRIMARY KEY,
                         name VARCHAR(255) NOT NULL,
                         comment VARCHAR(500) NOT NULL,
                         repository VARCHAR(255) NOT NULL,
                         time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE admin(
                         id INT AUTO_INCREMENT PRIMARY KEY,
                         username VARCHAR(255) NOT NULL,
                         password VARCHAR(255) NOT NULL
);


INSERT INTO admin(username, password) VALUES ('admin', 'fa99a4ae51ae079bdbbb5ce931bf9f92'); # change the password of the admin account to your preference


