CREATE DATABASE auth;
USE auth;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL
)

INSERT INTO users (email, password)
VALUES ('beate@ckc.lv', 'Parole123');