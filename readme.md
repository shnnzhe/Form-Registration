# Title 
Registration Form - Faculty of Vocational UB

This project is a simple web-based registration form for the Faculty of Vocational UB. It includes an HTML form, a corresponding CSS file for styling, and a PHP script to handle form submissions and store the data in a MySQL database.

Project Structure
index.html: The main HTML file that contains the registration form.
styles.css: The CSS file that styles the registration form.
process_registration.php: The PHP script that processes the form submission and stores the data in a MySQL database.

Files and Their Purpose

# 1. index.html
This file contains the structure and content of the registration form. The form collects the following details:

Full Name
NIM (Student Identification Number)
Program Study
Religion
Email Address (specific to UB students)
Phone Number
Birth Date
Gender (Male/Female)
Address (including street, region, city, province, and postal code)
The form uses the POST method to send data to the process_registration.php script for processing.

# 2. styles.css
This file provides the styling for the registration form. The key features include:

A clean and modern design using the Poppins font from Google Fonts.
A responsive layout that adjusts to different screen sizes.
A simple color scheme with yellow background and dark text elements.
Interactive elements like input fields and buttons are styled for better user experience.

# 3. process_registration.php
This PHP script is responsible for handling the form submission. The main tasks performed by this script include:

Collecting Form Data: Retrieves the data submitted via the form using the $_POST superglobal.
Connecting to MySQL Database: Establishes a connection to a MySQL database.
Inserting Data: The script inserts the collected data into the registrations table of the database.
Error Handling: It provides feedback to the user on whether the registration was successful or if there were any errors.
Prerequisites
To run this project, you need to have the following installed:

A local server environment like XAMPP, WAMP, or MAMP.
PHP 7.4 or later.
MySQL or MariaDB for database management.
Database Setup
Before running the project, make sure to set up the database:

Create a Database:

# sql
Copy code
CREATE DATABASE vocational_registration;
Create the Registrations Table:

sql
Copy code
CREATE TABLE registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    nim VARCHAR(50) NOT NULL,
    program_study VARCHAR(100) NOT NULL,
    religion VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    birth_date DATE NOT NULL,
    gender VARCHAR(10) NOT NULL,
    address TEXT NOT NULL,
    region VARCHAR(50) NOT NULL,
    city VARCHAR(100) NOT NULL,
    province VARCHAR(100) NOT NULL,
    postal_code VARCHAR(20) NOT NULL);

# How to Run
Place the project files (index.html, styles.css, and process_registration.php) in the htdocs folder of your local server.
Start the local server (e.g., Apache).
Open your web browser and go to http://localhost/index.html.
Fill out the form and submit to see the data saved in the database.

# License
This project is free to use and modify for educational purposes.

