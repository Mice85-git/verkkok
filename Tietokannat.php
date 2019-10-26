create database frisbeekauppaDB;

use frisbeekauppaDB;

create table asiakas(
id_asiakas INT primary key,
enimi VARCHAR(40),
snimi VARCHAR(40),
osoite VARCHAR(40)
) Engine=InnoDB;

insert into asiakas values(1,'Paul','McBeth','California 45');
insert into asiakas values(2,'Seppo','Paju','Puistokatu 12');
insert into asiakas values(3,'Richard','Wysoky','Florida 69');
insert into asiakas values(4,'Mikko','Kivela','Helatie 22');

GRANT ALL ON frisbeekauppaDB.* TO 'phpUser'@'localhost' IDENTIFIED BY 'phpPass';

create table malli(
id_malli INT primary key,
Mnimi VARCHAR(40)
) Engine=InnoDB;

insert into malli values(1,'D1');
insert into malli values(2,'D2');
insert into malli values(3,'P1');
insert into malli values(4,'M2');
insert into malli values(5,'Aviar');
insert into malli values(6,'Boss');
insert into malli values(7,'Destroyer');
insert into malli values(8,'Teebird');
insert into malli values(9,'Challeger');
insert into malli values(10,'Predator');
insert into malli values(11,'Buzz');

create table valmistaja(
id_valmistaja INT primary key,
Vnimi VARCHAR(40)
) Engine=InnoDB;

insert into valmistaja values(1,'Innova');
insert into valmistaja values(2,'Prodigy');
insert into valmistaja values(3,'Discraft');

create table osto(
id_osto INT primary key,
ostoPVM DATE
) Engine=InnoDB;

create table frisbee(
id_frisbee INT primary key,
MaaraKPL INT(11)
) Engine=InnoDB;
