<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

books = [
    ["Book1", "Author1", 2005],
    ["Book2", "Author2", 2015],
    ["Book3", "Author3", 2012],
    ["Book4", "Author4", 2009]
]
print("Books published after 2010:")
for book in books:
    if book[2] > 2010:


        print(f"Title: {book[0]}, Author: {book[1]}, Year: {book[2]}")
        new_book = ["New Book", "New Author", 2018]
        books.append(new_book)
        
        print("\nUpdated list with new book:")
        for book in books:
            print(f"Title: {book[0]}, Author: {book[1]}, Year: {book[2]}")
        


for book in books:
    if book[0] == "Book2":
        book[1] = "Updated Author"

print("\nUpdated list with author updated:")
for book in books:
    print(f"Title: {book[0]}, Author: {book[1]}, Year: {book[2]}")

    sorted_books = sorted(books, key=lambda x: x[0])

    print("\nSorted list by title:")
    for book in sorted_books:
        print(f"Title: {book[0]}, Author: {book[1]}, Year: {book[2]}")
    

    ?>
</body>
</html>