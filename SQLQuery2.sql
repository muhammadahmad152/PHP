USE talha_db;

CREATE table employees(
emp_id  int primary key,
empname varchar (25),
dep_id int
);

INSERT INTO employees (emp_id, empname, dep_id)
VALUES
    (101, 'ali', 1),
    (102, 'talha', 2),
    (103, 'zain', 3),
    (104, 'farhan', 4);

	select * from employees

CREATE TABLE department(
dep_id int primary key,
depmname varchar (25)
);


drop table department

insert into department(dep_id, depmname)
values
(1, 'SRO'),
(2, 'orm'),
(3, 'SRO'),
(4, 'faculty')

	select * from department

	--inner join
	SELECT
    employees.emp_id,
	employees.empname,
	employees.dep_id,
	department.depmname

FROM employees
INNER JOIN department
ON employees.dep_id = department.dep_id;


-- left join
SELECT
    employees.emp_id,
    employees.empname,
    employees.dep_id,
    department.depmname
FROM employees
LEFT JOIN department
ON employees.dep_id = department.dep_id;


--right join
SELECT
    employees.emp_id,
    employees.empname,
    employees.dep_id,
    department.depmname
FROM employees
RIGHT JOIN department
ON employees.dep_id = department.dep_id;


--full outer join
SELECT
    employees.emp_id,
    employees.empname,
    employees.dep_id,
    department.depmname
FROM employees
FULL OUTER JOIN department
ON employees.dep_id = department.dep_id;
