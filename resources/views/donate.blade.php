@extends('layout.layout')
@section('title','Donate')
@section('content')

    <section class="breadcrumbs">
        <div class="crumbs">
            <div class="container pt-5">

                <h3>Donate</h3>

                <ul>
                    <li><a href="{{url('/')}}"> Home</a></li>
                    <li>Donate</li>
                </ul>
            </div>

        </div>
        
    </section>

    <section class="donate__sec">
        <div class="container">
            <div class="col-md-10 mx-auto mt-5">
                <div class="text-center">
                    <h1>Donate to <br><span>Doctors Charity inc.</span></h1>
                       
                    <p>Purpose: Doctors Charity</p>

                    <div class="donate__btns">
                        <div>
                            <a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=drscharity%40gmail.com&item_name=Doctors+charity&currency_code=USD">
                                <button class="dark__donate">
                                    Donate with Paypal
                                </button>
                            </a>
                        </div>
                        
                        <div>
                            <a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=drscharity%40gmail.com&item_name=Doctors+charity&currency_code=USD">
                                <button>
                                    Donate with Debit or Credit card
                                </button>
                            </a>
                        </div>

                    </div>
                    <span class="small__txt">Learn more <a href="about.html">about us!</a></span></span>
                </div>
                <hr class="mt-0">
            </div>
        </div>
    </section>

    <div class="lil-grey">
       
            <i> “ No one is useless in this world who lightens the burdens of another “</i>
       
            <div class="small__txt"> - Charles Dickens</div>
        
     <div class="line""></div>
      
      </div>
@endsection