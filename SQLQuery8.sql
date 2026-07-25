create database Ahmed

use Ahmed

	CREATE TABLE student(
	stdid int identity(1,1)primary key,
	stdname varchar (20),
	stdcourse varchar(30),
	joningdate DATETIME default getdate()
	);
	
	create table studentlog(
	logid int identity(1,1)primary key,
	stdname varchar (20),
	stdcourse varchar(30),
	action varchar(30),
	joningdate DATETIME default getdate()
	);

	SELECT * FROM student
	SELECT * FROM studentlog

	create trigger mytig
	on student 
	after insert
	as 
	begin 
	set NOCOUNT ON;

		insert into studentlog(stdname, stdcourse, action)
		SELECT stdname,stdcourse,'insert'
		from INSERTED

		end
		insert into student(stdname,stdcourse) values('ali','ADSE')

		create trigger update_tig
	on student 
	after UPDATE
	as 
	begin 
	UPDATE sl
	set sl.stdname=i.stdname,
	sl.stdcourse=i.stdcourse
	from studentlog sl
	inner join INSERTED i on sl.logid=i.stdid
	end

		insert into studentlog(stdname, stdcourse, action)
		SELECT i.stdid,i.stdname,i.stdcourse,'UPDATE'
		from INSERTED

		end

		create trigger updaes_tig
		on student
		after update
		as 
		begin

		set NoCOUNT ON;

		insert into studentlog(stdname, stdcourse, action)
		select stdname,stdcourse,'UPDATED'
		FROM inserted
		END

			SELECT * FROM student
	SELECT * FROM studentlog

	CREATE trigger updatess_tig
	on student 
	after update
	as 
	begin
	update sl
	set sl.stdname=i.stdname,
	sl.stdcourse=i.stdcourse
	from studentlog sl
	inner join inserted i on sl.logid=i.stdid
	end


	INSERT INTO student (stdname, stdcourse) VALUES ('Alice', 'Computer Science');
INSERT INTO student (stdname, stdcourse) VALUES ('Bob', 'Information Technology');
INSERT INTO student (stdname, stdcourse) VALUES ('Charlie', 'Mechanical Engineering');
INSERT INTO student (stdname, stdcourse) VALUES ('David', 'Electrical Engineering');
INSERT INTO student (stdname, stdcourse) VALUES ('Emma', 'Civil Engineering');
INSERT INTO student (stdname, stdcourse) VALUES ('Frank', 'Business Administration');
INSERT INTO student (stdname, stdcourse) VALUES ('Grace', 'Mathematics');
INSERT INTO student (stdname, stdcourse) VALUES ('Henry', 'Physics');
INSERT INTO student (stdname, stdcourse) VALUES ('Isabella', 'Chemistry');
INSERT INTO student (stdname, stdcourse) VALUES ('Jack', 'Biotechnology');