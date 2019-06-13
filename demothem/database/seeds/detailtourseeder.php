<?php

use Illuminate\Database\Seeder;
use App\Detailtour;
class detailtourseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detailtour = new Detailtour();
        $detailtour->title = 'Kinh thành huế';
        $detailtour->content = 'Nằm ở bên bờ dòng sông Hương, Đại Nội Huế là một trong số các di tích thuộc cụm Quần thể di tích Cố đô Huế được công nhận là Di sản Văn hoá Thế giới và còn lưu giữ nhiều dấu ấn đặc sắc của nét phong kiến triều đình nhà Nguyễn hàng trăm năm trước. Đại Nội Huế là cụm di tích bao gồm Hoàng Thành và Tử Cấm Thành';
        $detailtour->image1 = 'dainoi1.jpg';
        $detailtour->image2 = 'dainoi2.jpg';
        $detailtour->image3 = 'dainoi3.jpg';
        $detailtour->image4 = 'dainoi4.jpg';
        $detailtour->image5 = 'dainoi5.jpg';
        $detailtour->description ='vườn hoa, cầu đá, các hòn đảo và các loại cây lưu niên tỏa bóng mát quanh năm. Mặc dù quy mô của mỗi công trình có khác nhau, nhưng về tổng thể, các cung điện ở đây đều làm theo kiểu "trùng lương trùng thiềm" (hay còn gọi là "trùng thiềm điệp ốc" - kiểu nhà kép hai mái trên một nền), đặt trên nền đá cao, vỉa ốp đá Thanh, nền lát gạch Bát Tràng có tráng men xanh hoặc vàng, mái cũng được lợp bằng một loại ngói đặc biệt hình ống có tráng men thường gọi là ngói Thanh lưu ly (nếu có màu xanh) hoặc Hoàng lưu ly (nếu có màu vàng). Các cột được sơn thếp theo mô típ long-vân (rồng-mây). Nội thất cung điện thường được trang trí theo cùng một phong cách nhất thi nhất họa (một bài thơ kèm một bức tranh) với rất nhiều thơ bằng chữ Hán và các mảng chạm khắc trên gỗ theo đề tài bát bửu, hay theo đề tài tứ thời).[1]';
        $detailtour->tour_id = '11';
        $detailtour->save();

        $detailtour = new Detailtour();
        $detailtour->title = 'công viên ma';
        $detailtour->content = 'Khu du lịch hồ Thủy Tiên được Công ty du lịch cố đô Huế làm chủ đầu tư, khởi công xây dựng đầu năm 2000 và đến tháng 6/2004 thì nhiều hạng mục được hoàn thành và bắt đầu đưa vào khai thác. Tuy nhiên, do hoạt động kém hiệu quả nên cuối năm 2011, khu du lịch này bị đóng cửa để nghiên cứu lập dự án mới. ';
        $detailtour->image1 = 'congvienma1.jpg';
        $detailtour->image2 = 'congvienma2.jpg';
        $detailtour->image3 = 'congvienma3.jpg';
        $detailtour->image4 = 'congvienma4.jpg';
        $detailtour->image5 = 'congvienma5.jpg';
        $detailtour->description='Bên trong khu du lịch bạc tỷ này, tất cả các hạng mục vui chơi, giải trí đều đã ngưng hoạt động từ lâu và ngày càng hư hỏng trầm trọng. Khu nhà thủy cung hình rồng rêu phong phủ kín, trần nhà vỡ toang hoác thành từng mảnh lớn, lộ cả phần sắt thép và dây điện ra ngoài. Các hồ gương chứa cá bị bể văng tung tóe khắp nơi. Bên trong thủy cung có một khu vực nuôi cá sấu nhưng đến nay cá sấu đã chết và bốc mùi hôi thối. 

        Khu vực thủy cung không xa là công viên nước hoành tráng nhưng cũng bị bỏ hoang từ lâu. Hệ thống máng trượt bị rong rêu phủ kín, khu vực hồ bơi đục ngầu vì đầy rác bẩn. Bên cạnh là bốn ngôi biệt thự đang xây dựng dang dở bị bỏ hoang giờ chỉ còn trơ khung.';
        $detailtour->tour_id = '12';
        $detailtour->save();

        $detailtour = new Detailtour();
        $detailtour->title = 'Huế về đêm';
        $detailtour->content = 'Thành phố ăn chơi xa xỉ bậc nhất miền trung';
        $detailtour->image1 = 'huebandem1.jpg';
        $detailtour->image2 = 'huebandem2.jpg';
        $detailtour->image3 = 'huebandem3.jpg';
        $detailtour->image4 = 'huebandem4.jpg';
        $detailtour->image5 = 'huebandem5.jpg';
        $detailtour->description='Trên thềm lục địa biển Đông ở về phía Đông Bắc cách mũi cửa Khém nơi gần nhất khoảng 600m có đảo Sơn Chà. Tuy diện tích đảo không lớn (khoảng 160ha), nhưng có vai trò quan trọng trong phát triển kinh tế xã hội, bảo vệ an ninh quốc phòng đối với nước ta nói chung và tỉnh Thừa Thiên Huế nói riêng.

        - Thừa Thiên Huế nằm trên trục giao thông quan trọng xuyên Bắc-Nam, trục hành lang Đông - Tây nối Thái Lan - Lào - Việt Nam theo đường 9. Thừa Thiên Huế ở vào vị trí trung độ của cả nước, nằm giữa thành phố Hà Nội và thành phố Hồ Chí Minh là hai trung tâm lớn của hai vùng kinh tế phát triển nhất nước ta. Thừa Thiên Huế cách Hà Nội 660 km, cách thành phố Hồ Chí Minh 1.080 km.
        
        - Bờ biển của tỉnh dài 120 km, có cảng Thuận An và vịnh Chân Mây với độ sâu 18 - 20m đủ điều kiện xây dựng cảng nước sâu với công suất lớn, có cảng hàng không Phú Bài nằm trên đường quốc lộ 1A và đường sắt xuyên Việt chạy dọc theo tỉnh.';
        $detailtour->tour_id = '13';
        $detailtour->save(); 

        $detailtour = new Detailtour();
        $detailtour->title = 'Chùa thiên mụ';
        $detailtour->content = 'Chùa Thiên Mụ hay còn gọi là chùa Linh Mụ là một ngôi chùa cổ nằm trên đồi Hà Khê, tả ngạn sông Hương, cách trung tâm thành phố Huế (Việt Nam) khoảng 5 km về phía tây. Chùa Thiên Mụ chính thức khởi lập năm Tân Sửu (1601), đời chúa Tiên Nguyễn Hoàng -vị chúa Nguyễn đầu tiên ở Đàng Trong.';
        $detailtour->image1 = 'chuathienmu1.jpg';
        $detailtour->image2 = 'chuathienmu2.jpg';
        $detailtour->image3 = 'chuathienmu3.jpg';
        $detailtour->image4 = 'chuathienmu4.jpg';
        $detailtour->image5 = 'chuathienmu5.jpg';
        $detailtour->description ='Trước thời điểm khởi lập chùa, trên đồi Hà Khê có ngôi chùa cũng mang tên Thiên Mỗ hoặc Thiên Mẫu, là một ngôi chùa của người Chăm1.

        Truyền thuyết kể rằng, khi chúa Nguyễn Hoàng vào làm Trấn thủ xứ Thuận Hóa kiêm trấn thủ Quảng Nam, ông đã đích thân đi xem xét địa thế ở đây nhằm chuẩn bị cho mưu đồ mở mang cơ nghiệp, xây dựng giang sơn cho dòng họ Nguyễn sau này. Trong một lần rong ruổi vó ngựa dọc bờ sông Hương ngược lên đầu nguồn, ông bắt gặp một ngọn đồi nhỏ nhô lên bên dòng nước trong xanh uốn khúc, thế đất như hình một con rồng đang quay đầu nhìn lại, ngọn đồi này có tên là đồi Hà Khê.
        
        Người dân địa phương cho biết, nơi đây ban đêm thường có một bà lão mặc áo đỏ quần lục xuất hiện trên đồi, nói với mọi người: "Rồi đây sẽ có một vị chân chúa đến lập chùa để tụ linh khí, làm bền long mạch, cho nước Nam hùng mạnh". Vì thế, nơi đây còn được gọi là Thiên Mụ Sơn 2.
        
        Tư tưởng lớn của chúa Nguyễn Hoàng dường như cùng bắt nhịp được với ý nguyện của dân chúng. Nguyễn Hoàng cả mừng, vào năm 1601 đã cho dựng một ngôi chùa trên đồi, ngoảnh mặt ra sông Hương, đặt tên là "Thiên Mụ".';
        $detailtour->tour_id = '14';
        $detailtour->save();

        $detailtour = new Detailtour();
        $detailtour->title = 'lăng minh mạng';
        $detailtour->content = 'Lăng Minh Mạng còn gọi là Hiếu Lăng (孝陵, do vua Thiệu Trị cho xây dựng), nằm trên núi Cẩm Khê, gần ngã ba Bằng Lãng là nơi hội lưu của hai dòng Hữu Trạch và Tả Trạch hợp thành sông Hương, cách cố đô Huế 12 km. Lăng Minh Mạng được xây dựng từ năm 1840 đến năm 1843 thì hoàn thành, huy động tới mười nghìn thợ và lính.';
        $detailtour->image1 = 'minhmang1.jpg';
        $detailtour->image2 = 'minhmang2.jpg';
        $detailtour->image3 = 'minhmang3.jpg';
        $detailtour->image4 = 'minhmang4.jpg';
        $detailtour->image5 = 'minhmang5.jpg';
        $detailtour->description ='Tháng 2 năm 1820, vua Gia Long qua đời hoàng tử thứ tư là Nguyễn Phúc Đảm được đưa lên ngai vàng, lấy niên hiệu là Minh Mạng hay Minh Mệnh. Làm vua được 7 năm, Minh Mạng cho người đi tìm đất để xây dựng Sơn lăng cho mình. Quan Địa lý Lê Văn Đức đã chọn được một cuộc đất tốt ở địa phận núi Cẩm Kê, gần ngã ba Bằng Lãng, nơi hợp lưu của hai nguồn Tả Trạch và Hữu Trạch để tạo thành con sông Hương thơ mộng. Nhưng phải ròng rã 14 năm cân nhắc, chọn lựa, đến năm 1840, nhà vua mới quyết định cho xây dựng lăng tẩm của mình ở nơi này. Nhà vua cho đổi tên núi Cẩm Kê (thuộc ấp An Bằng, huyện Hương Trà) thành Hiếu Sơn và gọi tên lăng là Hiếu Lăng. Đích thân nhà vua xem xét, phê chuẩn họa đồ thiết kế do các quan Bùi Công Huyên, Trương Đăng Quế và Giám thành vệ dâng lên. Tháng 4 năm 1840, công cuộc kiến thiết Hiếu Lăng bắt đầu. Vua sai các quan Lê Đăng Danh, Nguyễn Trung Mậu và Lý Văn Phức điều khiển lính và thợ thuyền lên đây đào hồ đắp La thành. Tháng 8 năm 1840, Minh Mạng lên kiểm tra thấy công việc đào hồ Trừng Minh không vừa ý nên giáng chức các quan trông coi và đình chỉ công việc. Một tháng sau, công việc vừa được tiếp tục thì Minh Mạng lâm bệnh qua đời vào tháng 1 năm 1841. Vua Thiệu Trị lên nối ngôi, chỉ một tháng sau (tháng 2-1841) đã sai các quan đại thần Tạ Quang Cự, Hà Duy Phiên, Nguyễn Tri Phương chỉ huy gần 10.000 lính và thợ thi công tiếp công trình theo đúng họa đồ của vua cha để lại. Ngày 20 tháng 8 năm 1841, thi hài vua Minh Mạng được đưa vào chôn ở Bửu Thành, nhưng công việc xây lăng mãi đến đầu năm 1843 mới hoàn tất. Từ một vùng núi đồi hoang vu, qua bàn tay lao động và óc sáng tạo của con người đã hình thành một khu lăng tẩm uy nghiêm, vừa rực rỡ về kiến trúc, vừa hài hòa với thiên nhiên lại vừa sâu sắc bởi giá trị tư tưởng.';
        $detailtour->tour_id = '15';
        $detailtour->save();

        $detailtour = new Detailtour();
        $detailtour->title = 'nhã nhạc cung đình';
        $detailtour->content = 'Nhã nhạc cung đình Huế là thể loại nhạc của cung đình thời phong kiến, được biểu diễn vào các dịp lễ hội (vua đăng quang, băng hà, các lễ hội tôn nghiêm khác) trong năm của các triều đại nhà Nguyễn của Việt Nam. Nhã nhạc cung đình Huế đã được UNESCO công nhận là Kiệt tác truyền khẩu và phi vật thể nhân loại vào năm 2003. Theo đánh giá của UNESCO, "trong các thể loại nhạc cổ truyền ở Việt Nam, chỉ có Nhã nhạc đạt tới tầm vóc quốc gia';
        $detailtour->image1 = 'nhaccungdinh1.jpg';
        $detailtour->image2 = 'nhaccungdinh2.jpg';
        $detailtour->image3 = 'nhaccungdinh3.jpg';
        $detailtour->image4 = 'nhaccungdinh4.jpg';
        $detailtour->image5 = 'nhaccungdinh5.jpg';
        $detailtour->description ='hã nhạc đã được phát triển từ thế kỷ 13 ở Việt Nam đến thời nhà Nguyễn thì Nhã nhạc cung đình Huế đạt độ chín muồi và hoàn chỉnh nhất" [1]. Cùng với không gian văn hóa Cồng Chiêng Tây Nguyên, đây là di sản phi vật thể của Việt Nam đã được UNESCO chính thức công nhận. Nhã nhạc Cung Đình Huế là một sự kế thừa,kể từ khi những dàn nhạc - trong đó có mặt nhiều nhạc khí cung đình - xuất hiện dưới dạng tác phẩm chạm nổi trên các bệ đá kê cột chùa thời Lý, thế kỉ XI-XII, đến lúc ông vua cuối cùng triều Nguyễn thái vị vào giữa thế kỷ XX.

        Về cơ bản, nhạc nghi thức trong âm nhạc cung đình Việt Nam, nhạc tế trong các đình làng cũng như loại nhạc nghi thức được chơi trong đám cưới hay đám tang, tất cả thường được chia thành hai nhóm chính: nhóm phe văn và nhóm phe võ. Việc phân chia của các nhóm nhạc cụ hòa tấu trong dàn nhạc cung đình ở Huế từ đầu thế kỷ XIX và nguồn gốc của nó đã được tìm thấy trong các quy luật của nhiều nghi thức cúng đình tại các làng xã của người Việt ở Bắc Bộ từ nhiều thế kỷ trước đây.';
        $detailtour->tour_id = '16';
        $detailtour->save();

        $detailtour = new Detailtour();
        $detailtour->title = 'lăng cô';
        $detailtour->content = 'Lăng Cô là một thị trấn của huyện Phú Lộc, tỉnh Thừa Thiên-Huế. Cách Huế khoảng 60 km về phía nam, nằm dưới chân đèo Hải Vân. Bãi biển Lăng Cô có bãi cát đẹp, nơi có nhiều khu nghỉ mát, nằm gần cảng Chân Mây và khu kinh tế Chân Mây. Nơi có Quốc lộ 1 A và Đường sắt Bắc-Nam chạy qua.';
        $detailtour->image1 = 'langco1.jpg';
        $detailtour->image2 = 'langco2.jpg';
        $detailtour->image3 = 'langco3.jpg';
        $detailtour->image4 = 'langco4.jpg';
        $detailtour->image5 = 'langco5.jpg';
        $detailtour->description ='Lăng Cô có vị trí địa lý nằm giữa 3 trung tâm Bảo tồn Di sản Văn hóa Thế giới là: Cố đô Huế, Khu phố cổ Hội An và Khu Thánh địa Mỹ Sơn với bán kính là 70 km. Lăng Cô có thể thu hút khách tham quan, nghiên cứu tại các trung tâm trên và giải tỏa áp lực những thời điểm đông khách.

        Lăng Cô nằm trên tuyến du lịch Bắc-Nam cách thành phố Đà Nẵng 30 km và thành phố Huế 70 km, có thể hỗ trợ phát triển các loại hình du lịch đa dạng cho 2 trung tâm du lịch quốc gia trên và tăng ngày nghỉ của khách dừng chân tại Lăng Cô, như các du khách thường nói: "Lên non gặp Người Hùng Bạch Mã, xuống biển gặp Người Đẹp Lăng Cô"';
        $detailtour->tour_id = '18';
        $detailtour->save();      
    }
}
