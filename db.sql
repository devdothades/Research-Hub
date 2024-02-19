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
                         title VARCHAR(255) NOT NULL,
                         authors VARCHAR(255) NOT NULL,
                         category VARCHAR(255) NOT NULL,
                         strand VARCHAR(255) NOT NULL,
                         description VARCHAR(1000) NOT NULL,
                         pdf_name VARCHAR(255) NOT NULL
);

CREATE TABLE comments(
                         id INT AUTO_INCREMENT PRIMARY KEY,
                         name VARCHAR(255) NOT NULL,
                         comment VARCHAR(255) NOT NULL,
                         repository VARCHAR(255) NOT NULL
);

