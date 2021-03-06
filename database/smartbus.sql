CREATE TABLE moneycard(
    iduser int,
  idcard int Primary key,
  dateuse date,
  price int
);
CREATE TABLE taikhoan(
    iduser int PRIMARY KEY,
    username varchar(25),
    password varchar(25),
    stt int
);
create table thongtin(
    iduser int PRIMARY KEY,
    FOREIGN Key (iduser) REFERENCES taikhoan(iduser),
    name varchar(50),
    sotien int
);
CREATE table xe(
    soxe int PRIMARY KEY,
    tentaixe varchar(50),
    soghe int,
    tinhtrang int
);
CREATE table tuyen(
    sotuyen int,
    soxe int,
    giatien int
);
CREATE table diem(
    iddiem int PRIMARY KEY,
    tendiem varchar(200),
    sotuyen int,
    thutu int
);
CREATE TABLE hoadon(
    mahd int PRIMARY KEY,
    iduser int, FOREIGN KEY (iduser) REFERENCES taikhoan(iduser),
    soxe int, FOREIGN KEY (soxe) REFERENCES xe(soxe),
    diem_batdau varchar(200),
    diem_ketthuc varchar(200),
    sotien int,
    ngaydat date,
    tinhtrang int
);
INSERT into taikhoan VALUES(1,'user1','1',0),(2,'user2','2',0),(3,'user3','3',0);
INSERT into thongtin VALUES(1,'Bạn Tú Giấu Tên','30000'),(2,'Bạn Điền Giấu Tên','30000'),(3,'Bạn Như Giấu Tên','30000');
INSERT into xe VALUES(1,'Garena',10,0),(6,'3 Sum 6 Fire',10,0),(38,'6 Light',10,0),(7,'6 Shadow',10,0),(2,'VTC',10,0),(3,'VNG',10,0);
INSERT into diem VALUES(1,'Bến xe chợ lớn',6,0),
(2,'Thuận kiều Plaza',6,1),
(3,'Bệnh viện Chợ Rẫy',6,2),
(4,'Đại học Y Dược',6,3),
(5,'Bệnh viện Đại học Y Dược',6,4),
(6,'Bệnh viện Nguyễn Tri Phương',6,5),
(7,'Chợ An Đông',6,6),
(8,'Huỳnh Mẫn Đạt',6,7),
(9,'Chợ Bầu Sen',6,8),
(10,'Đại học Sài Gòn',6,9),
(11,'ĐH Khoa Học Tự Nhiên',6,10),
(12,'Trường Lê Hồng Phong',6,11),
(13,'Phạm Viết Chánh',6,12),
(14,'Bệnh viện Từ Dũ',6,13),
(15,'Tôn Thất Tùng',6,14),
(16,'Sở Y Tế',6,15),
(17,'Nhà Văn Hóa Lao Động',6,16),
(18,'Pasteur',6,17),
(19,'Mạc Đỉnh Chi',6,18),
(20,'Đinh Tiên Hoàng',6,19),
(21,'Thảo Cầm Viên',6,20),
(22,'Cầu Thị Nghè',6,21),
(23,'Nhà Thờ Thị Nghè',6,22),
(24,'Trung tâm Dưỡng Lão',6,23),
(25,'Trường trung học Gia Định',6,24),
(26,'Đại học Hutech',6,25),
(27,'Khu Du lịch Văn Thánh',6,26),
(28,'Cầu Sài Gòn',6,27),
(29,'Cầu Đen',6,28),
(30,'Thảo Điền',6,29),
(31,'Metro Quận 2',6,30),
(32,'Cát Lái',6,31),
(33,'Xi măng hà tiên – trạm thu phí',6,32),
(34,'Ngã 4 Tây Hòa (RMK)',6,33),
(35,'Trạm xây dựng',6,34),
(36,'Khu QLGTDT số 2',6,35),
(37,'Tu viện Quảng Đức',6,36),
(38,'Công ty Sanofi Aventis',6,37),
(39,'Công ty may Sài Gòn',6,38),
(40,'Trường mầm non Vành Khuyên',6,39),
(41,'Làng Thiếu Niên Thủ Đức',6,40),
(42,'Ngã ba Chương Dương',6,41),
(43,'Cao đẳng xây dựng 2',6,42),
(44,'Siêu thị Nguyễn Kim',6,43),
(45,'Trường ĐHSP Kỹ Thuật',6,44),
(46,'Công an Quận 9',6,45),
(47,'Trạm Hutech – Khu Công nghệ cao',6,46),
(48,'Khu Công nghệ cao quận 9',6,47),
(49,'Đại học Nông Lâm',6,48),
(50,'Chu Văn An',7,0),
(51,'Chợ Kim Biên',7,1),
(52,'Bưu điện Quận 5',7,2),
(53,'Rạp Đại Quang',7,3),
(54,'Bệnh viện Chợ Rẫy',7,4),
(55,'Đại học Y Dược',7,5),
(56,'Bệnh viện Đại học Y Dược',7,6),
(57,'Công viên Văn Lang',7,7),
(58,'Trường Trần Khai Nguyên',7,8),
(59,'Đại học Kinh tế',7,9),
(60,'Trường Hoàng Văn Thụ',7,10),
(61,'Chợ Nhật Tảo',7,11),
(62,'Học viện Quân y',7,12),
(63,'Bệnh viện Nhi Đồng 1',7,13),
(64,'Nhà thờ Vinh Sơn',7,14),
(65,'Nhà hát Hòa Bình',7,15),
(66,'Học viện Hành chính Quốc Gia',7,16),
(67,'Bệnh viện Bình Dân',7,17),
(68,'Siêu thị Maximark',7,18),
(69,'Nhà thờ Dòng chúa Cứu thế',7,19),
(70,'Trần Quốc Thảo',7,20),
(71,'Chợ Nguyễn Văn Trỗi',7,21),
(72,'Trần Quang Diệu',7,22),
(73,'Bệnh viện An Sinh',7,23),
(74,'Ngã Tư Nguyễn Văn Trỗi',7,24),
(75,'Trung tâm văn hóa Quận Phú Nhuận',7,25),
(76,'Cổng xe lửa',7,26),
(77,'Bệnh viện Quận Phú Nhuận',7,27),
(78,'Cây xăng Quân khu 7',7,28),
(79,'Cổng trước SVĐ Quân khu 7',7,29),
(80,'Rạp Tân Sơn Nhất',7,30),
(81,'Bãi xe buýt Phổ Quang',7,31),
(82,'Cây xăng Quân đội',7,32),
(83,'Trường đại học kỹ thuật Công nghệ',7,33),
(84,'Cuối công viên Gia Định',7,34),
(85,'Ngã ba Đặng Văn Sâm',7,35),
(86,'Đầu công viên Gia Định',7,36),
(87,'Cầu vượt Nguyễn Thái Sơn – Nguyễn Kiệm',7,37),
(88,'Ngã ba Phạm Ngũ Lão',7,38),
(89,'Trường Đại học Công Nghiệp',7,39),
(90,'UBND Phường 5',7,40),
(91,'Lotte Mark',38,0),
(92,'Đường số 15',38,1),
(93,'Cầu Kinh Tẻ',38,2),
(94,'Hồ Bơi Quận 4',38,3),
(95,'Chung cư Tân Vĩnh',38,4),
(96,'Hoàng Diệu',38,5),
(97,'Trường THPT Vân Đồn',38,6),
(98,'Chùa Anh Linh',38,7),
(99,'Trường Cao Thắng',38,8),
(100,'Trạm Trung chuyển trên đường Hàm Nghi',38,9),
(101,'Khách sạn New world',38,10),
(102,'Trống Đồng',38,11),
(103,'Cách Mạng tháng 8',38,12),
(104,'Tôn Thất Tùng',38,13),
(105,'Bệnh viện Từ Dũ',38,14),
(106,'Trung  ương Hội Chữ thập đỏ TP',38,15),
(107,'Nhà sách Minh Khai',38,16),
(108,'Đại học Sư Phạm',38,17),
(109,'Chợ Bầu Sen',38,18),
(110,'Huỳnh Mẫn Đạt',38,19),
(111,'Bệnh viện 30/4',38,20),
(112,'Ngã tư Nguyễn Chí Thanh',38,21),
(113,'Chung cư Ngô Gia Tự',38,22),
(114,'Chùa An Quang',38,23),
(115,'Bệnh viện Nhi Đồng 1',38,24),
(116,'Nhà thờ Đồng Tiến',38,25),
(117,'Bệnh viện 115',38,26),
(118,'Quán Hoàng Ty',38,27),
(119,'Ngân hàng Quân Đội',38,28),
(120,'Đại học Bách Khoa (Cổng sau)',38,29),
(121,'Bệnh viện Trưng Vương',38,30),
(122,'Nhà thi đấu Phú Thọ',38,31),
(123,'Coopmart Phú thọ',38,32),
(124,'Vòng xoay Lê Đại Hành',38,33),
(125,'Chợ Tân Phước',38,34),
(126,'Ngã tư Lạc Long Quân',38,35),
(127,'Âu Cơ',38,36),
(128,'Trạm Đăng Kiểm',38,37),
(129,'Trường Lê Quý Đôn',38,38),
(130,'Bãi xe buýt Đầm Sen',38,39);
INSERT into tuyen VALUES(6,6,2000),(38,38,2000),(7,7,2000),(6,1,2000),(38,2,2000),(7,3,2000);