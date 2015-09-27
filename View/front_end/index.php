<?php
if (isset($_POST['submit'])) {
    $name  = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $intIsOK = add_user($name, $email, $phone);
    echo"<script>location.href='index.php?page=success'</script>";
} else {
    
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="content-language" content="vi" />
    <meta name="description" content="Amaz!ng You - Trung tâm đào tạo tiếng Anh theo các chứng chỉ tiêu chuẩn TOEIC, IELTS ...." />
    <meta name="keywords" content="tieng anh, trung tam, amazingyou, toeic, ielts ..." />
    <meta name="robots" content="noodp,index,follow" />
    <meta name='revisit-after' content='1 days' />
    <meta property="og:image" content="http://amazingyou.edu.vn/images/logo.png"/>
    <meta property="og:description" content="Trung tâm đào tạo tiếng Anh theo các chứng chỉ tiêu chuẩn TOEIC, IELTS "/>
    <link rel="shortcut icon" href="./images/logo.ico"/>
    <title>Amaz!ng You - Trung tâm đào tạo tiếng Anh theo các chứng chỉ tiêu chuẩn TOEIC, IELTS ...</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="css/Base.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body id="page-top" data-spy="scroll" data-target=".header-nav">

<div class="navbar-fixed fleft">
    <nav class="header-nav" role="navigation">
        <div class="nav-wrapper page-scroll" id="top">
            <a href="#page-top" class="brand-logo logo"><img src="./images/logo.png" height="100%"/> </a>
            <a href="" data-activates="mobile-demo" class="button-collapse"><i class="material-icons black-text">menu</i></a>
            <ul class="right hide-on-med-and-down nav navbar-nav">
                <li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
                <li><a href="#different" class="page-scroll">Sự khác biệt</a></li>
                <li><a href="#team" class="page-scroll">Team</a></li>
                <li><a href="#you-rock" class="page-scroll">You Rock - The Club</a></li>
                <li><a href="#join" class="red-text page-scroll">Đăng ký học !</a></li>
                <li><a href="#contact" class="page-scroll">Liên hệ</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
                <li><a href="#different" class="page-scroll">Sự khác biệt</a></li>
                <li><a href="#team" class="page-scroll">Team</a></li>
                <li><a href="#you-rock" class="page-scroll">You Rock - The Club</a></li>
                <li><a href="#join" class="red-text page-scroll">Đăng ký học !</a></li>
                <li><a href="#contact" class="page-scroll">Liên hệ</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="container-amazing">
    <div class="slider">
        <ul class="slides">
            <li><img src="./images/A1.png"></li>
            <li><img src="./images/A2.png"></li>
            <li><img src="./images/A3.png"></li>
            <!--<li><img src="./images/A4.png"></li>-->
        </ul>
    </div>
    <div id="different" class="section white">
        <div class="row container">
            <h1 class="header center"><a href="#" class="red-text text-darken-2">Sự khác biệt</a></h1>
        </div>
        <div class="row width-per-90">
            <div class="col l4 m4 s10 offset-s1 center wow bounceInLeft animated" data-wow-delay="0.5s">
                <div class="different-box waves-effect waves-red"><i class="fa fa-book fa-4x orange-text text-darken-4"></i></div>
                <h5 class="center">Giáo án sáng tạo</h5>
            </div>
            <div class="col l4 m4 s10 offset-s1 center wow bounceInDown center animated" data-wow-delay="1s">
                <div class="different-box waves-effect waves-red"><i class="fa fa-list-alt fa-4x orange-text text-darken-3"></i></div>
                <h5 class="center">Phương pháp giảng dạy</h5>
            </div>
            <div class="col l4 m4 s10 offset-s1 center wow bounceInRight animated" data-wow-delay="1.5s">
                <div class="different-box waves-effect waves-red"><i class="fa fa-users fa-4x orange-text text-darken-2"></i></div>
                <h5 class="center">Mô hình lớp học</h5>
            </div>
        </div>
        <div class="row width-per-90">
            <div class="col l4 m4 s10 offset-s1 offset-l2 offset-m2 center wow bounceInLeft animated" data-wow-delay="2s">
                <div class="different-box waves-effect waves-red"><i class="fa fa-cogs fa-4x orange-text text-darken-1"></i></div>
                <h5 class="center">Cấu trúc khóa học</h5>
            </div>
            <div class="col l4 m4 s10 offset-s1 center wow bounceInRight animated" data-wow-delay="2.5s">
                <div class="different-box waves-effect waves-red"><i class="fa fa-university fa-4x orange-text"></i></div>
                <h5 class="center">Cơ sở vật chất</h5>
            </div>
        </div>
        <div class="row center-align">
            <a href="#info" class="waves-effect waves-red btn btn-large red-text ghost-btn modal-trigger">XEM THÊM</a>
        </div>
        <div id="info" class="modal modal-fixed-footer">
            <div class="modal-content">

                <h4 class="center red-text">Giáo án sáng tạo</h4>
                <p>Trải qua quá trình trải nghiệm và nghiên cứu, <strong>Amaz!ng You</strong> đã tìm ra được con đường đi nhanh nhất và phù hợp nhất cho việc học Phát âm và giao tiếp của người Việt hiện nay.</p>
                <p>Việc học Tiếng anh cũng giống như việc đi ngoài biển, nếu muốn đi đúng hướng &  nhanh tới đích, chúng ta không thể thiếu La Bàn.</p>
                <p>Chúng tôi, với đội ngũ Travel Guides (người hướng dẫn) xuất sắc và nhiệt huyết, tự hào là một trong những trường ngôn ngữ duy nhất tại Việt Nam tự biên soạn ra Giáo án dựa trên những tài liệu chuẩn Quốc tế. Song song với đó, sự trải nghiệm của các Travel Guides tại các môi trường làm việc Quốc tế chuyên nghiệp, đã tạo nên một giáo án La Bàn, truyền cho học viên niềm khát khao sử dụng tiếng Anh mỗi ngày.</p>
                <p>Để đảm bảo chuẩn mực đầu ra, <strong>Amaz!ng You</strong> Luôn sử dụng bộ công cụ giáo án đồng nhất cho tất cả các khoá học. Vì vậy, học viên được cam kết sẽ chuẩn hóa 41 âm American English (Anh Mỹ) & tự tin giao tiếp tiếng Anh chỉ sau 1 khóa học 2,5 tháng.</p>

                <h4 class="center red-text">Phương pháp giảng dạy</h4>
                <p class="italic">1. Shadowing Technique ( Phát triển kĩ năng nghe)</p>
                <p>Ban đầu, hầu hết các học viên của <strong>Amaz!ng You</strong> cảm thấy không tự tin khi bắt chuyện với người nước ngoài, đó là do các bạn hiểu rất ít những gì người ta nói.</p>
                <p>Shadowing Technique là phương pháp nghe hiểu & kết hợp luyện ngữ điệu hiệu quả nhất.</p>
                <p>Bước thứ nhất, học viên sẽ được hướng dẫn cách nghe một đoạn hội thoại cụ thể & được phân tích các nguyên nhân vì sao bạn không nhận biết được từ. Bước hai, thực hành đoạn hội thoại này cùng bạn bè sẽ giúp học viên có được ngữ điệu nói tự nhiên hơn theo từng bài học. </p>
                <p>Sau 3 tháng thực hành liên tiếp với Shadowing Technique, học viên <strong>Amaz!ng You</strong> có khả năng nghe được 80% một đoạn hội thoại ở trình độ Intermediate.</p>
                <p><strong>Hãy trao sự QUYẾT TÂM của bạn, còn lại cứ để Amaz!ng You lo!</strong></p>
                <p class="italic">2. Super Snail  (Phát triển kĩ năng nói)</p>
                <p>Ở <strong>Amaz!ng You</strong>, chúng tôi đề cao sự “chậm mà chắc”.</p>
                <p>Theo Phương pháp “Super Snail” các bạn học viên ở đây sẽ được Travel Guides & Travel Mates rèn cách phát âm & ngữ điệu nói tỉ mỉ nhất có thể.</p>
                <p>Super Snail sẽ giải quyết được những sự nhầm lần giữa các âm “l”&“n”, “p”&”b”, nói ngọng, líu lưỡi một cách triệt để.</p>
                <p class="italic">3. Mirror (Phát triển kĩ năng phản xạ)</p>
                <p>Hệ thống audios (bài tập về nhà) được chuẩn hóa theo Phương pháp Mirror sẽ tạo ra môi trường phản xạ tiếng Anh, ngay cả khi học viên tự học ở nhà một mình!</p>
                <p>Theo Phương pháp Mirror, học viên sẽ được lần lượt đóng vai các nhân vật trong các tình huống giao tiếp đa dạng (qua 10 chủ đề trên lớp & các bộ phim hài hước).</p>
                <p>Học viên của <strong>Amaz!ng You</strong> đều vô cùng hào hứng khi được luyện tập theo phương pháp này. Khả năng phản xạ của học viên, theo đó cũng được tăng lên rõ rệt.</p>
                <p class="italic">4. Amaz!ng Notebook (Phát triển vốn từ vựng)</p>
                <p>Nếu bạn đang học từ vựng theo cách: “Apple: quả táo”, “Table: Cái bàn”, bạn cần dừng lại ngay. Cách học truyền thống như vậy khiến người học rơi vào trạng thái nhanh nản và vô phương hướng.</p>
                <p><strong>Amaz!ng You</strong> sẽ hướng dẫn cho bạn cách học từ vựng hiệu quả nhất: “Học theo cụm từ theo các chủ đề”.</p>
                <p>Một cuốn sổ dễ thương với tràn ngập màu sắc, ai có thể từ chối việc học khi mở chúng ra mỗi ngày.</p>
                <p class="italic">5. English Learning Journal (Phát triển kĩ năng Đọc hiểu)</p>
                <p>Việc đọc một bài báo nước ngoài tại các kênh <a href="//huffingtonpost.com/" target="_blank">http://www.huffingtonpost.com/</a> hay <a href="//time.com/" target="_blank">http://time.com/</a> dường như là điều bạn chưa từng làm.</p>
                <p>Không cần gì nhiều, chỉ cần một cuốn sổ A4 & một hộp bút màu, bạn sẽ làm được điều đó ở <strong>Amaz!ng You</strong>.</p>

                <h4 class="center red-text">Mô Hình lớp học</h4>
                <p>Học Tiếng Anh hiệu quả là cần học ở mọi lúc, mọi nơi. Hơn thế, quá trình học một ngôn ngữ mới đòi hỏi học viên cần phải có đam mê, sự kiên trì và đặc biệt phải luôn giữ lửa và khát khao làm được.</p>
                <p>Từ những nghiên cứu và trải nghiệm thực tế, <strong>Amaz!ng You</strong> đã đưa vào áp dụng mô hình học tập “CLASS - HOME – CLUB – PICNIC”. Mô hình này được hiểu như sau:</p>
                <p>
                    <ul>
                        <li><strong>CLASS:</strong> 20 buổi trên lớp để nắm được các kĩ thuật phát âm chuẩn, trọng âm từ, trọng âm câu & ngữ điệu nói dưới sự hướng dẫn trực tiếp của Travel Guides và đội ngũ Travel Mates nhiệt huyết.</li>
                        <li><strong>HOME:</strong> Là phần thu âm bài học ở nhà. Qua đó, học viên sẽ có thời gian nhiều hơn để áp dụng các kĩ thuật được học trên lớp. Tất cả các bài tập về nhà sẽ được Travel Guides chấm và chỉnh sửa chi tiết. Các bài ghi âm đều phải đạt 80/100. Nếu thấp hơn học viên sẽ phải luyện tập và ghi âm lại.</li>
                        <li><strong>PICNIC:</strong> Mấu chốt quan trọng của kĩ năng giao tiếp tiếng Anh  là sự  tự tin và phản xạ tự nhiên. Để giúp học viên đạt được điều đó, <strong>Amaz!ng You</strong> thường xuyên tổ chức các chương trình dã ngoại tại các Bảo tàng ở Hà Nội, Bờ Hồ, Bát Tràng, Đường Lâm,... nơi các bạn sẽ được giao lưu trò chuyện thực tế với khách du lịch nước ngoài. Thú vị hơn, học viên sẽ vào vai là những người hướng dẫn viên, dẫn lớp đi thăm quan bằng Tiếng Anh.</li>
                        <li><strong>YOU! ROCK – THE CLUB:</strong> Với đội ngũ ban điều phối trẻ trung và năng động, kết hợp với các chương trình thực tế đặc sắc, YOU! Rock – The Club hứa hẹn là một  trải nghiệm vô cùng bổ ích và lý thú cho tất cả các bạn học viên sau khoá học. Với không khí sôi động thường trực, mỗi sáng Chủ nhật là một trong những điều học viên mong chờ nhất ở <strong>Amaz!ng You</strong>.</li>
                    </ul>
                </p>

                <h4 class="center red-text">Cấu trúc khóa học</h4>
                <p>20 buổi học (120 phút/ buổi) được hướng dẫn trực tiếp &  sát sao bởi Travel Guides</p>
                <p>60 phút trước mỗi buổi học -  sửa âm, luyện Speaking cùng đội ngũ Travel Mates năng động, nhiệt huyết</p>
                <p>01 Buổi Presentation giữa khóa học</p>
                <p>01 Buổi Movie Night cuối khóa học</p>
                <p>Tham gia miễn phí Câu lạc bộ <strong>YOU! ROCK – THE CLUB</strong> mỗi sáng Chủ nhật hàng tuần</p>

                <h4 class="center red-text">Cơ sở vật chất hạ tầng</h4>
                <p>Theo nghiên cứu của <strong>Amaz!ng You</strong>, không gian lớp học có ảnh hưởng rất lớn đến việc tiếp thu kiến thức của học viên. Do đó,  chúng tôi đã trang bị những thiết bị hiện đại nhất để phục vụ quá trình học tập của học viên (hệ thống máy chiếu, âm thanh chất lượng cao). Phong cách bàn ghế ngồi học hết sức thân thiện, gần gũi. </p>
                <p>Bạn Nguyễn Thị Hoa – Học viên khóa AY6 của <strong>Amaz!ng You</strong> đã chia sẻ: “Chính phong cách sắp xếp bàn ghế ngồi học ở <strong>Amaz!ng You</strong> khiến em không còn cảm giác phải đến lớp để học. Đó là môi trường để em thoải mái luyện tập cùng các bạn cùng lớp”.</p>

            </div>
            <div class="modal-footer">
                <a href="" class="modal-action modal-close waves-effect waves-green btn-flat ">Xong</a>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><div class="a a2"></div> </div>
    </div>
    <div id="team" class="section white grey lighten-5">
        <div class="row container">
            <h1 class="header center"><a href="#" class="red-text text-darken-2">Our Team</a></h1>
        </div>
        <div class="width-per-90 mauto">
            <div class="row">
                <div class="col l5 m8 s12 offset-m2 offset-l1">
                    <div class="avatar quynh wow rollIn animated" data-wow-delay="0.5s"></div>
                    <div class="team-produce wơw bounceInLeft animated" data-wow-delay="1.5s">
                        Tích lũy các kinh nghiệm & phong cách làm việc chuyên nghiệp tại những môi trường Quốc tế (Tập đoàn Giáo dục KinderWorld, Singapore & Khu nghỉ dưỡng 5 sao The Cliff Resort & Residences Mui Ne, Canada), tôi tin tưởng sẽ trở thành một Travel Guide có khả năng  truyền được niềm đam mê & khát khao cho các bạn học viên tại <strong>Amaz!ng YOU</strong>
                        <p class="red-text"><strong>Ms. Quynh | Travel Guide</strong></p>
                    </div>
                </div>
                <div class="col l5 m8 s12 offset-m2">
                    <div class="avatar tom wow lightSpeedIn animated" data-wow-delay="0.5s"></div>
                    <div class="team-produce wơw bounceInRight animated" data-wow-delay="1.5s">
                        Giá trị mỗi con người không thể hiện ở xuất phát điểm của họ mà qua những cố gắng, nỗ lực và thành quả họ đạt được! Khao khát cùng học viên vượt qua giới hạn bản thân và đem lại những trải nghiệm chưa từng có trong việc học, thực hành tiếng Anh chính là động lực lớn nhất khiến tôi trở thành một Travel Guide tại <strong>Amaz!ng YOU</strong>.
                        <p class="red-text"><strong>Mr. Tom Ng | Travel Guide</strong></p>
                    </div>
                </div>
            </div>
            <div class="row center-align">
                <a class="waves-effect waves-red btn btn-large red-text ghost-btn">MEET OUR TEAM</a>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><div class="a a3"></div> </div>
    </div>
    <div id="you-rock" class="section white">
        <div class="row container">
            <h1 class="header center"><a href="#" class="red-text text-darken-2">You Rock - The Club</a></h1>
            <div class="col l12 m12 s12">
                <p>Nhằm tạo ra môi trường tràn ngập tiếng Anh, <strong>YOU! Rock – The Club</strong> là nơi để mọi thành viên được HỌC – RÈN LUYỆN – VUI CHƠI bằng tiếng Anh mỗi sáng Chủ nhật hàng tuần.</p>
                <p><strong>YOU! Rock – The Club</strong> không chỉ là ngôi nhà chung các học viên Amazing YOU! mà còn của tất cả những người đam mê, yêu thích học tiếng Anh.</p>
                <p>Câu lạc bộ sẽ được điều phối bởi anh Tom Nguyễn - Senior Tour Guide của Vietnam Open Tours.</p>
                <p>Các hoạt động đa dạng của <strong>YOU! Rock – The Club</strong> sẽ được tổ chức ở nhiều địa điểm: Các bảo tàng tại Hà Nội, Bờ hồ Hoàn Kiếm, Làng gốm Bát Tràng, Làng cổ Đường Lâm, sân thư viện trường Thương Mại,...Đây cũng sẽ là những cơ hội tuyệt vời để các thành viên được tìm hiểu về văn hóa Việt Nam.</p>
                <p>Học viên của Amazing YOU! sẽ được miễn phí tham gia <strong>YOU! Rock – The Club</strong>.</p>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><div class="a a4"></div> </div>
    </div>
    <div id="join" class="section white">
        <div class="row container">
            <h1 class="header center"><a href="#" class="red-text text-darken-2">Đăng ký học trải nghiệm</a></h1>
            <div class="row">
                <form class="col l6 m10 s10 offset-s1 offset-m1 center-align" action="index.php" method="post">
                    <div class="input-field row">
                        <input placeholder="Điền họ tên của bạn" id="fullname" name="fullname" type="text" class="validate" length="100" required>
                        <label for="fullname">Họ tên</label>
                    </div>
                    <div class="input-field row">
                        <input placeholder="Email của bạn" id="email" name="email" type="text" class="validate" length="200" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field row">
                        <input placeholder="Số điện thoại" id="phone" name="phone" type="text" class="validate" length="20" required>
                        <label for="phone">Số điện thoại</label>
                    </div>
                    <button type="submit" name="submit" class="waves-effect waves-red btn btn-large red-text ghost-btn">Đăng ký</button>
                </form>
                <div class="col l6 m12 s12">
                    <div class="video-container no-controls">
                        <iframe height="415" src="https://www.youtube.com/embed/XR-ZahYbWvk" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><div class="a a5"></div> </div>
    </div>
    <div id="contact" class="section white">
        <div class="row container">
            <h1 class="header center"><a href="#" class="red-text text-darken-2">Liên hệ</a></h1>
        </div>
        <div class="row">
            <div class="col l6 m12 s12 center-align">
                <div class="fb-comments" data-href="http://amazingyou.edu.vn/" data-numposts="5"></div>
            </div>
            <div class="col l6 m12 s12">
                <strong>Địa chỉ :</strong> Số 52, Ngõ 199, Đường Hồ Tùng Mậu, Quận Nam Từ Liêm, Hà Nội.<br>
                <strong>Tel :</strong> (04) 6675 4455.<br>
                <strong>Hotline :</strong> 098 657 3689.<br>
            </div>
        </div>
    </div>
    <div class="section white none-padding">
        <div class="class">
            <a href="//facebook.com/amazingyou1" target="_blank"><div class="student1 student"></div></a>
            <a href="#"><div class="student2 student"></div></a>
            <a href="#"><div class="student3"></div></a>
        </div>
    </div>
    <footer class="page-footer">
        <div class="footer-copyright grey lighten-5 black-text">
            <div class="container">
                © 2015 Copyright by <strong>Amazing You</strong>. Designed by <a href="//nktquan.github.io/" target="_blank">nktquan.github.io</a>. All rights reserved.
            </div>
        </div>
    </footer>
    <div class="fixed-action-btn" style="bottom: 45px; right: 25px;">
        <a class="btn-floating btn-large red">
            <i class="large material-icons waves-effect">add</i>
        </a>
        <ul>
            <!--<li><a class="btn-floating red"><i class="material-icons waves-effect">home</i></i></a></li>-->
            <!--<li><a class="btn-floating yellow darken-1"><i class="material-icons waves-effect">format_quote</i></a></li>-->
            <li><a href="#join" class="btn-floating green page-scroll"><i class="material-icons waves-effect">mode_edit</i></a></li>
            <li><a href="#page-top" class="btn-floating blue page-scroll"><i class="material-icons waves-effect">home</i></a></li>
        </ul>
    </div>
</div>
<div id="fb-root"></div>
<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/scrolling-nav.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/scroll.page.js"></script>
</body>
</html>
