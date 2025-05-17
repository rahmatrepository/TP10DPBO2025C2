CREATE DATABASE shopping_list_db;
USE shopping_list_db;

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    category_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE shopping_list (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_id INT NOT NULL,
    quantity INT NOT NULL,
    FOREIGN KEY (item_id) REFERENCES items(id)
);

INSERT INTO categories (name) VALUES ('Fruits'), ('Vegetables'), ('Dairy');
INSERT INTO items (name, category_id) VALUES ('Apple', 1), ('Carrot', 2), ('Milk', 3);