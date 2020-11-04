<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Doctors Charity is a not-for-profit organization that helps doctors and other healthcare workers contribute their skills and resources to better the lives of people living in Africa who have poor access to healthcare.">
    <meta name="robots" content="index, follow">
    <title>Doctors Charity - Non Profit Organisation | @yield('title')</title>
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/ico">
    @yield('meta-content')
    <link rel="canonical" href="{{url()->full()}}"/>
    <meta property="og:title" content="Doctors Charity">
    <meta property="og:description"
        content="Doctors Charity is a not-for-profit organization that helps doctors and other healthcare workers contribute their skills and resources to better the lives of people living in Africa who have poor access to healthcare.">
    <meta property="og:image" content="{{asset('assets/img/favicon.png')}}">
    <meta property="og:type" content="text/html">

    <meta property="og:url" content="https://doctorscharity.org">

    <meta name="twitter:title" content="Doctors Charity">
    <meta name="twitter:description"
        content="Doctors Charity is a not-for-profit organization that helps doctors and other healthcare workers contribute their skills and resources to better the lives of people living in Africa who have poor access to healthcare.">
    <meta name="twitter:image" content="{{asset('assets/img/favicon.png')}}">
    <meta name="twitter:card" content="{{asset('assets/img/favicon.png')}}">
    <!-- CSS only -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>


<body>
    <div class="top-bar">
        <div class="row top-row">
            <div class="col-12">
                <div class="top-nav float-right">
                    <a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=drscharity%40gmail.com&item_name=Doctors+charity&currency_code=USD">
                        <button class="nav-btn">donate now</button>
                    </a>
                    <a href="mailto:info@doctorscharity.org" class="phone">
                        <i class="fa fa-round fa-envelope "></i>
                        <span>info@doctorscharity.org</span>
                    </a>
                </div>
            </div>

        </div>

        <div class="row mr-0">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light">

                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/img/logo.png')}}" alt="Dotors charity logo"></a>

                    <button class="navbar-toggler collapsed border-0" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup">
                        <span class="navbar-toggler-icon">
                            <i class="fa fa-navicon"></i>
                        </span>
                        <i class="fa fa-close close-icon" aria-hidden="true"></i>
                    </button>



                    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                        <a class="nav-link mr-4 {{!Route::is('index') ?: 'active' }}" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-link mr-4 {{!Route::is('about') ?: 'active' }}" href="{{url('about')}}">About us</a>
                            <a class="nav-link mr-4 {{!Route::is('projects') ?: 'active' }}" href="{{url('projects')}}">Projects</a>
                            <a class="nav-link mr-4 {{!Route::is('contact') ?: 'active' }}" href="{{url('contact')}}">Contact us</a>
                            <a class="nav-link mr-4" href="https://shop.doctorscharity.org">Shop</a>

                            <div class="nav-link">
                                <a href="#" target="_blank"><i class="fa fa-round fa-facebook"></i></a>

                                 <a href="https://twitter.com/DoctorsCharity" target="_blank"><i class="fa fa-round fa-twitter"></i></a>

                                 <a href="https://www.instagram.com/doctorscharity/" target="_blank"><i class="fa fa-round fa-instagram"></i></a>

                                 <a href="https://www.linkedin.com/in/doctors-charity-a20a3b95/" target="_blank"><i class="fa fa-round fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    @yield('content')
    <div class="donation">
        <a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=drscharity%40gmail.com&item_name=Doctors+charity&currency_code=USD">
            <span class="uppercase">Donate</span></a>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="uppercase">Navigation Links</h4>
                    <div class="row">
                        <div class="col-4 px-0">


                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-4 px-0">

                            <ul>
                                <li><a href="{{url('about')}}">About</a></li>
                                <li><a href="{{url('projects')}}">Projects</a></li>
                            </ul>
                        </div>
                        <div class="col-4 px-0">

                            <ul>
                                <li><a href="{{url('donate')}}">Donate</a></li>
                                <li><a href="https://shop.doctorscharity.org">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-1-7 px-0">
                    <ul class="contact">
                        <li><a href="https://goo.gl/maps/tmxD89T5ySrnvEUD8"><i class="fa fa-map-marker"></i>555 Madison Avenue, 5th Floor, New York, NY 10022.</a>
                        </li>
                        {{-- <li><a href="tel: 212-470-3827"> <i class="fa fa-phone"></i> 212-470-3827</a></li> --}}
                        <li><a href="mailto:info@doctorscharity.org"><i class="fa fa-envelope"></i>info@doctorscharity.org</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="social ">
                        <h5>Follow us</h5>
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>

                        <a href="https://twitter.com/DoctorsCharity" target="_blank"><i class="fa fa-twitter"></i></a>

                        <a href="https://www.instagram.com/doctorscharity/" target="_blank"><i class="fa fa-instagram"></i></a>

                        <a href="https://www.linkedin.com/in/doctors-charity-a20a3b95/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        
                    </div>
                </div>

            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <img src="{{asset('assets/img/small-logo.png')}}" alt="Doctors charity icon">
                <span>Copyright ©
                    <script>document.write(new Date().getFullYear())</script> Doctors Charity</span>
            </div>
        </div>
    </footer>

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

@yield('script')
</body>

</html>

