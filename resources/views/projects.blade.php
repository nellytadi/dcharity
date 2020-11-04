@extends('layout.layout')
@yield('title','Our Projects')
@section('content')
<style>

    </style>
    <section class="breadcrumbs" style="background:url({{asset('assets/img/our-projects-imgHeader.jpg')}})">
        <div class="crumbs">
            <div class="container pt-5">

                <h3>Our Projects</h3>

                <ul>
                    <li><a href="{{url('/')}}"> Home</a></li>
                    <li>Our Projects</li>
                </ul>
            </div>

        </div>

    </section>

    <section class="projects__sec">
        <div class="container my-5">
            <div class="col-md-12 mx-auto px-0">
                <div class="project">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <img src="{{asset('assets/img/theamericanking.jpg')}}" class="img-fluid mr-3 largescreen__img" alt="...">
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <h1 class="mt-0">The American King<br> <small>A Film by <b>Adah Obekpa</b></small></h1>
                            <img src="{{asset('assets/img/theamericanking.jpg')}}" class="img-fluid mr-3 smallscreen__img" alt="...">
                            <p>
                                In 2020, a mysterious Priestess arrives in the USA to fulfill a 400 year old Prophecy: to
                                choose an American King (Akon) who will rebuild an ancient African Kingdom .
                            </p>
                            <p>
                                The CIA scrambles to find information for the President, leading to the unraveling of
                                the most guarded Secret about the founding of the USA. The President running for
                                re-election, has to decide if he can Make Africa Great Again.
                                <br><a href="https://theamericanking.org/" target="_blank">Learn more...</a>
                            </p>
                            <a href="https://theamericanking.org/" target="_blank"><button class="africa-btn px-5">Visit Website</button></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection