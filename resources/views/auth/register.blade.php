<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ URL::asset('css\reset.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css\base.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css\register.css');}}"> 
    <link rel="stylesheet" href="./fonts/themify-icons/themify-icons.css">
    
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script> -->


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
</head>

<body>
    <header class="header">
        <div class="grid">
            <img class="header-image" src="{{ URL::asset('img\245499403_1043512679749438_9209665840480689390_n.png');}}" alt="">
            <h1 class="header-title">Đăng kí</h1>
        </div>
    </header>
    <div class="contain">
        <div class="logo-box">
            <img class="contain-image" src="{{ URL::asset('img\245499403_1043512679749438_9209665840480689390_n.png');}}" alt="">
            <center>
                <h2 class="contain-title"> Web mua bán đồ cũ <br><br>tạm được tại Việt Nam</h2>
            </center>
        </div>

        <div class="form-box">
            <div class="form-box-box">
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="register-box">
                        <h2 class="login-register-title">ĐĂNG KÍ</h2><br>

                        <center style="font-size: 14px;">

                            <div>
                                <div class="form-group">
                                    <input class="login-register-info @error('email') is-invalid @enderror"  id="email" type="text" placeholder="Email" name="email"  
                                    value="{{ old('email') }}"  autocomplete="email" autofocus> 
                                    <!-- <span class="form-message" id="form-message-email"></span> -->

                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                    <input class="login-register-info" id="name" type="text" placeholder="Họ và Tên" name="name"
                                    value="{{ old('name') }}" autocomplete="name" autofocus
                                    >
                                    <!-- <span class="form-message" id="form-message-name"></span> -->
                                    
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                    <input class="login-register-info" id="phone" type="text" placeholder="Số điện thoại" name="phone"
                                    value="{{ old('phone') }}" autocomplete="email" autofocus>
                                    <span class="form-message" id="form-message-phone"></span> 
                                    
                                </div>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                    <input class="login-register-info" id="password" type="password" name="password" autocomplete="new-password" placeholder="Nhập mật khẩu ( có ít nhất 8 kí tự )">
                                    <!-- <span class="form-message" id="form-message-pass"></span> -->
                                    
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                    <input class="login-register-info" id="password-confirm" type="password" name="password_confirmation" autocomplete="new-password" placeholder="Nhập lại mật khẩu">
                                    <!-- <span class="form-message" id="form-message-repass"></span> -->
                                    
                                </div>
                                <div>
                                    <i class="eye-icon1 ti-eye " type="button" onclick="showHiddenpass()" id="eye-icon"></i>
                                    <i class="eye-icon2 ti-eye " type="button" onclick="showHiddenrepass()" id="eye-icon"></i>
                                </div>
                            
                        </center>
                        <input type="submit" class="register-button" value="ĐĂNG KÍ" ><br><br>
                    </div>
                </form>
                <script src="./java/login-register.js"></script>
                <script>
                    //mong muon
                    Validator({
                        form: '#form-login-register',
                        formGroupSelector: '.form-group',
                        errorSelector: '.form-message',
                        rules: [
                        Validator.isEmail('#email'),
                        Validator.isRequired('#name'),
                        Validator.isPhonnumber('#phone'),
                        Validator.minLength('#pass',5),
                        Validator.isConfrimed('#repass',function(){
                            return document.querySelector('#form-login-register #pass').value;
                        },)                     
                        ],
                        onSubmit: function (data){
                            console.log(data);
                        } 
                        

                    });
                </script>
                    <div class="register-login">

                        <h5 style="font-size: 12px;">
                            <center><span>HOẶC</span></center>
                        </h5><br>
                        <div class="button-facebook">
                            <a href="#" class="button-link"><i
                                    class="button-link-icon-face ti-facebook "></i>facebook</a>

                        </div>
                        <div class="button-google">
                            <a href="#" class="button-link"><i class="button-link-icon-gg ti-google "></i>google</a>
                        </div>

                    </div>
                    <div class="login">
                        <center>
                            <p class="p-5">Đã có tài khoản? <a class="login-button" href="./login ">Đăng nhập</a></p>
                        </center>
                    </div>
               

            </div>

        </div>

    </div>
    <footer class="footer">

        <div class="">
            <div class="footer-icon">
                <center>
                    <div class="footer-icon-box">
                        <a href="#" class="footer-link"><i class="footer-button ti-facebook "></i></a>
                    </div>
                    <div class="footer-icon-box">
                        <a href="#" class="footer-link"><i class="footer-button ti-instagram "></i></a>
                    </div>
                    <div class="footer-icon-box">
                        <a href="#" class="footer-link"><i class="footer-button ti-linkedin"></i></a>
                    </div>
                    <div class="footer-icon-box">
                        <a href="#" class="footer-link"><i class="footer-button ti-twitter-alt"></i></a>
                    </div>
                    <div class="footer-icon-box">
                        <a href="#" class="footer-link"><i class="footer-button ti-pinterest"></i></a>
                    </div>
                </center>
            </div>
            <div class="footer-bottom">
                <center>
                    <p>Địa chỉ: Khu phố 6, P.Linh Trung, Tp.Thủ Đức, Tp.Hồ Chí Minh. Tổng đài hỗ trợ: (028) 372 52002 -
                        Email: <a href="mailto:19521852@gm.uit.edu.vn">19521852@gm.uit.edu.vn</a></p>
                    <p>© 2015 - Bản quyền thuộc về BaiRac Team</p>
                    <center>
            </div>

        </div>

    </footer>
</body>

</html>