@extends('layout.layout')
@section('title','Contact us')
@section('content')

    <section class="breadcrumbs">
        <div class="crumbs">
            <div class="container pt-5">

                <h3>Contact Us</h3>

                <ul>
                    <li><a href="{{url('/')}}"> Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>

        </div>
        
    </section>

    <section class="cntact__sec">
        <div class="container my-5">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    @if ($errors->any())
                    <div class="col-12 col-12 m-0 pl-md-2">
                        @foreach ($errors->all() as $error)
                            <span class="form-alert"> {{ $error }}  </span>
                        @endforeach

                    </div>
                @endif

                @if (session('status'))

                    @if (session('status') == "alert-success")
                        <div class="alert alert-success">
                            <span class="form-alert"> {{ session('message') }}</span>
                        </div>
                    @endif
                    @if (session('status') == "alert-danger")
                        <div class="alert alert-danger">
                            <span class="form-alert">  {{ session('message') }}</span>
                        </div>
                    @endif
                @endif
                    <div class="col-md-3 text-center">
                        <div class="each-address">
                            <div>
                                <i class="fa fa-map-marker fa-round"></i>
                            </div>
                            <a href="#"> 350 5th Ave, 59th Floor,
                            New York, NY 10118.</a>

                        </div>
                        <div class="each-address">
                            <div>
                                <i class="fa fa-phone fa-round"></i>
                            </div>
                            <a href="tel:212-470-3827"> 212-470-3827<br>
                            Mon to Fri 9am to 6 pm.</a>
                        </div>
                        <div class="each-address">
                            <div>
                                <i class="fa fa-envelope fa-round"></i>
                            </div>
                            <a href="mailto:info@doctorscharity.org"> info@doctorscharity.org</a>
                        </div>
                        <div class="each-address">
                            Send us your query anytime!
                        </div>
                        
                    </div>
                    <div class="col-md-6 ml-auto">
                    <form class="contact__form" action="{{route('contact.store')}}" method="POST">
                        @csrf
                            <div>
                                <input type="text" name="name" class="input__field"  placeholder="Full Name">
                            </div>
                            <div>
                                <input type="text" name="email" class="input__field"  placeholder="Email">
                            </div>
                            <div>
                                <textarea name="message" class="input__field" rows="6" placeholder="Message"></textarea>
                            </div>
                            <input type="submit" class="g-recaptcha input__submit" 
                            data-sitekey="6LdWp90ZAAAAAFuqQP_4Kjx0moleVkIwqvpys2vY" 
                            data-callback='onSubmit' 
                            data-action='submit' value="Send Message">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
      document.getElementById("demo-form").submit();
    }
  </script>
 
@endsection