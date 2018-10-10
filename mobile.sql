-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 17, 2018 lúc 01:52 PM
-- Phiên bản máy phục vụ: 5.7.19
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phanminhtri`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hsx`
--

DROP TABLE IF EXISTS `hsx`;
CREATE TABLE IF NOT EXISTS `hsx` (
  `IDHSX` int(11) NOT NULL AUTO_INCREMENT,
  `TenHSX` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IDHSX`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hsx`
--

INSERT INTO `hsx` (`IDHSX`, `TenHSX`) VALUES
(1, 'Apple'),
(2, 'SamSung'),
(3, 'Lenovo\r\n'),
(4, 'Oppo'),
(5, 'Asus');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

DROP TABLE IF EXISTS `loaisp`;
CREATE TABLE IF NOT EXISTS `loaisp` (
  `IDLoai` int(11) NOT NULL AUTO_INCREMENT,
  `TenLoai` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IDLoai`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`IDLoai`, `TenLoai`) VALUES
(1, 'Điện thoại'),
(2, 'Tablet'),
(3, 'Laptop'),
(4, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TenSP` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `GiaSP` int(11) NOT NULL,
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL,
  `IDLoai` int(11) NOT NULL,
  `IDHSX` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ID`, `TenSP`, `GiaSP`, `HinhAnh`, `MoTa`, `IDLoai`, `IDHSX`) VALUES
(1, 'Điện thoại iPhone 8 Plus 256GB', 28790000, 'iphone-8.png', 'Thừa hưởng thiết kế đã đạt đến độ chuẩn mực, thế hệ iPhone 8 Plus thay đổi phong cách bóng bẩy hơn và bổ sung hàng loạt tính năng cao cấp cho trải nghiệm sử dụng vô cùng tuyệt vời.', 1, 1),
(23, 'Điện thoại Oppo F7', 7900000, 'dt-oppo.png', 'Màn hình:	LTPS LCD, 6.23\", Full HD+\r\nHệ điều hành:	ColorOS 5.0 (Android 8.1)\r\nCamera sau:	16 MP\r\nCamera trước:	25 MP\r\nCPU:	MediaTek Helio P60\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G', 1, 4),
(2, 'Điện thoại iPhone 8 256GB', 25790000, 'iphone-8-256gb2-400x460.png', 'iPhone 8 256GB nổi bật với điểm nhấn mặt lưng kính kết hợp cạnh viền và mặt trước giữ nguyên thiết kế như iPhone 7, cùng với đó là hàng loạt công nghệ đáng mong đợi như sạc nhanh, không dây hay hỗ trợ thực tế ảo AR.\r\n\r\nThay đổi phong cách thiết kế\r\n\r\niPhone 8 kết hợp giữa những đường nét đã làm nên chuẩn mực, thương hiệu với sự thời thượng và hiện đại của mặt lưng phủ kính cường lực thay vì nguyên khối kim loại. Điểm thiết kế này mang lại độ bóng bẩy, đẹp mắt hơn cho sản phẩm.', 1, 1),
(3, 'Máy tính bảng iPad Pro 10.5 inch Wifi 64GB (2017)  ', 16990000, 'ipad-2.png', ' Pro 10.5 inch Wifi 64GB (2017) với kích thước màn hình nhỏ hơn, viền màn hình siêu mỏng cùng hiệu năng mạnh mẽ sẽ đáp ứng tốt cho bạn trong mọi nhu cầu sử dụng hằng ngày.\r\n\r\nThiết kế sang trọng\r\n\r\nĐiểm khác biệt lớn nhất ở mẫu iPad Pro 10.5 inch Wifi 64GB (2017) so với các thế hệ iPad cũ chính là phần viền màn hình của máy giờ đây đã được làm mỏng hơn rất nhiều so với các đàn anh đi trước.\r\n\r\niPad Pro 10.5 inch bên trái với viền màn hình siêu mỏng so với iPad Pro 9.7 inch', 2, 1),
(4, 'Máy tính bảng iPad Wifi Cellular 128GB (2017)', 14990000, 'ipad-pro-wifi-cellular-128gb-300-200x200.jpg', 'Dòng máy tính bảng iPad 9.7 inch NEW (2017) mới của Apple sở hữu cho mình cấu hình mạnh mẽ cùng mức giá bán rất hấp dẫn.\r\n\r\nThiết kế sang trọng\r\n\r\nVới chất liệu kim loại nguyên khối sang trọng, các chi tiết được gia công tỉ mỉ, tinh xảo khiến iPad đến nay vẫn được rất nhiều người yêu thích với vẻ ngoài cuốn hút của nó.', 2, 1),
(5, 'Máy tính bảng iPad Wifi Cellular 32GB (2017)', 12990000, 'ipad-pro-wifi-cellular-128gb-300-200x200.jpg', 'Dòng máy tính bảng iPad 9.7 inch NEW (2017) mới của Apple sở hữu cho mình cấu hình mạnh mẽ cùng mức giá bán rất hấp dẫn.\r\n\r\nThiết kế sang trọng\r\n\r\nVới chất liệu kim loại nguyên khối sang trọng, các chi tiết được gia công tỉ mỉ, tinh xảo khiến iPad đến nay vẫn được rất nhiều người yêu thích với vẻ ngoài cuốn hút của nó.', 2, 1),
(6, 'Điện thoại Samsung Galaxy Note 8', 22490000, 'dt-samsung-2.png', 'Galaxy Note 8 là niềm hy vọng vực lại dòng Note danh tiếng của Samsung với diện mạo nam tính, sang trọng. Trang bị camera kép xóa phông thời thượng, màn hình vô cực như trên S8 Plus, bút Spen với nhiều tính năng mới và nhiều công nghệ được Samsung ưu ái đem lên Note 8.', 1, 2),
(7, 'Điện thoại Samsung Galaxy S8', 18490000, 'dt-samsung-2.png', 'Galaxy S8 là siêu phẩm mới nhất được Samsung ra mắt vào ngày 29/3 với thiết kế nhỏ gọn hoàn toàn mới, màn hình vô cực viền siêu mỏng.\r\n\r\nTrên tay Galaxy S8\r\n\r\n❝Máy sử dụng rất mượt. Màn hình vô cực xem phim và chơi game quá đã, 5,8 inch mà nhỏ gọn hơn iphone 5,5 inch. Bảo vệ mống mắt, vân tay và khuôn mặt nhận diện cực nhạy ban ngày, thiếu sáng thì nên dùng vân tay. Mình là tín đồ iPhone mà chuyển sang dùng S8 thì đủ hiểu là máy chất như thế nào rồi.❞\r\n\r\nNguyễn Ngân - Bình Thủy, Cần Thơ\r\nĐã mua tại Thế giới di động\r\nLần đầu tiên cầm chiếc máy trên tay, cảm giác không còn là chiếc smartphone truyền thống nữa.\r\n\r\nMáy dài và ốm, gọn trong lòng bàn tay khiến mình nhớ đến thời LG có chiếc Chocolate dài dài và thon gọn kiểu này, tất nhiên Galaxy S8 cao cấp hơn nhiều.\r\n\r\nTrên tay Galaxy S8\r\n\r\nPhía trước là màn hình 5.8 inch độ phân giải QHD+ 2960 x 1440 pixels, tỉ lệ 18,5:9 cùng màn hình cạnh căng tràn. Sử dụng công nghệ Super AMOLED cho khả năng hiển thị tươi tắn, độ sáng tuyệt vời.\r\n\r\n❝Màn hình vô cực trên máy khi xem youtube rất sướng, hình ảnh tràn ra đầy màn hình nhìn thích mắt, màu sắc và độ sáng thì khỏi phải chê, mình sử ', 1, 2),
(8, 'Máy tính bảng Samsung Galaxy Tab A 8.0 (2017)', 6490000, 'tablet-samsung.png', 'Samsung Galaxy Tab A 8.0 (2017) mới có màn hình tỉ lệ 4:3 với không gian hiển thị rộng thông minh cho người dùng.\r\n\r\nMàn hình rộng hiển thị thông tin trọn vẹn\r\n\r\nVới cách bố trí chiều ngang và dọc theo tỉ lệ 4:3 thông minh, những thông tin bạn đọc trên một trang web hay tài liệu được hiển thị nhiều và trọn vẹn trong một khung hình hơn.\r\n\r\nMáy sử dụng công nghệ hiển thị PLS TFT, độ phân giải 1280 x 800 pixels cho hình ảnh hiển thị chi tiết, giúp bạn thoải mái lướt web hay xem phim phụ đề may không mỏi mắt.', 2, 2),
(9, 'Máy tính bảng Samsung Galaxy Tab A6 7.0', 3590000, 'dt-samsung.png', 'Samsung Galaxy Tab A 7.0 với thiết kế vẫn mang vẻ truyền thống và cấu hình tốt, khả năng hiển thị cải thiện, cùng kết nối 4G.\r\n\r\nThiết kế truyền thống, sang trọng\r\n\r\nChiếc tablet này được thay đổi đôi chút so với người tiền nhiệm là Tab A 8.0 với cạnh viền được bo thêm 1 đường cong nhô lên, tạo điểm nhấn khác biệt.', 2, 2),
(10, 'Máy tính bảng Samsung Galaxy Book 10.6 inch', 19990000, 'mt-samsung.png', 'Đặc điểm nổi bật của Samsung Galaxy Book 10.6 inch\r\n\r\n\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nBộ sản phẩm chuẩn: Adapter, Sách hướng dẫn, Bàn phím, Bút cảm ứng, Hộp máy\r\nSamsung Galaxy Book 10.6 inch là mẫu tablet 2 trong 1 chạy trên nền tảng Windows 10 nhưng vẫn sở hữu cho mình cây bút Spen thần thánh.\r\n\r\nThiết kế quen thuộc\r\n\r\nNhìn từ bên ngoài thì chiếc Samsung Galaxy Book không có quá nhiều sự khác biệt so với các tablet 2 trong 1 đang có mặt trên thị trường. Máy được gia công khá tốt, các chi tiết được hoàn thiện với độ chính xác cao.', 2, 2),
(24, 'Điệ thoại Oppo R7', 9000000, 'oppo-r7-plus-detail-400x533.png', 'Màn hình:	AMOLED, 5\", AMOLED 16 triệu màu\r\nHệ điều hành:	Android 5.1 (Lollipop)\r\nCamera sau:	13 MP\r\nCamera trước:	8 MP\r\nCPU:	Snapdragon 615 8 nhân 64-bit\r\nRAM:	2 GB\r\nBộ nhớ trong:	16 GB\r\nThẻ SIM:\r\nNano SIM & Micro SIM, Hỗ trợ 4G', 1, 4),
(11, 'Điện thoại Asus Zenfone 4 Max Pro ZC554KL', 4990000, 'dt-asus-2.png', 'Asus ZenFone 4 Max Pro là sản phẩm có mức giá rẻ nhất được Asus giới thiệu trong sự kiện vào tháng 8 vừa rồi, ưu điểm lớn nhất của máy chính là viên pin dung lượng khủng cùng bộ đôi camera kép ấn tượng.\r\n\r\nThiết kế quen thuộc\r\n\r\nZenFone 4 Max Pro sở hữu thiết kế khá quen thuộc của Asus với các góc cạnh được bo tròn cho cảm giác thoải mái khi cầm nắm, đặc biệt không có cảm giác trơn trượt khi cầm tay và không sợ dính dấu vân tay', 1, 5),
(12, 'Điện thoại Asus Zenfone Live ZB501KL', 2990000, 'dt-asus.jpg', 'Vào tháng 2, Asus chính thức giới thiệu chiếc Zenfone Live với  thiết kế sang trẻ trung cùng nhiều tính năng hấp dẫn ở camera trước phục vụ nhu cầu live stream ngày càng nhiều trên facebook.', 1, 5),
(13, 'Máy tính bảng Asus Zenfone Go ZB690KG', 2990000, 'tablet-asus.jpg', 'Vào tháng 2, Asus chính thức giới thiệu chiếc Zenfone Live với  thiết kế sang trẻ trung cùng nhiều tính năng hấp dẫn ở camera trước phục vụ nhu cầu live stream ngày càng nhiều trên facebook.', 2, 5),
(14, 'Laptop Asus X441NA N3350/4GB/500GB/Win10/(GA017T)', 6490000, 'laptop-asus.jpg', 'Vào tháng 2, Asus chính thức giới thiệu chiếc Zenfone Live với  thiết kế sang trẻ trung cùng nhiều tính năng hấp dẫn ở camera trước phục vụ nhu cầu live stream ngày càng nhiều trên facebook.', 3, 5),
(15, 'Laptop Asus A441UA i3 6006U/4GB/500GB/Win10/(WX156T)', 9990000, 'laptop-asus.png', 'Vào tháng 2, Asus chính thức giới thiệu chiếc Zenfone Live với  thiết kế sang trẻ trung cùng nhiều tính năng hấp dẫn ở camera trước phục vụ nhu cầu live stream ngày càng nhiều trên facebook.', 3, 5),
(16, 'Điện thoại Lenovo K6 Power', 4490000, 'lenovo-vibe-k6-power-400-400x460.png', 'Lenovo Vibe K6 Power sở hữu thiết kế đẹp, nhỏ gọn cùng hiệu năng mạnh mẽ đáp ứng mượt mà các tác vụ của người dùng.\r\n\r\nThiết kế thời trang\r\n\r\nMáy mang trong mình thiết kế nguyên khối với chất liệu kim loại sang trọng và cứng cáp. Các góc cạnh của máy được bo cong mềm mại đem lại cảm giác cầm nắm khá thoải mái.', 1, 3),
(17, 'Laptop Lenovo IdeaPad 120S 11IAP N3350/2GB/32GB/Win10/(81A40072VN)', 5190000, 'laptop-lenovo.jpg', 'Lenovo IdeaPad 120S 11IAP mang trong mình một cấu hình đủ dùng cho những ứng dụng cơ bản cùng mức giá bán hấp dẫn phù hợp với những bạn học sinh sinh viên hay những người có thu nhập thấp.\r\n\r\nCấu hình phù hợp với các ứng dụng nhẹ nhàng\r\n\r\nMáy chỉ sử dụng chip xử lý Celeron và RAM 2 GB DDR4 (On board) để đảm bảo giá thành tốt nhất cho sản phẩm. \r\n\r\nỔ cứng eMMC: 32 GB khá hạn chế cho việc lưu trữ dữ liệu', 3, 3),
(18, 'Laptop Lenovo IdeaPad 110 15IBR N3710/4GB/500GB/Win10/(80T700BKVN)', 6990000, 'laptop-lenovo.jpg', 'Lenovo IdeaPad 110 15IBR N3710 là chiếc laptop đơn giản hỗ trợ bạn công việc nhẹ nhàng và giải trí hằng ngày.\r\n\r\nCấu hình phù hợp cho công việc nhẹ nhàng\r\n\r\nMáy sử dụng chip Pentium N3710 tốc độ CPU 1.6 GHz và có thể nâng cấp lên tối đa 2.56 GHz để giúp máy vận hành hiệu quả hơn.\r\n\r\nLaptop phù hợp cho công việc văn phòng như nhập liệu hay giải trí lướt web, xem phim.\r\n\r\nMáy có RAM sẵn 4 GB và có thể nâng cấp lên tối đa 8 GB, ổ cứng HDD 500 GB để lưu trữ dữ liệu.', 3, 3),
(19, 'Máy tính bảng Lenovo Phab 2', 3990000, 'lenovo-phab2-460-400x460.png', 'Đặc điểm nổi bật của Lenovo 2\r\n\r\n\r\nBộ sản phẩm chuẩn: Adapter, Sách hướng dẫn, Cáp chuyển, Hộp máy\r\nLenovo Phab 2 là mẫu tablet với kích thước vừa phải, phù hợp với nhiều đối tượng người dùng khác nhau.\r\n\r\nThiết kế chắc chắn\r\n\r\nLenovo Phab 2 lại có kích thước khá nặng cho người dùng cảm giác cầm nắm chắc chắn và cứng cáp. Máy được thiết kế từ nhôm, mặt lưng được bo cong về các cạnh cho máy ôm tay hơn khi sử dụng', 1, 3),
(20, 'Máy tính bảng Lenovo Tab 3 8', 3190000, 'lenovo-tab-3-8-den-400-1-400x460-400x460.png', 'Đặc điểm nổi bật của Lenovo Tab 3 8\"\r\n\r\n\r\nTìm hiểu thêm\r\nBộ sản phẩm chuẩn: Adapter, Sách hướng dẫn, Cáp Micro USB, Hộp máy\r\nLenovo Tab 3 8 inch là chiếc máy tính bảng giá rẻ nhưng vẫn đáp ứng tốt cho người dùng nhu cầu làm việc hay giải trí cơ bản.\r\n\r\nThiết kế đơn giản\r\n\r\nLenovo Tab 3 8 inch mang trong mình thiết kế khá cơ bản cho dòng máy tính bảng giá rẻ với chất liệu nhựa bền bỉ cùng các góc cạnh bo cong mềm mại.', 1, 3),
(22, 'Iphone X', 100000000, 'iphone-x.png', 'asdasd', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'tritretraux12345@gmail.com'),
(2, 'tri', '123', 'tri@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
