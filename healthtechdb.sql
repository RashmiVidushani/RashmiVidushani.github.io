create database healthtech;
use healthtech;
create table doctor(
SLMC_no int not null,
passport_no varchar(255),
NIC varchar(15) not null,
email varchar(255) not null,
phone int not null,
password varchar(50), 
primary key (SLMC_no)
);

create table hospital(
registration_no int not null,
email varchar(255) not null,
phone int not null,
password varchar(50), 
primary key (registration_no)
);

create table individual(
passport_no varchar(255),
NIC varchar(15) not null,
email varchar(255) not null,
phone int not null,
password varchar(50), 
primary key (nic)
);

Insert into doctor(passport_no, NIC, email, phone, password) Values('N1727657','876288786V','adam123@gmail.com', 5247862152,'76adam'),('N1727957','876298786V','adam12123@gmail.com', 58768862152,'76dam'),('2000851004w','s232423454',"audrian@gmail.com", "94713820425","kiran123");
Insert into hospital(registration_no,email,phone,password)values(2623,'asiri@gmail.com',09283887523,'21huuoi')
Insert into individual(passport_no,nic,email,phone,pasword)values('262375876y','y87875868','asirjhji@gmail.com',09283823,'21hddsi')