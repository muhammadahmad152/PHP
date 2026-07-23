CREATE DATABASE hh;
GO

USE hh;
GO

-- Employee Table
CREATE TABLE employee56 (
    empid INT IDENTITY(1,1) PRIMARY KEY,
    empname VARCHAR(30),
    salary DECIMAL(10,2),
    department VARCHAR(30),
    joiningdate DATETIME DEFAULT GETDATE()
);

DROP table employee56

-- Employee Log Table
CREATE TABLE empployeeelog (
    logid INT IDENTITY(1,1) PRIMARY KEY,
    empid INT,
    empname VARCHAR(30),
    actiondate DATETIME DEFAULT GETDATE()
);

ALTER TABLE empployeeelog
ADD action VARCHAR(50);


-- Trigger
CREATE TRIGGER trg_employee56_insert
ON employee56
AFTER INSERT
AS
BEGIN
    SET NOCOUNT ON;

    INSERT INTO empployeeelog (empid, empname, actiondate)
    SELECT empid, empname, GETDATE()
    FROM inserted;
END;
GO

CREATE TRIGGER trg_employee56_insert
ON employee56
AFTER INSERT
AS
BEGIN
    SET NOCOUNT ON;

    INSERT INTO empployeeelog (empid, empname, action, actiondate)
    SELECT empid, empname, 'Employee Inserted', GETDATE()
    FROM inserted;
END;

CREATE TRIGGER trg_employee56_insert
ON employee56
AFTER INSERT
AS
BEGIN
    SET NOCOUNT ON;

    -- Insert a log record into the audit table for every new employee added
    INSERT INTO empployeeelog (empid, actiondate)
    SELECT empid, 'Employee Inserted'
    FROM INSERTED;
END;

ALTER TRIGGER trg_employee56_insert
ON employee56
AFTER INSERT
AS
BEGIN
    SET NOCOUNT ON;

    INSERT INTO empployeeelog (empid, actiondate)
    SELECT empid, GETDATE()
    FROM INSERTED;
END;

ALTER TRIGGER trg_employee56_insert
ON employee56
AFTER INSERT
AS
BEGIN
    SET NOCOUNT ON;

    INSERT INTO empployeeelog (empid, actiondate)
    SELECT empid, GETDATE()
    FROM inserted;
END;

INSERT INTO employee56 (empname, salary, department)
VALUES ('talha', 5500.25, 'HR');


INSERT INTO empployeeelog (empid, action, actiondate)
SELECT empid, 'Employee Inserted', GETDATE()
FROM INSERTED;




INSERT INTO employee56 (empname, salary, department, joining_date)
VALUES ('talha', 5500.25, 'HR')

-- Check Results
SELECT * FROM employee56;
SELECT * FROM empployeeelog;

DROP TRIGGER trg_employee56_insert;

sp_helptext 'trg_employee56_insert';

SELECT OBJECT_DEFINITION(OBJECT_ID('trg_employee56_insert'));

SELECT * 
FROM employee56;

sp_helptext 'trg_employee56_insert';
