create database moneyz;
USE moneyz;

create table tblUser(
	Id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    CONSTRAINT Username UNIQUE varchar(255) NOT NULL,
    Password varchar(255) NOT NULL,
    Created_at datetime() NOT NULL,
    Updated_at datetime() NOT NULL
);

create table tblMoneyz(
	Id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    User_id int(11) NOT NULL,
    Moneyz int(11) NOT NULL,
    FOREIGN KEY (User_id) REFERENCES tblUser(Id)
);