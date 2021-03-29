create database smartphone;
use smartphone;
-- ram
create table RAM(
IDram int unsigned auto_increment primary key,
RAM varchar(6) not null
);

insert into RAM(RAM) values 
('521MB'),
('1GB'),
('2GB'),
('4GB'),
('8GB'),
('12GB'),
('16GB'),
('18GB');

-- rom
create table ROM(
IDrom int unsigned auto_increment primary key,
ROM varchar(6) not null
);

insert into ROM(ROM) values
('8GB'),
('16GB'),
('32GB'),
('64GB'),
('128GB'),
('512GB'),
('1TB');

-- brand
create table Brand(
IDbrand int unsigned auto_increment primary key,
Brand varchar(12) not null
);
insert into Brand(Brand) values
('Apple'),
('Samsung'),
('Xiaomi'),
('OPPO'),
('Nokia'),
('Realme'),
('Vsmart'),
('ASUS'),
('Huawei'),
('Vivo'),
('Pocophone');

-- smartphone
create table Smartphone(
IDphone int unsigned auto_increment primary key,
NamePhone varchar (35) not null unique,
IDbrand int unsigned not null,
Price dec(10,0) not null,
img1 longblob not null,
img2 longblob not null,
img3 longblob not null,
vote int not null default 5,
foreign key (IDbrand) references Brand(IDbrand)
);

--  detail configuration
create table configuration(
IDphone int unsigned not null,
IDram int unsigned not null,
IDrom int unsigned not null,
Screen varchar(25) not null,
QualityScreen varchar(30) not null,
OS varchar(40) not null,
Pin varchar(40) not null,
BeforeCamera varchar(200) not null,
AfterCamera varchar(200) not null,
Version int,
foreign key (IDphone) references smartphone(IDphone),
foreign key (IDram) references RAM(IDram),
foreign key (IDrom) references ROM(IDrom)
);