# 7576 Bookbinding Services Website

## Overview
A database management web app for the company 7576 Book Binding Services. It features CRUD operations for data management. I utilized PHP and MySQL for the backend.

## Features
- User Registration and Authentication.
- Admin Authentication.
- Inquiring of services.
- Checking of inquired services.
- Viewing of all user-inquired services.

## Tech Stack
- **Frontend:** HTML, CSS, Javascript
- **Backend:** PHP
- **Database:** MySQL

## Installation and Setup 
To run this project locally, follow these steps:

### Prerequisites
- XAMPP
- MySQL Workbench

### Installation
1. **Clone the repository:**
    ```
    git clone https://github.com/nathanaelmemis/7576-Bookbinding-Services-Website.git
    ```
2. **Navigate to the project directory:**
    ```
    cd 7576-Bookbinding-Services-Website
    ```
3. **Configure MySQL Workbench Credentials:**
    - Configure the following in the `PHP/Connection.php` file:
    ```
    $dbhost = "your_dbhost";
	$dbuser = "your_dbuser";
	$dbpass = "your_dbpass";
	$dbname = "your_dbname";
    ```
4. **Start the Database Development Server:**
    - Configure your MySQL WorkBench and start the server.
5. **Start the Backend Development Server:**
    - Start your XAMPP web server with the website configured into it.
