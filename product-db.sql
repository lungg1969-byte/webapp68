CREATE DATABASE IF NOT EXISTS shop_db CHARACTER SET utf8 COLLATE utf8_general_ci;
USE shop_db;

CREATE TABLE IF NOT EXISTS tbl_products (
    p_id INT AUTO_INCREMENT PRIMARY KEY,
    p_name VARCHAR(100) NOT NULL,
    p_price FLOAT NOT NULL,
    p_detail TEXT
);