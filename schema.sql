CREATE DATABASE dela_v_poryadke DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;

USE dela_v_poryadke;

CREATE TABLE project(
     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
     user_id INT,
);

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_id INT,
    user_id INT,
    data_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    title CHAR(128) NOT NULL,
    file CHAR(128),
    deadline DATE NOT NULL,
    completed BOOL DEFAULT 0
);


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    email VARCHAR(128) NOT NULL UNIQUE,
    name VARCHAR(128),
    password CHAR(64),
);