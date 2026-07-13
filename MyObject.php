<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Book Tracker</title>
    </head>
    <body>
        <h1>My Book Tracker</h1>
        <?php
        class Book {
            private $bookNumber;
            private $title;
            private $author;
            private $totalPages;
            private $genre;

        function __construct($bookNumber, $title, $author, $totalPages, $genre) {
            $this->bookNumber = $bookNumber;
            $this->title = $title;
            $this->author = $author;
            $this->totalPages = $totalPages;
            $this->genre = $genre;
        }

        function getBookNumber() {
            return $this->bookNumber;
        }
        function getTitle() {
            return $this->title;
        }
        function getAuthor() {
            return $this->author;
        }
        function getTotalPages() {
            return $this->totalPages;
        }
        function getGenre() {
            return $this->genre;
        }
        }

        $books = [
            new Book(1, "Shadow and Bone", "Leah Bardugo", 358, "Fantasy"),
            new Book(2, "The Deal", "Elle Kennedy", 342, "Romance"),
            new Book(3, "The Midnight Library", "Matt Haig", 288, "Fantasy"),
            new Book(4, "The List of Suspicious Things", "Jennie Godfrey", 416, "Mystery"),
            new Book(5, "The Summer I Turned Pretty", "Jenny Han", 288, "Romance")
        ];

        // Displays all books from array
           function displayBooks(array $books): void {
              foreach ($books as $book) {
                    echo "<p>";
                    echo $book->getBookNumber() . " | ";
                    echo $book->getTitle() . " | ";
                    echo $book->getAuthor() . " | ";
                    echo $book->getTotalPages() . " pages | ";
                    echo $book->getGenre() . PHP_EOL;
                    echo "</p>";
                }
            }

        // Displays total number of books within array
            function countBooks(array $books): int {
                $total = count($books);
                return $total;
            }

        // Method created via ChatGPT, should add new book to existing array
            function addBook(array &$books): void {
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addBook"])) {
                    $bookNumber = trim($_POST['bookNumber']);
                    $title = trim($_POST['title']);
                    $author = trim($_POST['author']);
                    $totalPages = trim($_POST['totalPages']);
                    $genre = trim($_POST['genre']);
                    if ($bookNumber==="" || $title==="" || $author==="" || $totalPages==="" || $genre==="") {
                        echo "<p style='color:red;'>All fields are required.</p>";
                        return;
                    }
                    if (!is_numeric($bookNumber) || !is_numeric($totalPages)) {
                        echo "<p style='color:red;'>Book Number and Total Pages must be numbers.</p>";
                        return;
                    }
                    $books[]=new Book((int)$bookNumber, $title, $author, (int)$totalPages, $genre);
                    echo "<p style='color:green;'>Book added successfully!</p>";
                }
            }
        ?>

<form method="post">
    Book Number:
    <input type="number" name="bookNumber"><br>

    Title:
    <input type="text" name="title"><br>

    Author:
    <input type="text" name="author"><br>

    Total Pages:
    <input type="number" name="totalPages"><br>

    Genre:
    <input type="text" name="genre"><br>

    <button type="submit" name="addBook">Add Book</button>
</form>

    <?php
            addBook($books);

            displayBooks($books);

            echo "Total books: " . countBooks($books);

            /*
            Overall Prediction: Should display all books in array,
            prompt user to add another book entry, and add entry
            to existing array with success message. Error message
            should display if all or some entries are left empty.
            */
    ?>

    </body>
</html>