-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2021 lúc 05:52 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlchguitar`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cartinf`
--

CREATE TABLE `tbl_cartinf` (
  `cart_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `pro_id` int(20) NOT NULL,
  `cart_soluong` int(20) DEFAULT NULL,
  `cart_price` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cartinf`
--

INSERT INTO `tbl_cartinf` (`cart_id`, `user_id`, `pro_id`, `cart_soluong`, `cart_price`) VALUES
(1, 1, 2, 3, 1790000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cartmain`
--

CREATE TABLE `tbl_cartmain` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` int(20) NOT NULL,
  `note` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cartmain`
--

INSERT INTO `tbl_cartmain` (`user_id`, `user_name`, `user_address`, `user_phone`, `note`, `Total`) VALUES
(1, 'HoangHiep_hg', 'Hà Giang', 942215211, '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `menu_id` int(20) NOT NULL,
  `cate_id` int(5) NOT NULL,
  `cate_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`menu_id`, `cate_id`, `cate_name`, `cate_status`) VALUES
(1, 1, 'Đàn Guitar Acoustic', 1),
(1, 2, 'Đàn Guitar Cao Cấp', 1),
(1, 3, 'Đàn Guitar Classic', 1),
(1, 4, 'Đàn Guitar Có EQ', 1),
(2, 5, 'Đàn Ukulele', 1),
(2, 6, 'Đàn Kalimba', 1),
(2, 7, 'Kèn Harmonica', 1),
(2, 8, 'Rollup Piano', 1),
(3, 9, 'Capo Guitar', 1),
(3, 10, 'Dây Đàn Guitar', 1),
(3, 11, 'Trang Sức Guitar', 1),
(3, 12, 'Dụng Cụ Trang Trí Guitar', 1),
(3, 13, 'Khóa Đàn Guitar', 1),
(3, 14, 'Guitar Pickups, Equalizer (EQ)', 1),
(3, 15, 'Phím Gảy Guitar (Pick/Pickholder)', 1),
(3, 16, 'Dây Đeo Guitar / Ukulele', 1),
(3, 17, 'Phụ Kiện Dành Cho Người Mới Tập', 1),
(3, 18, 'Học Đàn Guitar Cơ Bản', 1),
(3, 19, 'Học Đàn Guitar Nâng Cao', 1),
(3, 20, 'Hợp Âm Guitar', 1),
(3, 21, 'Học Đàn Ukelele', 1),
(4, 22, 'Học Đàn Guitar Cơ Bản', 1),
(4, 23, 'Học Đàn Guitar Nâng Cao', 1),
(4, 24, 'Hợp Âm Guitar', 1),
(4, 25, 'Học Đàn Ukelele', 1),
(5, 26, 'Hướng Dẫn Mua Đàn Guitar Cho Người Mới Tập Chơi', 1),
(5, 27, 'Hướng Dẫn Đặt Hàng Online', 1),
(5, 28, 'Câu Hỏi Thường Gặp', 1),
(5, 29, 'Hướng Dẫn Mua Đàn Ukulele Cho Người Mới Tập Chơi', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(20) NOT NULL,
  `menu_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `menu_name`) VALUES
(1, 'Đàn guitar'),
(2, 'Nhạc cụ khác'),
(3, 'Phụ kiện Guitar'),
(4, 'Tự học Guitar'),
(5, 'Hỗ trợ khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `cate_id` int(5) NOT NULL,
  `pro_id` int(5) NOT NULL,
  `pro_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_price` int(20) NOT NULL,
  `pro_rate` int(6) NOT NULL,
  `pro_status` int(2) NOT NULL,
  `pro_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_img4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_band` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_des` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`cate_id`, `pro_id`, `pro_name`, `pro_price`, `pro_rate`, `pro_status`, `pro_img`, `pro_img1`, `pro_img2`, `pro_img3`, `pro_img4`, `pro_band`, `pro_des`) VALUES
(1, 1, 'Guitar Acoustic Station HD-199', 1990000, 0, 1, 'acoustic1.jpg', 'acoustic1.1.jpg', 'acoustic1.2.jpg', 'acoustic1.3.jpg', 'acoustic1.4.jpg', '', 'Toàn bộ gỗ nguyên miếng, sử dụng càng lâu âm thanh càng hay, đó là đặc điểm \"ăn tiền\" của gỗ nguyên miếng.  Với sự nâng cấp hoàn toàn từ độ già của gỗ đến độ kĩ của gia công, STATION HD199 đem lại sự vượt trội về cả ngoại hình lẫn âm thanh, đây chính là sự lựa chọn hàng đầu của tầm giá 2 triệu. Với dòng STATION HD199 này, bạn hoàn toàn thoải mái tập chơi từ cơ bản đến nâng cao, chơi hẳn lâu dài vài nằm hoặc chục năm vẫn không vấn đề gì đâu nè.  STATION HD199 với những điểm cộng này chắc chắn sẽ khiến bạn hài lòng:  Gỗ nguyên miếng 100%, từ mặt đến lưng hông và cần đàn đều là gỗ nguyên miếng rất già tuổi - solid hoàn toàn nên vân gỗ rất dày dặn, đẹp màu. Gia công kĩ với đường nét rõ ràng, lớp sơn mượt mà, mịn màng, hút mắt ngay từ cái nhìn đầu tiên. Âm thanh vừa phải, một chút ấm, chút sáng, to và vang hơn so với người em STATION HD199 vì có thể tích thùng đàn lớn hơn 1 xíu, bạn có thể thoải mái chơi đệm hát và fingerstyle từ vỡ lòng đến nâng cao với âm thanh lôi cuốn. Body dáng D mạnh mẽ dành cho những bạn có dáng người to lớn, hoặc chỉ đơn giản là bạn rất thích sự mạnh mẽ của nó. Đặc biệt có sẵn ti chỉnh cong cần nên về lâu dài sẽ giúp bạn không lo ngại việc đàn bị cong cần nữa nhé. Ngoài ra STATION HD199 còn được chế độ ưu đãi tặng kèm bộ phụ kiện:  Bao da 3 lớp dày dặn, sang trọng Phím gảy x 2 Sổ hướng dẫn tự học đệm hát cơ bản tại nhà biên soạn bởi Guitar Station STATION HD199 còn được hỗ trợ chế độ:  Bảo hành 1 năm hoàn toàn miễn phí với tất cả các lỗi từ nhà sản xuất Hỗ trợ kiểm tra và bảo trì trọn đời sản phẩm. Tầm giá 2 triệu thì thực sự STATION HD199 là một lựa chọn hoàn hảo cho một người mới bắt đầu tập nhưng muốn có được 1 cây đàn vừa đẹp cả phần nhìn, vừa hay cả phần nghe đấy nhé. Đừng vội bỏ qua bạn này nha.'),
(1, 2, 'Guitar Acoustic Station HD-200', 1790000, 0, 1, 'acoustic2.jpg', 'acoustic2.1.jpg', 'acoustic2.2.jpg', 'acoustic2.3.jpg', 'acoustic2.4.jpg', '', ''),
(1, 3, 'Guitar Acoustic Station HD-179_FD', 1990000, 0, 1, 'acoustic3.jpg', 'acoustic3.1.jpg', 'acoustic3.2.jpg', 'acoustic3.3.jpg', 'acoustic3.4.jpg', '', ''),
(1, 4, 'Guitar Acoustic Station HD-179_FA', 1790000, 0, 1, 'acoustic4.jpg', 'acoustic4.1.jpg', 'acoustic4.2.jpg', 'acoustic4.3.jpg', 'acoustic4.4.jpg', '', ''),
(1, 5, 'Guitar Acoustic Station HD-199A', 1990000, 0, 1, 'acoustic5.jpg', 'acoustic5.1.jpg', 'acoustic5.2.jpg', 'acoustic5.3.jpg', 'acoustic5.4.jpg', '', ''),
(2, 6, 'Guitar Acoustic EKO ONE 018 CW EQ Sunbust', 4500000, 0, 1, 'CC1.jpg', 'CC1.1.jpg', 'CC1.2.jpg', 'CC1.3.jpg', 'CC1.4.jpg', '', ''),
(2, 7, 'Guitar Acoustic Peavey DW3', 3990000, 0, 1, 'CC2.jpg', 'CC2.1.jpg', 'CC2.2.jpg', 'CC2.3.jpg', 'CC2.4.jpg', '', ''),
(2, 8, 'Guitar Acoustic EKO ONE 018 CW EQ Natural', 4500000, 0, 1, 'CC3.jpg', 'CC3.1.jpg', 'CC3.2.jpg', 'CC3.3.jpg', 'CC3.4.jpg', '', ''),
(2, 9, 'Guitar Acoustic EKO-EQ-Blue-OM', 3990000, 0, 1, 'CC4.jpg', 'CC4.1.jpg', 'CC4.2.jpg', 'CC4.3.jpg', 'CC4.4.jpg', '', ''),
(2, 10, 'Guitar Acoustic Station CA-550L-DC', 4500000, 0, 1, 'CC5.jpg', 'CC5.1.jpg', 'CC5.2.jpg', 'CC5.3.jpg', 'CC5.4.jpg', '', ''),
(3, 11, 'Guitar Classic Station C-199', 1990000, 0, 1, 'classic1.jpg', 'classic1.1.jpg', 'classic1.2.jpg', 'classic1.3.jpg', 'classic1.4.jpg', '', 'Toàn bộ đàn được làm từ gỗ nguyên miếng (full solid), sử dụng càng lâu âm thanh càng hay, đó là đặc điểm \"ăn tiền\" của gỗ nguyên miếng.\r\n\r\nĐây là dòng dàn chuyên dùng cho các bạn mới bắt đâu tập chơi solo, âm thanh ngấm và trầm, phù hợp với các bản solo cổ điển.\r\n\r\nSản phẩm được bảo hành 1 năm, bảo trì trọn đời'),
(3, 12, 'Guitar Classic Admira Malaga', 5500000, 0, 1, 'classic2.jpg', 'classic2.1.jpg', 'classic2.2.jpg', NULL, NULL, '', 'Guitar ADMIRA MALAGA với thông số gỗ TOP SOLID, được làm thủ công tại TÂY BAN NHA, nơi sản sinh ra những cây đàn guitar đầu tiên. \r\nCòn gì tuyệt vời hơn khi được sở hữu cây đàn do chính NƠI RA ĐỜI của cây guitar, được những nghệ nhân tại Tây Ban Nha chế tác\r\n***************************************\r\n- Thông số : Top: SOLID Cedar ( gỗ TUYẾT TÙNG thịt nguyên tấm ), đặc điểm của loại gỗ này là làm cho gỗ mặt top cây đàn dày hơn, tạo sự chắc chắn và tiếng đàn ấm, ngay từ những nốt nhạc đầu tiên âm thanh cũng đã rất ấm áp.\r\n- Mặt lưng và hông : Sapelle ( thuộc họ Mahogany nhưng gỗ đặc hơn nên cho ra một chất âm mạnh, rất dễ phân biệt với các loại gỗ khác)\r\n- Cần đàn : African Mahogany ( gỗ dái ngựa Châu Phi )\r\n- Mặt cần : Rosewood \r\n***************************************\r\n- 1 cây đàn mới 100%, vân gỗ tuyệt đẹp, thông số gỗ CỰC TỐT, được làm thủ công tại TÂY BAN NHA.\r\n- Bạn sẽ cực kì ngạc nhiên vì tiếng BASS RẤT DÀY của cây đàn này, treb thì nổ vang \r\nCHỪNG ĐÓ YẾU TỐ HỘI TỤ ĐỦ ĐỂ CHO CÁC BẠN RƯỚC NGAY về tư dinh của mình mà ko cần đắn đo suy nghĩ.\r\n\r\n'),
(3, 13, 'Guitar Classic Admira Malaga CW', 5500000, 0, 1, 'classic3.jpg', 'classic3.1.jpg', 'classic3.2.jpg', NULL, NULL, '', 'Guitar ADMIRA MALAGA với thông số gỗ TOP SOLID, được làm thủ công tại TÂY BAN NHA, nơi sản sinh ra những cây đàn guitar đầu tiên.  Còn gì tuyệt vời hơn khi được sở hữu cây đàn do chính NƠI RA ĐỜI của cây guitar, được những nghệ nhân tại Tây Ban Nha chế tác *************************************** - Thông số : Top: SOLID Cedar ( gỗ TUYẾT TÙNG thịt nguyên tấm ), đặc điểm của loại gỗ này là làm cho gỗ mặt top cây đàn dày hơn, tạo sự chắc chắn và tiếng đàn ấm, ngay từ những nốt nhạc đầu tiên âm thanh cũng đã rất ấm áp. - Mặt lưng và hông : Sapelle ( thuộc họ Mahogany nhưng gỗ đặc hơn nên cho ra một chất âm mạnh, rất dễ phân biệt với các loại gỗ khác) - Cần đàn : African Mahogany ( gỗ dái ngựa Châu Phi ) - Mặt cần : Rosewood  *************************************** - 1 cây đàn mới 100%, vân gỗ tuyệt đẹp, thông số gỗ CỰC TỐT, được làm thủ công tại TÂY BAN NHA. - Bạn sẽ cực kì ngạc nhiên vì tiếng BASS RẤT DÀY của cây đàn này, treb thì nổ vang  CHỪNG ĐÓ YẾU TỐ HỘI TỤ ĐỦ ĐỂ CHO CÁC BẠN RƯỚC NGAY về tư dinh của mình mà ko cần đắn đo suy nghĩ.'),
(3, 14, 'Guitar Classic Station CL-375', 3750000, 0, 1, 'classic4.jpg', 'classic4.1.jpg', 'classic4.2jpg', 'classic4.3.jpg', 'classic4.4.jpg', '', 'Với tất cả đều được làm bằng gỗ nguyên miếng sẽ đem lại trải nghiệm âm thanh tốt dần theo thời gian. Càng chơi lâu âm thanh càng hay.  So với dòng STATION C-199 & CL-199, thì Guitar Classic Station CL-375 với thông số ấn tượng sẽ đem đến một sự trải nghiệm hoàn toàn khác biệt với chất lượng âm thanh và sự hoàn thiện về gia công. Với đặc điểm nổi bật của gỗ Còng Cườm - vân gỗ sáng rất đặc trưng và đặc biệt bắt mắt, đây sẽ là một lựa chọn tuyệt vời cho những bạn đang tìm kiếm 1 cây đàn classic có âm thanh vừa trầm ấm nhưng không kém phần ấn tượng với những ưu điểm sau:  Gỗ nguyên miếng 100%, từ mặt đến lưng hông và cần đàn đều là gỗ nguyên miếng rất già tuổi - solid hoàn toàn nên vân gỗ rất dày dặn, đẹp màu. Mặt làm từ gỗ thông già Solid giúp âm thanh được thoát ra nhẹ nhàng, êm ái Lưng hông làm từ gỗ Còng Cườm Solid cho ra một loại âm thanh vừa trong vừa sáng hơn so với những loại gỗ khác, nhưng vẫn không kém phần ấm áp. Gia công kĩ với đường nét rõ ràng, lớp sơn mượt mà, mịn màng giúp nổi bật vẻ đẹp của vân gỗ Còng Cườm hút mắt ngay từ cái nhìn đầu tiên Đặc biệt có sẵn ti chỉnh cong cần nên về lâu dài sẽ giúp bạn không lo ngại việc đàn bị cong cần nữa nhé. Thiết kế dáng có khuyết giúp bạn có thể chơi được các nốt ngăn cao được thuận tiện hơn. Ngoài ra Classic Station CL-375 còn được chế độ ưu đãi tặng kèm bộ phụ kiện:  Bao da 3 lớp dày dặn, sang trọng Phím gảy x 2 Sổ hướng dẫn tự học đệm hát cơ bản tại nhà biên soạn bởi Guitar Station Classic Station CL-375 còn được hỗ trợ chế độ:  Bảo hành 1 năm hoàn toàn miễn phí với tất cả các lỗi từ nhà sản xuất Hỗ trợ kiểm tra và bảo trì trọn đời sản phẩm. Nếu bạn thực sự thích một chiếc đàn guitar cổ điển sáng màu mà lại có âm thanh hay thì thực sự đừng bỏ qua Classic Station CL-375 này nhé.'),
(3, 15, 'Guitar Classic Station CL-350', 3500000, 0, 1, 'classic5.jpg', 'classic5.1.jpg', 'classic5.2.jpg', NULL, NULL, '', 'Toàn bộ gỗ nguyên miếng (full solid), sử dụng càng lâu âm thanh càng hay, đó là đặc điểm \"ăn tiền\" của gỗ nguyên miếng.  CL-350 là dòng đàn chuyên dùng cho các bạn chơi solo cổ điển, thích âm thanh trầm ấm của guitar classic. CL-350 âm thanh rất ấm, bass dày, sâu lắng.  Mặt: Thông Solid| Lưng hông: Điệp già Solid Có ti chỉnh cong cần.   Lớp son mướt mịn, vân gỗ điệp vằn vện tạo điểm nhấn siêu đẹp. Thích hợp chơi những bản nhạc bất hủ, những bản tình ca lãng mạn, ấm áp hoặc những bản hòa tấu ấm áp. Sản phẩm được bảo hành 1 năm, bảo trì trọn đời.'),
(4, 16, 'Guitar Acoustic EKO NXT OM EQ', 3990000, 0, 1, 'EQ1.jpg', 'EQ1.1.jpg', 'EQ1.2.jpg', 'EQ1.3.jpg', 'EQ1.4.jpg', '', 'EKO NXT 018 CW EQ Natural là sự lựa chọn hoàn hảo cho môt cây đàn chất lượng tích hợp sẵn EQ.  Body dáng OM, EQ EKO G03 tích hợp Tuner + jack. Âm thanh tròn trịa, sáng rõ nhưng không kém phần dày dặn. Thiết kế sơn bóng, có ti chỉnh chống cong cần, bo viền cạnh tròn trịa, không làm hằn vết lên tay sau khi ôm đàn.   Đánh dấu ngăn bằng các chấm trên fretboard, và biểu trưng X ở ngăn thứ mười hai khiến cho cần đàn nhìn hấp dẫn và thanh lịch, mang đậm dấu dấn của EKO - nhà sản xuất guitar của Ý.  Nếu bạn đang tìm kiếm một cây đàn ngoại, cho âm thanh treb sáng, chơi các thể loại nhạc hiện đại Âu Mỹ thì đây là lựa chọn không thể bỏ qua.  Sản phẩm được bảo hành 1 năm & bảo trì trọn đời.'),
(4, 17, 'Guitar Acoustic EKO ONE 018 CW EQ Sunbust', 4500000, 0, 1, 'EQ2.jpg', 'EQ2.1.jpg', 'EQ2.2.jpg', NULL, NULL, '', 'Đàn guitar ONE 018 CW EQ, ngoài tính thẩm mỹ cực kỳ hấp dẫn được lấy cảm hứng từ dòng đàn bất hủ EKO 018 CW Eq thì còn được nâng cấp một số chi tiết độc đáo chưa từng thấy trước đây:  Lớp sơn bóng siêu mướt mượt mà, các cạnh được bo tròn tỉ mỉ rất êm tay. Bàn cần đàn thiết kế chuyên chơi fingerstyle, đặc biệt phù hợp với những bạn có bàn tay to, bấm siêu thích luôn Tích hợp sẵn EQ Fishman Isys 301 âm thanh siêu nét, có bảng điện tử thể hiện tune dây. Kèm bao da 3 lớp, pick gảy, sổ hướng dẫn cho beginner Điểm đặc biệt nhất của EKO ONE 018 CW EQ đó là chiều rộng bản cần 48mm (tiêu chuẩn là 43mm), chiều dài lược đàn 57mm (Tiêu chuẩn 54mm) và chiều dài ngựa đàn là 630mm (tiêu chuẩn 650mm). Bàn phím rộng hơn - đây là sự nâng cấp tuyệt vời cho những bạn muốn tìm kiếm một cây đàn acoustic với bản cần rộng để chơi thoải mái hơn, với khoảng cách giữa các dây tạo điều kiện thuận lợi cho ngón tay, cũng như cho phép bạn chơi arpeggios dễ dàng.  Đàn guitar EKO ONE 018 CW EQ lấy cảm hứng từ dòng đàn Eko thành công nhất: 018 CW có nguồn gốc từ EVO 018 CW, thường được gọi là \"American Cutaway\".  Đàn guitar EKO ONE 018 CW EQ được tích hợp sẵn EQ EKO độc quyền - Fishman Isys 301 - tích hợp luôn chỉnh dây đàn. Đàn guitar ONE 018 CW EQ là sự lựa chọn hoàn hảo để học chơi guitar và biểu diễn trực tiếp.  Nếu bạn đam mê một cây đàn vừa chơi fingerstyle thoải mái và vừa đệm hát những bài hát từ lãng mạn đến sôi động thì EKO ONE 018 CW EQ là sự lựa chọn tuyệt vời.'),
(4, 18, 'Guitar Acoustic EKO ONE 018 CW EQ Natural', 4500000, 0, 1, 'EQ3.jpg', 'EQ3.1.jpg', 'EQ3.2.jpg', NULL, NULL, '', 'Đàn guitar ONE 018 CW EQ, ngoài tính thẩm mỹ cực kỳ hấp dẫn được lấy cảm hứng từ dòng đàn bất hủ EKO 018 CW Eq thì còn được nâng cấp một số chi tiết độc đáo chưa từng thấy trước đây:  Chiều rộng bản cần 48mm (tiêu chuẩn là 43mm), chiều dài lược đàn 57mm (Tiêu chuẩn 54mm) và chiều dài ngựa đàn là 630mm (tiêu chuẩn 650mm). Bàn phím rộng hơn - đây là sự nâng cấp tuyệt vời cho những bạn muốn tìm kiếm một cây đàn acoustic với bản cần rộng để chơi thoải mái hơn, với khoảng cách giữa các dây tạo điều kiện thuận lợi cho ngón tay, cũng như cho phép bạn chơi arpeggios dễ dàng; quy mô ngắn làm cho guitar dễ chơi hơn.  Đàn guitar ONE 018 CW EQ lấy cảm hứng từ dòng đàn Eko thành công nhất: 018 CW có nguồn gốc từ EVO 018 CW, thường được gọi là \"American Cutaway\".  Đàn guitar ONE 018 CW EQ được tích hợp sẵn EQ EKO độc quyền - Fishman Isys 301 - tích hợp luôn chỉnh dây đàn. Đàn guitar ONE 018 CW EQ là sự lựa chọn hoàn hảo để học chơi guitar và biểu diễn trực tiếp.'),
(4, 19, 'Guitar Acoustic EKO-EQ-Blue-OM', 3990000, 0, 1, 'EQ4.jpg', 'EQ4.1.jpg', 'EQ4.2.jpg', 'EQ4.3.jpg', 'EQ4.4.jpg', '', 'EKO-EQ là sự lựa chọn hoàn hảo cho môt cây đàn chất lượng tích hợp sẵn EQ.  Body dáng OM gọn gàng, EQ EKO G03 tích hợp Tuner . Âm thanh tròn trịa, sáng rõ nhưng không kém phần dày dặn. Thiết kế sơn bóng, có ti chỉnh chống cong cần, bo viền cạnh tròn trịa, không làm hằn vết lên tay sau khi ôm đàn.  Nếu bạn đang tìm kiếm một cây đàn ngoại, cho âm thanh treb sáng, chơi các thể loại nhạc hiện đại Âu Mỹ thì đây là lựa chọn không thể bỏ qua.  Sản phẩm được bảo hành 1 năm & bảo trì trọn đời'),
(4, 20, 'Guitar Acoustic EKO-EQ-Black-OM', 3990000, 0, 1, 'EQ5.jpg', 'EQ5.1.jpg', 'EQ5.2.jpg', 'EQ5.3.jpg', 'EQ5.4.jpg', '', 'EKO-EQ là sự lựa chọn hoàn hảo cho môt cây đàn chất lượng tích hợp sẵn EQ.  Body dáng OM thanh lịch, EQ EKO G03 tích hợp Tuner. Âm thanh tròn trịa, sáng rõ nhưng không kém phần dày dặn. Thiết kế sơn bóng, có ti chỉnh chống cong cần, bo viền cạnh tròn trịa, không làm hằn vết lên tay sau khi ôm đàn.  Nếu bạn đang tìm kiếm một cây đàn ngoại, cho âm thanh treb sáng, chơi các thể loại nhạc hiện đại Âu Mỹ thì đây là lựa chọn không thể bỏ qua.  Sản phẩm được bảo hành 1 năm & bảo trì trọn đời');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pass` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` int(20) NOT NULL,
  `user_address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_mode` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_pass`, `user_phone`, `user_address`, `user_email`, `user_mode`) VALUES
(1, 'HoangHiep_hg', '123456', 942215211, 'Hà Giang', 'baamboohg@gmail.com', 1),
(2, 'quanghuy_hn', '123456', 936238457, 'Hà Nội', 'quanghuy_hn@gmail.com', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_cartinf`
--
ALTER TABLE `tbl_cartinf`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `tbl_cartmain`
--
ALTER TABLE `tbl_cartmain`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `user_address` (`user_address`),
  ADD KEY `user_phone` (`user_phone`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cate_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Chỉ mục cho bảng `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `cate_id` (`cate_id`),
  ADD KEY `pro_price` (`pro_price`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_phone` (`user_phone`),
  ADD KEY `user_address` (`user_address`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_cartinf`
--
ALTER TABLE `tbl_cartinf`
  MODIFY `cart_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_cartinf`
--
ALTER TABLE `tbl_cartinf`
  ADD CONSTRAINT `tbl_cartinf_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `tbl_product` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_cartinf_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `tbl_cartmain` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_cartmain`
--
ALTER TABLE `tbl_cartmain`
  ADD CONSTRAINT `tbl_cartmain_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_cartmain_ibfk_2` FOREIGN KEY (`user_name`) REFERENCES `tbl_user` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_cartmain_ibfk_3` FOREIGN KEY (`user_address`) REFERENCES `tbl_user` (`user_address`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_cartmain_ibfk_4` FOREIGN KEY (`user_phone`) REFERENCES `tbl_user` (`user_phone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD CONSTRAINT `tbl_category_ibfk_3` FOREIGN KEY (`menu_id`) REFERENCES `tbl_menu` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `tbl_category` (`cate_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
