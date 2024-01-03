
<!DOCTYPE html>
<html class="is-scrolling">
<head>
    <title>SAPAMOTOR</title> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">   
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/images/logo.svg") }}">

    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}" /> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
</head>
<body>
    <header>
        <div class="wrapper">
            <div class="header-wrapper">
                <div class="content-wrapper">
                    <div class="nav-control">
                        <i class="fa fa-bars"></i>
                    </div>
                    <a href="/" class="logo-wrapper">
                        <img src="assets/images/logo.svg" alt="">
                    </a>
                </div>
                <div class="nav-wrapper">
                    <div class="nav-item nav-down {{ $nav == 'solution' ? 'hightlight' : '' }}">
                        SOLUTIONS
                        <div class="sub-wrapper">
                            {{-- <a href="/automotive-sensor" class=" {{ $nav == 'automotive' ? 'hightlight' : '' }}"" >AUTOMOTIVE SENSOR</a> --}}
                            <a href="/charging-solution" class=" {{ $nav == 'charging' ? 'hightlight' : '' }}"" >CHARGING SOLUTION</a>
                            <a href="/motor-controllers" class=" {{ $nav == 'motor' ? 'hightlight' : '' }}"" >MOTOR CONTROLLERS</a>
                            <a href="/battery-management" class=" {{ $nav == 'battery' ? 'hightlight' : '' }}"" >BATTERY MANAGEMENT SYSTEM</a>
                        </div>
                    </div>
                    <a href="/about" class="nav-item {{ $nav == 'about' ? 'hightlight' : '' }}">ABOUT US</a>
                    <a href="#contact" class="nav-item {{ $nav == 'contact' ? 'hightlight' : '' }}">CONTACT</a> 
                </div>
            </div>
        </div>
    </header>
    <main> 
        @yield('body')
    </main>
    <footer style="background-image: url('assets/images/footer.png');" id="contact">
        <div class="wrapper">
            <img src="assets/images/logo-footer.svg" alt="" class="logo">
            <div class="contact">
                <h3>CONTACT</h3>
                <p >78 Duy Tan street, Dich Vong Hau, Cau Giay, Ha Noi, Viet Nam</p>
                <p >ruby@sapamotors.vn</p>
            </div>
        </div>
    </footer>
</body>
<script src="https://kit.fontawesome.com/d8162761f2.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
<script type="text/javascript" src="assets/js/owl.carousel.js"></script>  
<script type="text/javascript" src="assets/js/window.js"></script>  

</html>         