<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập hệ thống</title>
    <link rel="shortcut icon" href="{{ asset('images/logoHNC.png') }}" type="image/x-icon" /> 
    <!-- Link CSS-->
    <link rel="stylesheet" href="{{ asset('css/library.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="left-container">
        <div class="logo-container">
            <img src="./images/logoHNC.png" alt="Logo">
        </div>
        <div class="portal-name">Cổng Thông Tin Giảng Viên</div>
    </div>
    <div class="right-container">
        <div class="div">
            <div class="header">Trường Cao Đẳng Hà Nội<br>Hanoi College</div>
        </div>
        <!-- Seperator -->
        <hr class="seperator"><hr>
        <!-- login-form -->
         <div class="login-form__wrapper">
            <form class="login-form" id="loginForm" method="POST" action="/homepage">
                @csrf
                <div class="login-form__title">Đăng nhập hệ thống</div>
                <div class="login-form-group">
                    <div class="flex content-center justify-center login-form__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M8 0C9.06087 0 10.0783 0.421427 10.8284 1.17157C11.5786 1.92172 12 2.93913 12 4C12 5.06087 11.5786 6.07828 10.8284 6.82843C10.0783 7.57857 9.06087 8 8 8C6.93913 8 5.92172 7.57857 5.17157 6.82843C4.42143 6.07828 4 5.06087 4 4C4 2.93913 4.42143 1.92172 5.17157 1.17157C5.92172 0.421427 6.93913 0 8 0ZM8 10C12.42 10 16 11.79 16 14V16H0V14C0 11.79 3.58 10 8 10Z" fill="#555555"/>
                        </svg>
                    </div>
                    <input type="text" id="magv" name="magv" placeholder="Tên đăng nhập" class="login__input" required>
                </div>
                <div class="login-form-group">
                    <div class="flex content-center justify-center login-form__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 17C12.5304 17 13.0391 16.7893 13.4142 16.4142C13.7893 16.0391 14 15.5304 14 15C14 14.4696 13.7893 13.9609 13.4142 13.5858C13.0391 13.2107 12.5304 13 12 13C11.4696 13 10.9609 13.2107 10.5858 13.5858C10.2107 13.9609 10 14.4696 10 15C10 15.5304 10.2107 16.0391 10.5858 16.4142C10.9609 16.7893 11.4696 17 12 17ZM18 8C18.5304 8 19.0391 8.21071 19.4142 8.58579C19.7893 8.96086 20 9.46957 20 10V20C20 20.5304 19.7893 21.0391 19.4142 21.4142C19.0391 21.7893 18.5304 22 18 22H6C5.46957 22 4.96086 21.7893 4.58579 21.4142C4.21071 21.0391 4 20.5304 4 20V10C4 9.46957 4.21071 8.96086 4.58579 8.58579C4.96086 8.21071 5.46957 8 6 8H7V6C7 4.67392 7.52678 3.40215 8.46447 2.46447C9.40215 1.52678 10.6739 1 12 1C12.6566 1 13.3068 1.12933 13.9134 1.3806C14.52 1.63188 15.0712 2.00017 15.5355 2.46447C15.9998 2.92876 16.3681 3.47995 16.6194 4.08658C16.8707 4.69321 17 5.34339 17 6V8H18ZM12 3C11.2044 3 10.4413 3.31607 9.87868 3.87868C9.31607 4.44129 9 5.20435 9 6V8H15V6C15 5.20435 14.6839 4.44129 14.1213 3.87868C13.5587 3.31607 12.7956 3 12 3Z" fill="#555555"/>
                        </svg>
                    </div>
                    <input type="password" id="password" name="password" placeholder="Mật khẩu" required class="login__input">
                </div>
                <button type="submit" class="btn btn--primary login__button" action>Đăng nhập</button>
            </form>
         </div>
        <!-- Footer -->
        <div>
            <footer class="flex justify-end content-center">
                <div class="footer">
                    <a href="https://caodanghanoi.edu.vn/" class="link footer--link">Trường Cao đẳng Hà Nội</a>
                    <div class="footer__copyright ">©2024 Developed by HPC - v1.0</div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('js/login.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>  
</body>
</html>