@extends('layout.layout')
@section('title','About us')
@section('content')

    <section class="breadcrumbs">
        <div class="crumbs">
            <div class="container pt-5">

                <h3>About us</h3>

                <ul>
                    <li><a href="{{url('/')}}"> Home</a></li>
                    <li>About us</li>
                </ul>
            </div>

        </div>
    </section>

    <section class="about-welcome">
        <div class="container">
            <div class="col-md-10 mx-auto">
                <div class="text-center">
                    <h1 class="uppercase">Welcome to <b>Doctors Charity</b></h1>
                    <p><b>DOCTORS CHARITY</b> is a multi-service non-profit based in New York helping people worldwide.
                        Currently we operate in the U.S. and Africa to deliver medical care and equipment, health and
                        education, microfinance, and investment in agriculture in communities that need it the most. We
                        have
                        six major projects reaching hundreds of people in need.
                    </p>
                    <p>The ultimate aim of <b>DOCTORS CHARITY </b>is to build a legacy of service. We envision a day
                        when medical
                        professionals the world over will set a day aside out of their busy schedule every month to
                        volunteer their times to providing free and qualitative healthcare in poor communities.</p>
                </div>

                <div class="row second-welcome">
                    <div class="col-md-6">
                        <img src="{{asset('assets/img/about-us-img1.jpg')}}" class="img-fluid">
                    </div>
                    <div class="col-md-6 shift-5">
                        <p><b>We want to be about service—</b><br>
                            service to the people and service to the community. We desire a world in which medical
                            professionals and other healthcare providers would make service to their people, their
                            communities and neighboring communities an integral part of their monthly schedule.</p>

                        <p><b>We believe that by coming together</b>, we can build for the world a big global community
                            of medical care where we are all responsible to the wellbeing and care of each other and a
                            world where no one goes bankrupt as a result of falling ill or dies from lack of care due to
                            poverty.</p>
                        <div class="text-center__small">
                            <a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=drscharity%40gmail.com&item_name=Doctors+charity&currency_code=USD">
                                <button class="africa-btn uppercase mt-3">Make donation</button></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="africa">
        <div class="container">
            <div class="row mb-100">


                <div class="col-md-6 pr-50">
                    <h2 class="uppercase">
                        Our Mission
                    </h2>
                    <div class="africa-body ">
                        <p>Every person deserves access to life improving and lifesaving information, medical care, and
                            economic opportunities to support their families. We are dedicated to providing medical care
                            and resources to the economically disadvantaged. Our mission is to deploy effective and
                            coordinated efforts to ensure people gain access to qualitative medical care, and economic
                            resources.
                        </p>
                    </div>
                
                </div>

                <div class="col-md-6">
                    <img src="{{asset('assets/img/about-us-img2.jpg')}}" class="img-fluid">
                </div>
            </div>

            <div class="row mb-100">

                <div class="col-md-6 go-under">
                    <img src="{{asset('assets/img/about-us-img3.jpg')}}" class="img-fluid">
                </div>
                <div class="col-md-6 pl-50 go-top">
                    <h2 class="uppercase">
                        Our Legacy
                    </h2>
                    <div class="africa-body ">
                        <p>We aim to increase a legacy of giving and service among doctors and our global community at large. We envision a day when everyday professionals feel compelled to volunteer and give regularly to medical missions. access to qualitative medical care, and economic resources.
                        </p>
                    </div>
                
                </div>

               
            </div>

            <div class="row mb-100">


                <div class="col-md-6 pr-50">
                    <h2 class="uppercase">
                        Who we work with
                    </h2>
                    <div class="africa-body ">
                        <p>DOCTORS CHARITY develops key projects to assist medical professionals to deliver medical care, equipment, supplies and medical training in the U.S. and the developing world. We invite doctors and other professionals interested in helping needy communities to volunteer on any number of our projects, and/or donate funds to assist in the deployment of these key projects. There are so many ways to give back. We have focused on three core areas:
                        </p>
                        <p>
                            Service: 
                            Delivering pro bono medical services via home visits and medical missions abroad
                            Resource distribution: providing medical equipment to communities that need it
                            Financing: rallying funds to support microfinancing and farming initiatives
                        </p>
                    </div>
                
                </div>

                <div class="col-md-6">
                    <img src="{{asset('assets/img/about-us-img4.jpg')}}" class="img-fluid">
                </div>
            </div>
            <div class="text-center">
                <a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=drscharity%40gmail.com&item_name=Doctors+charity&currency_code=USD">
                    <button class="africa-btn uppercase mt-3">Make donation</button></a>

            </div>
        </div>
    </section>
    <div class="donation">
        <a href="{{url('contact')}}"><span style="font-size: 18px;color: #C4C4C4;" >For more enquiries</span> <i>Contact us!</i></a>
    </div>

<section class="partners my-5">
    <div class="container text-center">
        <h2>Our partners</h2>
        <img src="{{asset('assets/img/ihotu.jpg')}}" alt="Ihotu Telemedicine Clinic" class="img-fluid mt-3">
    </div>
</section>


@endsection