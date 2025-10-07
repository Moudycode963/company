Drop database if exists company;
CREATE DATABASE company;
USE company;

CREATE TABLE employees
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255),
    lname VARCHAR(255)
);
CREATE TABLE department
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255)
);
INSERT INTO employees(fname, lname) VALUES
                                        ('Roy', 'Trenneman'),
                                        ('Maurice', 'Moss'),
                                        ('Jen', 'Barber');
INSERT INTO department(name) VALUES
                                 ('test');

