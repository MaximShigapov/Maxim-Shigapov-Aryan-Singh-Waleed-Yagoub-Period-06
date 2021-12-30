create table guestinfo (
	id int(10) not null PRIMARY KEY AUTO_INCREMENT,
    firstname varchar(20) not null,
    lastname varchar(20) not null,
    room int(3) not null,
    staydatebeginning varchar(10) not null,
    staydateend varchar(10) not null,
    email varchar(30) not null
);

insert into guestinfo (firstname, lastname, room, staydatebeginning, staydateend, date) VALUES ('Aryan', 'Singh', '1', '12/17/21', '12/20/21', '2021-12-10-17:34:06');

