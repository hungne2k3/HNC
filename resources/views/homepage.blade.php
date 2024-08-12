<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link rel="shortcut icon" href="./images/logoHNC.png" type="image/x-icon" /> 
    <!-- Link CSS-->
    <link rel="stylesheet" href="{{ asset('css/library.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <!-- Link Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <!-- Navigation bar -->
    <nav class="nav">
        <div class="grid container">
            <div class="row">
                <div class="col l-12">
                    <ul class="flex content-center navbar">
                        <li class="nav__item"><a class="link link--primary nav--link" href="./homepage.html">Trang chủ</a></li>
                        <li class="nav__item">
                            <a class="link link--primary nav--link dropdown" href="#">Giảng Dạy</a>
                            <ul class="dropdown-menu" style="min-width: 200px;">
                                <li class="dropdown__item"><a href="#" class="link link--black dropdown--link">Xem thời khoá biểu</a></li>
                                <li class="dropdown__item"><a href="./lichcoithi.html" class="link link--black dropdown--link">Tra cứu lịch coi thi</a></li>
                                <li class="dropdown__item"><a href="#" class="link link--black dropdown--link">Sổ nhật ký giảng dạy</a></li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a class="link link--primary nav--link dropdown" href="#">Quản lý quá trình điểm</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown__item"><a href="./diemdanhsinhvien.html" class="link link--black dropdown--link">Điểm danh sinh viên</a></li>
                                <li class="dropdown__item"><a href="./nhapdiemthanhphan.html" class="link link--black dropdown--link">Nhập điểm thành phần</a></li>
                                <li class="dropdown__item"><a href="#" class="link link--black dropdown--link">Nhập điểm thi</a></li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a class="link link--primary nav--link dropdown" href="#">Danh mục biểu mẫu</a>
                            <ul class="dropdown-menu" style="min-width: 200px;">
                                <li class="dropdown__item"><a href="./bieumau.html" class="link link--black dropdown--link">Danh sách biểu mẫu</a></li>
                            </ul>
                        </li>
                        <li class="nav__item flex content-center">
                            <a class="link link--primary nav--link dropdown" href="#">
                                <span style="line-height: normal;"><svg class="nav__icon" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><path d="M256 256a112 112 0 10-112-112 112 112 0 00112 112zm0 32c-69.42 0-208 42.88-208 128v64h416v-64c0-85.12-138.58-128-208-128z"></path></svg></span>
                                Phạm Xuân Huy
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown__item"><a href="#" class="link link--black dropdown--link">Thông tin cá nhân</a></li>
                                <li class="dropdown__item">
                                    <a href="./changepassword.html" class="link link--black dropdown--link">
                                        <span class="flex content-center"><svg class="nav__icon" style="fill: #000" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><path d="M368 192h-16v-80a96 96 0 10-192 0v80h-16a64.07 64.07 0 00-64 64v176a64.07 64.07 0 0064 64h224a64.07 64.07 0 0064-64V256a64.07 64.07 0 00-64-64zm-48 0H192v-80a64 64 0 11128 0z"></path></svg></span>
                                        Đổi mật khẩu
                                    </a>
                                </li>
                                <li class="dropdown__item">
                                    <a href="./login.html" class="link link--black dropdown--link">
                                        <svg height="14px" width="14px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30.143 30.143" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#030104;" d="M20.034,2.357v3.824c3.482,1.798,5.869,5.427,5.869,9.619c0,5.98-4.848,10.83-10.828,10.83 c-5.982,0-10.832-4.85-10.832-10.83c0-3.844,2.012-7.215,5.029-9.136V2.689C4.245,4.918,0.731,9.945,0.731,15.801 c0,7.921,6.42,14.342,14.34,14.342c7.924,0,14.342-6.421,14.342-14.342C29.412,9.624,25.501,4.379,20.034,2.357z"></path> <path style="fill:#030104;" d="M14.795,17.652c1.576,0,1.736-0.931,1.736-2.076V2.08c0-1.148-0.16-2.08-1.736-2.08 c-1.57,0-1.732,0.932-1.732,2.08v13.496C13.062,16.722,13.225,17.652,14.795,17.652z"></path> </g> </g></svg>
                                        Đăng xuất
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- About us -->
    <div class="grid container">
        <div class="row">
            <div class="col l-12 about-us">
                <h3 class="about-us__title">Về chúng tôi</h3>
                <p class="about-us__detail">
                    Từ sự đam mê công nghệ thông tin và cam kết chất lượng trong từng
                    sản phẩm, nhóm sinh viên của HPC đã chuyên tâm nghiên cứu và phát
                    triển các giải pháp phần mềm, đặc biệt cho ngành giáo dục và y tế.
                    Đội ngũ này, bao gồm các sinh viên xuất sắc từ trường Cao đẳng Công
                    Nghệ Bách Khoa Hà Nội, không chỉ theo đuổi niềm say mê với công nghệ
                    mà còn dành tâm huyết để tạo ra những sản phẩm mang tính đột phá,
                    giúp cải thiện hiệu quả quản lý trong các cơ sở giáo dục và y tế.
                </p>
                <p class="about-us__detail">
                    Với mục tiêu phát triển bền vững, nhóm sinh viên HPC đã thiết kế các
                    phần mềm không chỉ sáng tạo mà còn dễ dàng tùy chỉnh theo nhu cầu
                    đặc thù của từng khách hàng. Họ cam kết cung cấp các giải pháp phần
                    mềm truyền thống có sẵn, cho phép các đơn vị giáo dục và y tế mô
                    phỏng chính xác mô hình và quy trình quản lý của họ, đồng thời có
                    khả năng tự phát triển và cập nhật theo thời gian nếu cần thiết.
                </p>
                <p class="about-us__detail">
                    Các sản phẩm phần mềm được nhóm HPC phát triển bao gồm quản lý khoa
                    học, cán bộ, sinh viên, điểm số, lập kế hoạch thời khoá biểu, cổng
                    thông tin dành cho nhà trường và sinh viên, quản lý học phí và học
                    bổng, quản lý thi trắc nghiệm, thư viện, công văn và quản trị hệ
                    thống. Những giải pháp này không chỉ đã được khẳng định trên thị
                    trường mà còn góp phần tạo lợi ích cho cộng đồng, nhấn mạnh tinh
                    thần đoàn kết và chia sẻ kiến thức.
                </p>
                <p class="about-us__detail">
                    Bên cạnh đó, nhóm HPC cũng đã phát triển các giải pháp cho doanh
                    nghiệp như hệ thống ERP, cổng thông tin doanh nghiệp, góp phần vào
                    quá trình bình ổn giá và phát triển kinh tế xã hội. Với tinh thần
                    “cung cấp giải pháp quản lý đào tạo tối ưu - chính sách hậu mãi ưu
                    việt”, nhóm sinh viên HPC tự tin khẳng định sẽ mang lại sự vững chắc
                    cho khách hàng và thị trường.
                </p>
            </div>
        </div>
    </div>
    <!-- Seperator -->
    <hr class="seperator">
    <!-- Footer -->  
    <div class="grid container">
        <div class="row">
            <div class="col l-12">
                <footer class="flex justify-end content-center">
                    <div class="footer">
                        <a href="https://caodanghanoi.edu.vn/" class="link link--gray footer--link">Trường Cao đẳng Hà Nội</a>
                        <div class="footer__copyright ">©2024 Developed by HPC - v1.0</div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>