CREATE DATABASE wallet_db;
USE wallet_db;

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    balance DECIMAL(10,2) DEFAULT 0.00,
    role VARCHAR(20) DEFAULT 'user'
);

CREATE TABLE transactions (
    tx_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    receiver_id INT DEFAULT NULL,
    type VARCHAR(50) NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    fee DECIMAL(10,2) NOT NULL,
    total_amount DECIMAL(10,2) NOT NULL,
    tx_date DATETIME NOT NULL
);