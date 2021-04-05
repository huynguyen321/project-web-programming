create database ourwebsite;
use ourwebsite;
CREATE USER 'huy'@'localhost' IDENTIFIED by '123456';
GRANT all privileges ON *.* TO 'huy'@'localhost';
FLUSH PRIVILEGES;
-- smartphone

-- ram
create table RAM(
IDram int unsigned auto_increment primary key,
RAM varchar(6) not null
);

insert into RAM(RAM) values 
('2GB'),
('3GB'),
('4GB'),
('6GB'),
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
('Vivo');

-- Operating System
create table OS(
IDos int unsigned auto_increment primary key,
OS varchar(20) not null
);
insert into OS(OS) values
('iOS'),
('Android');

-- smartphone
create table Smartphone(
IDphone int unsigned auto_increment primary key,
PhoneName varchar (35) not null,
IDbrand int unsigned not null,
Image varchar(1500) not null,
Vote float not null default 5,
foreign key (IDbrand) references Brand(IDbrand),
fulltext key PhoneName(PhoneName)
);

insert into Smartphone(PhoneName,IDbrand,Image,Vote) 
values
("iPhone 12 Pro Max",1, 'http://huysmartphone.xyz/public/assets/img/product/smartphone/iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg',5),
("Vsmart Star 5",7,'http://huysmartphone.xyz/public/assets/img/product/smartphone/vsmart-star-5-thumb-green-600x600-1-600x600.jpg',4.5),
("Vivo Y51 2020",8, 'http://huysmartphone.xyz/public/assets/img/product/smartphone/vivo-y51-bac-600x600-600x600.jpg',3);

--  detail configuration
create table configuration(
IDphone int unsigned not null,
IDram int unsigned not null,
IDrom int unsigned not null,
IDos int unsigned not null,
Price dec(10,0) not null,
Discount dec(10,0) default 0,
foreign key (IDphone) references smartphone(IDphone) ON DELETE CASCADE ON UPDATE CASCADE,
foreign key (IDram) references RAM(IDram) ON DELETE CASCADE ON UPDATE CASCADE,
foreign key (IDrom) references ROM(IDrom) ON DELETE CASCADE ON UPDATE CASCADE,
foreign key (IDos) references OS(IDos) ON DELETE CASCADE ON UPDATE CASCADE
);

insert into configuration(IDphone,IDram,IDrom,IDos,Price,Discount) 
values
(1,4,4,1,33900000,31690000),
(1,4,5,1,35900000,32690000),
(1,4,6,1,36890000,33290000),
(2,2,3,2,2890000,0),
(2,2,4,2,3290000,0),
(3,5,5,2,5590000,6290000);

-- procedure auto update id

delimiter //
drop procedure if exists updateIDsmartphone //
create procedure updateIDsmartphone()
begin
	declare finished int default 0;
    declare count int default 0;
	declare idNow int default 0;
    declare maxID int default 0;
	declare curID cursor for select IDphone from Smartphone order by IDphone asc;
    declare continue handler for not found set finished = 1;    
    open curID;
	set maxID = (select max(IDphone) from smartphone);
    label_ID: loop
		if finished = 1 then
			leave label_ID;
        end if;
        fetch curID into idNow;
        set count = count + 1;
        
        if count > maxID then
			leave label_ID;
        end if;
        
        if (idNow != count) then
        UPDATE Smartphone
			SET  IDphone = count
			WHERE IDphone = idNow;
        end if;
    end loop label_ID;
    close curID;
end //
delimiter ;

call updateIDsmartphone;

-- show triggers from product;

-- trigger update view smartphone
delimiter //
drop procedure if exists updateViewSmartphone //
create procedure updateViewSmartphone()
begin
	drop view if exists viewSmartphone;
	create algorithm = merge
	view viewSmartphone (IDphone, PhoneName, Brand ,Ram, Rom, OS, Price, Discount, Image, Vote) as
		select s.IDphone , s.PhoneName, b.Brand, RAM.RAM, ROM.ROM, OS.OS, c.Price, c.Discount, s.Image, s.Vote 
		from Smartphone s, Brand b, ROM, RAM, OS, configuration c
		where (s.IDphone = c.IDphone and s.IDbrand = b.IDbrand 
			and RAM.IDram = c.IDram and ROM.IDrom = c.IDrom
			and OS.IDos = c.IDos)
            order by s.IDphone asc;
