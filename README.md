# Book Management System

## Overview
Book Management System is a simple web application built with PHP that allows users to manage list of books. Users can add book details such as title, author, and publication year, with error handling to ensure all fields are filled out correctly.
Once the book information is added user can click on submit and the details of the book will be stored in local database.
Here we are using session to store the book data persistently i.e when the user will refresh the browser still the data will be store in local database.

## Features
- Add new books to the system
- View a list of all added books
- Error handling for empty fields


## Installation
1. **Clone the repository:**
   https://github.com/smith3226/BookManagementSystem.git
2. **Place the project folder in your web server's root directory (e.g. htdocs for XAMPP)**
3. **Open a web browser and navigate to http://localhost/bookmanagementsystem/index.php

## Summary
Fill in the form with the book's title, author, and publication year.
Click the "Add Book" button to submit the form.
If all fields are filled correctly, the book will be added to the list displayed below the form.
If any fields are empty, an error message will be shown in red.
