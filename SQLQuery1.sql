use Ahmad_db

-- Department Table
CREATE TABLE Department (
    DepartmentID INT PRIMARY KEY IDENTITY(1,1),
    DepartmentName VARCHAR(100) NOT NULL,
    Location VARCHAR(100)
);

drop table department

-- Employee Table
CREATE TABLE Employee (
    EmployeeID INT PRIMARY KEY IDENTITY(1,1),
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Gender CHAR(1),
    Salary DECIMAL(10,2),
    HireDate DATE,
    DepartmentID INT,
    CONSTRAINT FK_Employee_Department
        FOREIGN KEY (DepartmentID)
        REFERENCES Department(DepartmentID)
);

drop table Employee 

-- Project Table
CREATE TABLE Project (
    ProjectID INT PRIMARY KEY IDENTITY(1,1),
    ProjectName VARCHAR(100) NOT NULL,
    StartDate DATE,
    EndDate DATE,
    Budget DECIMAL(12,2),
    DepartmentID INT,
    CONSTRAINT FK_Project_Department
        FOREIGN KEY (DepartmentID)
        REFERENCES Department(DepartmentID)
);

drop table Project

-- Department
INSERT INTO Department (DepartmentName, Location)
VALUES
('IT', 'Karachi'),
('HR', 'Lahore'),
('Finance', 'Islamabad');

-- Employee
INSERT INTO Employee (FirstName, LastName, Gender, Salary, HireDate, DepartmentID)
VALUES
('Ali', 'Khan', 'M', 60000, '2025-01-10', 1),
('Sara', 'Ahmed', 'F', 55000, '2024-05-15', 2),
('Usman', 'Iqbal', 'M', 70000, '2023-09-20', 1),
('Ayesha', 'Malik', 'F', 65000, '2022-11-12', 3);

-- Project
INSERT INTO Project (ProjectName, StartDate, EndDate, Budget, DepartmentID)
VALUES
('HR Management System', '2025-01-01', '2025-06-30', 500000, 2),
('Banking Software', '2025-02-01', '2025-12-31', 2000000, 1),
('Payroll System', '2025-03-15', '2025-09-30', 800000, 3);


SELECT
    E.EmployeeID,
    E.FirstName,
    E.LastName,
    D.DepartmentName
FROM Employee E
INNER JOIN Department D
ON E.DepartmentID = D.DepartmentID;


SELECT
    P.ProjectName,
    D.DepartmentName,
    P.Budget
FROM Project P
INNER JOIN Department D
ON P.DepartmentID = D.DepartmentID;


ALTER TABLE Project
ADD EmployeeID INT;

ALTER TABLE Project
ADD CONSTRAINT FK_Project_Employee
FOREIGN KEY (EmployeeID)
REFERENCES Employee(EmployeeID);

UPDATE Project
SET EmployeeID = 2
WHERE ProjectID = 1;

UPDATE Project
SET EmployeeID = 1
WHERE ProjectID = 2;

UPDATE Project
SET EmployeeID = 4
WHERE ProjectID = 3;

SELECT * FROM Project;

SELECT
    e.EmployeeID,
    e.FirstName,
    d.DepartmentName,
    p.ProjectName
FROM Employee e
INNER JOIN Department d
    ON e.DepartmentID = d.DepartmentID
INNER JOIN Project p
    ON e.EmployeeID = p.EmployeeID;

	create function myfunc 
(
	@EmpID int
)

