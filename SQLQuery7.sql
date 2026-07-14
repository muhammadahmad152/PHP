
CREATE DATABASE LibraryDB;
GO

USE LibraryDB;
GO


CREATE TABLE Authors (
    id INT IDENTITY(1,1) PRIMARY KEY,
    author_name VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    phone VARCHAR(20),
    country VARCHAR(100)
);

CREATE TABLE Books (
    id INT IDENTITY(1,1) PRIMARY KEY,
    author_id INT NOT NULL,
    book_title VARCHAR(150) NOT NULL,
    category VARCHAR(100),
    price DECIMAL(10,2),
    publish_year INT,

    CONSTRAINT FK_Books_Authors
    FOREIGN KEY (author_id)
    REFERENCES Authors(id)
);


INSERT INTO Authors (author_name, email, phone, country)
VALUES
('J.K. Rowling','jk@gmail.com','03001234567','United Kingdom'),
('William Shakespeare','william@gmail.com','03009876543','England'),
('Paulo Coelho','paulo@gmail.com','03112223344','Brazil'),
('Dan Brown','dan@gmail.com','03223334444','USA');


INSERT INTO Books (author_id, book_title, category, price, publish_year)
VALUES
(1,'Harry Potter and the Philosopher''s Stone','Fantasy',2500,1997),
(1,'Harry Potter and the Chamber of Secrets','Fantasy',2800,1998),
(2,'Hamlet','Drama',1800,1603),
(3,'The Alchemist','Novel',2200,1988),
(4,'The Da Vinci Code','Mystery',3000,2003);


CREATE VIEW vw_BooksAuthors
AS
SELECT
    b.id,
    b.book_title,
    a.author_name,
    b.category,
    b.price,
    b.publish_year
FROM Books b
INNER JOIN Authors a
ON b.author_id = a.id;
GO


SELECT * FROM Authors;


SELECT * FROM Books;

SELECT * FROM vw_BooksAuthors;