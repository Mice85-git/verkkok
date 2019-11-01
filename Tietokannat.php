create database frisbeekauppaDB;

use frisbeekauppaDB;

create table asiakas(
id_user INT auto_increment primary key,
knimi VARCHAR(40),
salasana VARCHAR(255)
) Engine=InnoDB;

insert into asiakas values(1,'Paul','McBeth');
insert into asiakas values(2,'Seppo','Paju');
insert into asiakas values(3,'Richard','Wysoky');
insert into asiakas values(4,'Mikko','Kivela');

GRANT ALL ON frisbeekauppaDB.* TO 'phpUser'@'localhost' IDENTIFIED BY 'phpPass';


create table malli(
id_malli INT primary key,
Mnimi VARCHAR(40),
image VARCHAR(40)
) Engine=InnoDB;

insert into malli values(1,'D1','D1.jpg');
insert into malli values(2,'D2','D2.jpg');
insert into malli values(3,'P1','P1.jpg');
insert into malli values(4,'M2','M2.jpg');
insert into malli values(5,'Aviar','aviar.jpg');
insert into malli values(6,'Boss','boss.jpg');
insert into malli values(7,'Destroyer','destroyer.jpg');
insert into malli values(8,'Teebird','teebird.jpg');
insert into malli values(9,'Challeger','challenger.jpg');
insert into malli values(10,'Predator','predator.jpg');
insert into malli values(11,'Buzz','buzz.jpg');

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
