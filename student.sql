CREATE DATABASE student_registration;

USE student_registration;

CREATE TABLE students (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    date_of_birth DATE NOT NULL,
    email VARCHAR(100) NOT NULL,
    country VARCHAR(50) NOT NULL,
    region VARCHAR(50) NOT NULL,
    address VARCHAR(255),
    age INT(11),
    course VARCHAR(50),
    phone VARCHAR(20),
    agreed_to_terms TINYINT(1) NOT NULL
);
