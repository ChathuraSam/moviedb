create table users(
	username varchar(20) primary key,
	firstname varchar(20),
	lastname varchar(20),
	age int(10),
	password varchar(20)
);

create table comments(
	movieId varchar(20),
	comment varchar(100),
	user varchar(20),
	dateandtime datetime
);

#to import mysql backup file
#mysql -u username -p database_name < file.sql

insert into comments values
	('MoDT013','Good Movie','Gopi','2019-03-03 08:31:26');

select * from comments where movieId='MoDT013'

