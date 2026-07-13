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
                    echo $book . "\n";
                }
            }

        // Displays total number of books within array
            public function countBooks(array $books): int {
                $total = count($books);
                return $total;
            }
    </body>
</html>