end //
delimiter ;

call updateViewSmartphone;
-- select * from viewSmartphone;

-- use fulltext search smartphone
delimiter //
drop procedure if exists searchSmartphone //
create procedure searchSmartphone(in namePhone varchar(250))
begin
set namePhone = concat(namePhone,"*");
	select s.IDphone , s.PhoneName, b.Brand, RAM.RAM, ROM.ROM, OS.OS, c.Price, c.Discount, s.Image, s.Vote 
		from Smartphone s, Brand b, ROM, RAM, OS, configuration c
		where 
        MATCH(PhoneName) AGAINST(namePhone IN BOOLEAN MODE)
			and s.IDphone = c.IDphone and s.IDbrand = b.IDbrand 
			and RAM.IDram = c.IDram and ROM.IDrom = c.IDrom
			and OS.IDos = c.IDos
            order by s.IDphone asc;
end //
delimiter ;

-- call searchSmartphone('v');	

--  accessories
create table accessories(
IDaccessories int auto_increment primary key,
AccessoriesName varchar(70) not null,
Price int not null,
Discount int default null,
Image varchar(800) default null,
`Description` varchar (1000) default null,
fulltext key AccessoriesName(AccessoriesName)
);

insert into accessories(AccessoriesName,Price,Discount,`Description`)
values
('Sạc dự phòng Xmobile PW3Y5B',650000,331000,'Sạc dự phòng 10.000mAh. Có 2 cổng ra USB , 1 cổng ra/vào Type-C và 1 cổng vào Micro USB.'),
('Sạc dự phòng eSaver PJ JP106S',650000,390000,'Sạc dự phòng 10.000mAh. Có 1 cổng ra USB , 1 cổng ra/vào Type-C, cổng vào Micro USB và 1 đèn Led tiện dụng.'),
('Tai nghe Bluetooth Thể Thao Mozard S205A',450000,270000,
'Tai nghe thể thao. Thiết kế màu sắc trang nhã, hợp thời trang, nhỏ gọn. 
Không lo tai nghe rơi nhờ 2 đầu hít nam châm, giữ chắc tai nghe khi đeo trên cổ. 
Công nghệ Bluetooth 4.2 cho kết nối ổn định trong phạm vi 10m, âm thanh mượt mà, tiết kiệm pin. 
Đàm thoại 4.5 giờ, nghe nhạc 4 giờ, thời gian chờ đến 105 giờ và chỉ cần 2 giờ để sạc đầy.
Tích hợp nhiều nút chức năng tiện lợi, có micro đàm thoại, nhận cuộc gọi dễ dàng.'),
('Tai nghe Bluetooth True Wireless Mozard AT15',800000,480000,
'Thiết kế sành điệu, nút đệm mềm mại, dễ chịu khi sử dụng lâu.
Chất lượng âm thanh tuyệt hảo, âm bass mạnh mẽ.
Kết nối không dây Bluetooth 5.0 ổn định với phạm vi xa đến 10 m.
Đạt chuẩn kháng nước IPX4, chống thấm nước hiệu quả.
Thời gian đàm thoại 5 giờ, nghe nhạc 4 tiếng, sạc 1.5 giờ, chờ tối đa 300 giờ.');

-- use fulltext search accessories
delimiter //
drop procedure if exists searchAccessories //
create procedure searchAccessories(in nameAccessories varchar(250))
begin
set nameAccessories = concat(nameAccessories,"*");
	select*
		from accessories
		where MATCH(AccessoriesName) AGAINST(nameAccessories IN BOOLEAN MODE)
            order by IDaccessories asc;
end //
delimiter ;

-- call searchAccessories("pw");


--  User 

create table Users (
IDuser int unsigned primary key auto_increment,
`Name` varchar(250) not null,
`UserName` varchar(250) not null unique,
`Email` varchar(450) not null,
`PhoneNumber` varchar(11) not null,
`Address` varchar(250) not null,
`Password`varchar(250) not null,
`Blocked` bit default 0
);

create table Orders(
IDproduct int unsigned not null,
IDuser int unsigned not null,
TypeProduct varchar(30),
foreign key (IDuser) references Users(IDuser),
`Status` varchar(35) default 'Chờ xử lý'
);