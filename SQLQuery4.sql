CREATE TABLE Authors (
    id INT IDENTITY(1,1) PRIMARY KEY,
    author_name VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    phone VARCHAR(20),
    country VARCHAR(100)
);