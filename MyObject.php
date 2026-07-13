<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Book Tracker</title>
    </head>
    <body>
        <h1>My Book Tracker</h1>
        class Book {
            public int $bookNumber;
            public string $title;
            public string $author;
            public int $totalPages;
            public string $genre;
        }

        public function __construct(int $bookNumber, string $title, string $author, int $totalPages, string $genre) {
            $this->bookNumber = $bookNumber;
            $this->title = $title;
            $this->author = $author;
            $this->totalPages = $totalPages;
            $this->genre = $genre;
        }

        $books = [
            new Book(1, "Shadow and Bone", "Leah Bardugo", 358, "Fantasy"),
            new Book(2, "The Deal", "Elle Kennedy", 342, "Romance"),
            new Book(3, "The Midnight Library", "Matt Haig", 288, "Fantasy"),
            new Book(4, "The List of Suspicious Things", "Jennie Godfrey", 416, "Mystery"),
            new Book(5, "The Summer I Turned Pretty", "Jenny Han", 288, "Romance")
        ];

        // Displays all books from array
            public function displayBooks(array $books) {
                foreach ($books as $book) {
                    echo $book->getBookNumber() . " | "
                    . $book->getTitle() . " | "
                    . $book->getAuthor() . " | "
                    . $book->getTotalPages() . " pages | "
                    . $book->getGenre() . PHP_EOL;
                }
            }

        // Displays total number of books within array
            public function countBooks(array $books): int {
                $total = count($books);
                return $total;
            }

        // Method created via ChatGPT, should add new book to existing array
            public function addBook(array &$books): void {
                echo "Enter Book ID: ";
                $bookNumber = (int) trim(fgets(STDIN));

                echo "Enter Title: ";
                $title = trim(fgets(STDIN));

                echo "Enter Author: ";
                $author = trim(fgets(STDIN));

                echo "Enter Number of Pages: ";
                $totalPages = (int) trim(fgets(STDIN));

                echo "Enter Genre: ";
                $genre = trim(fgets(STDIN));

                if (empty($bookNumber) || empty($title) || empty($author) || empty($totalPages) || empty($genre)) {
                    echo "ERROR: All fields are required. Book was not added.\n";
                    return:
                }

                $books[] = new Book($bookNumber, $title, $author, $totalPages, $genre);

                echo "\nBook added successfully!\n";
            }
            addBook($books);
            displayBooks();

            /*
            Overall Prediction: Should display all books in array,
            prompt user to add another book entry, and add entry
            to existing array with success message. Error message
            should display if all or some entries are left empty.
            */
    </body>
</html>