-- ! Create the database
CREATE DATABASE blogly;
USE blogly;

-- ! USERS TABLE (Normal Members)
CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    avatar VARCHAR(255) NOT NULL,
    is_admin TINYINT(1) NOT NULL
) ENGINE = InnoDB;

-- ! CONTACT PAGE MESSAGES TABLE
CREATE TABLE messages (
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL PRIMARY KEY,
    message VARCHAR(225) NOT NULL
) ENGINE = InnoDB;

-- ! CATEGORIES TABLE
CREATE TABLE categories (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    description TEXT NOT NULL
) ENGINE = InnoDB;

-- ! POSTS TABLE
CREATE TABLE posts (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    thumbnail VARCHAR(255) NOT NULL,
    date_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    category_id INT(11) UNSIGNED NULL,
    author_id INT(11) UNSIGNED NOT NULL,
    is_featured TINYINT(1) NOT NULL,
    CONSTRAINT FK_blog_category FOREIGN KEY (category_id) REFERENCES categories (id) ON DELETE SET NULL,
    CONSTRAINT FK_blog_author FOREIGN KEY (author_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE = InnoDB;
