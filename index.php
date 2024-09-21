<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management System</title>
</head>
<body>
    <!-- //html form for taking input from user input -->
    <h1>Add a New Book</h1>
    <form method="POST" action="">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="author">Author:</label>
        <input type="text" name="author" id="author" >
        <br>
        <label for="year">Publication Year:</label>
        <input type="number" name="year" id="year">
        <br>
        <input type="submit" value="Add Book">
    </form>


    <?php

    // Including the Book class
    require_once 'Book.php';

    //Using session to store and retrieve book data
    session_start();
    
//handling form data and adding new book to session array
//if the user clicks on submit button the form data will be added into the session array
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $year = $_POST['year'];

        //validating input 
        if (empty($title) || empty($author) || empty($year)) {
            echo  "<span style='color:red;'>All fields are required.</span>"; 
        } else {
        try {
           //creating book instance from class
            $book = new Book($title, $author, $year);
            // Storing book in session to sotre data persistent
            if (!isset($_SESSION['books'])) {
                $_SESSION['books'] = [];
            }
            $_SESSION['books'][] = $book;
        } catch (Exception $e) {
            echo "<p style='color:red;'>Error: " . $e->getMessage() . "</p>";
        }
    }
}

    // Display the list of books
if (isset($_SESSION['books']) && count($_SESSION['books']) > 0) {
        echo "<h2>Book List</h2>";
        echo "<table border='1'><tr><th>Title</th><th>Author</th><th>Year</th></tr>";
        foreach ($_SESSION['books'] as $book) {
            $details = $book->getDetails();
            echo "<tr><td>" . htmlspecialchars($details['title']) . "</td>
                    <td>" . htmlspecialchars($details['author']) . "</td>
                    <td>" . htmlspecialchars($details['year']) . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No books added yet.</p>";
    }

    ?>
</body>
</html>
