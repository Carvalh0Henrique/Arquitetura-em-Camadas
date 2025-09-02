CREATE DATABASE login_app CHARACTER utf8mb4 COLLATE utf8mb4_general_ci;

USE login_app;

CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users(email, password) VALUES  ('teste@teste.com', SHA2('123456', 256));