CREATE TABLE cases (
id int nut null primary key auto_increment,
mony int(10),
description text(255),
GBA int(10)
);
       CREATE TABLE student (
       id int nut null primary key auto_increment,
       name varchar(255),
       email varchar(255),
       password varchar(255),
       id_number varchar(255),
       img LONGBLOB,
       user_case varchar(255),
       time time
);
       CREATE TABLE doners (
       id int nut null primary key auto_increment,
       name varchar(255),
       email varchar(255),
       password varchar(255),
       credit_card varchar(255),
       user_case varchar(255)
);

