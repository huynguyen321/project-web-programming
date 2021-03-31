create database product;
use product;
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

create table accessories(
IDaccessories int auto_increment primary key,
NameAccessories varchar(70) not null,
Price int not null,
Discount int default null,
Image varchar(800) default null,
`Description` varchar (1000) default null
);

insert into accessories(NameAccessories,Price,Discount,`Description`)
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


