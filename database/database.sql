create table users(
	username varchar(20) primary key,
	firstname varchar(20),
	lastname varchar(20),
	age int(10),
	password varchar(20)
);

#to import mysql backup file
#mysql -u username -p database_name < file.sql