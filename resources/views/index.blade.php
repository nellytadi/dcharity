@extends('layout.layout')
@section('title','Home')
@section('meta-content')

@endsection
@section('content')
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background: url('{{asset('assets/img/slider-1.jpg')}}') no-repeat center;">
                <div class="carousel-caption d-md-block">
                    <h2>Doctors Charity </h2>
                    <p>Doctors Charity is a not-for-profit organization that helps doctors and other healthcare workers
                        contribute their skills and resources to better the lives of people living in Africa who have
                        poor access to healthcare.</p>
                    <a href="{{url('about')}}">
                        <button class="nav-btn w-color">Learn more</button>
                    </a>
                </div>
            </div>
            <div class="carousel-item" style="background: url('{{asset('assets/img/slider-2.jpg')}}') no-repeat center;">
                <div class="carousel-caption d-md-block">
                    <h2>Doctors Charity </h2>
                    <p>
                        It further provides a means through which Africans in the Diaspora and people in the developed
                        world can directly impact the lives of Africans on the Continent, thereby midwifing a
                        renaissance period that will usher in a rebirth of the Continent.</p>
                        <a href="{{url('about')}}">
                        <button class="nav-btn w-color">Learn more</button>
                    </a>
                </div>
            </div>
            <div class="carousel-item" style="background: url('assets/img/slider-3.jpg') no-repeat center;">
                <div class="carousel-caption d-md-block">
                    <h2>Doctors Charity </h2>
                    <p>Doctors Charity currently operates in the U.S. and Africa to deliver medical care and equipment,
                        health and education, microfinance, and investment in agriculture in communities that need it
                        the most.</p>
                        <a href="{{url('about')}}">
                        <button class="nav-btn w-color">Learn more</button>
                    </a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

  



    <section class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto text-center">
                    <h1 class="uppercase">Welcome To <b>Doctors Charity</b></h1>

                    <div class="welcome-body">
                        <p>
                            Doctors Charity is a not-for-profit organization that helps doctors and other healthcare
                            workers
                            contribute their skills and resources to better the lives of people living in Africa who
                            have poor
                            access to healthcare.
                        </p>
                        <p>
                            It further provides a means through which Africans in the Diaspora and people in the
                            developed world can
                            directly impact the lives of Africans on the Continent, thereby midwifing a renaissance
                            period that will
                            usher in a rebirth of the Continent.
                        </p>
                        <a href="{{url('about')}}" class="more">Learn more.</a>

                        <hr>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <div class="lil-grey">
        We are dedicated to providing medical care and resources to the<span> economically disadvantaged</span>
    </div>

    <section class="feral">
        <div class="container">
            <div class="row">
                <h2>
                   The Feral Chicken
                </h2>
                <div class="col-12 my-sm-5">
                    <iframe width="100%" height="480" src="https://www.youtube.com/embed/5JM1Dt2V76Q?autoplay=1" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
        </div>
        </div>
    </section>

    
   <section class="shop">
    <div class="container mb-5">
        <div class="text-center my-5">
            <h2>Shop with us!</h2>
        </div>
        <div class="row">
            <div class="col-md-4 mbtm-5">
                <img src="{{asset('assets/img/medicine.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-7 mbtm-5">
                <p>
                    Plants extract minerals from the Earth - by the way of dissolved Stones, through their roots to produce food. Humans and animals then eat these plants for nourishment by turning the minerals back to Stone (Our Bones). The bone is the source of the <b> Miracle of Healing </b> our body and our immune system is only as strong as our Bones.
                </p>
                <p>
                    Making certain changes to your lifestyle can easily help our immune system to be in top form.
                </p>
                <p>  
                    Our <b>Immune Booster</b> product provides you with just the right amount of nutrients required to help us fight off diseases and infections.
                </p>
                <p>
                   <b> The Immune Booster </b> several herbs such as Boneset Herbs, Horseradish Root, Echinacea Angustifolia Root, Yarrow Root, Fresh Spilanthee Herb, Elderberry, Horehound Herb, Goldenseal Root, Licorice Root, Peppermint Oil, Wild Cherry Bark, Fresh Osha Root, Andrographis Herb, Garlic, Cayenne Fruit, Olive Leaf and Onion into your diet. Small amounts of these 17 herbs combined in a diet has a synergistic effect 
                </p>
        
            </div>
            <div class="col-12 text-center mt-md-5">
                <div class="mb-4">
                
                    <b style="color: var(--secondary-color)">Get the immune booster!</b>
                
                </div>
                <div>
                    <a href="https://shop.doctorscharity.org">
                        <button class="africa-btn wider-btn">Visit our store</button>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>
   </section>


    <section class="africa">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('assets/img/boy.jpg')}}" alt="Africa the beautiful" class="img-fluid">
                </div>

                <div class="col-md-6">
                    <h2>
                        Africa the Beautiful
                    </h2>
                    <div class="africa-body">
                        <p>Africa is faced with numerous challenges. Some of these challenges manifest themselves in
                            various ways including, but not limited to, hunger, poverty, poor infrastructural
                            development, lack of basic amenities, corruption, and tribal wars. The aforementioned,
                            together with the dearth of skilled healthcare workers (which has been worsened over the
                            years by severe brain drain from Africa to the Western world), are responsible for the poor
                            health indices in Africa as evidenced by the alarming rates of preventable deaths and
                            disabilities all over the continent. In spite of all this, our view of Africa remains
                            unchanged. It is that of a continent that is immensely blessed by nature with great climate,
                            abundant natural resources and beautiful scenery everywhere one goes. Most importantly,
                            Africa is blessed with brilliant, talented and hardworking people who are doing great things
                            all over the world. One of the major objectives of Doctors Charity is to bring together
                            Africa's rich human resources, both home and abroad, to unite in developing our motherland.
                        </p>
                    </div>
                    <div class="text-center__small">
                        <a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=drscharity%40gmail.com&item_name=Doctors+charity&currency_code=USD">
                            <button class="africa-btn uppercase">Make donation</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="img__telemedicine">
    </div>

    <section class="telemedicine">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mbtm-5">
                    <h2>Participate via Telemedicine</h2>
                    <div class="content">
                        <p>Doctors Charity uses information technology to connect qualified healthcare workers, who wish
                            to volunteer their time and skills to alleviate the health issues that plague the continent
                            of Africa, with the people who need such services. For these volunteers who are unable to
                            leave their jobs to travel for onsite medical intervention, Telemedicine offers the perfect
                            avenue for them to do so. Working with their free time and schedule, Doctors Charity can
                            schedule consultation appointments with them and patients in Africa, thereby efficiently
                            meeting the same goals.
                        </p>
                        <p> Ihotu Telemedicine Clinic in Nigeria is a major partner in this regard.</p>
                    </div>
                    <div class="text-center__small">
                    <a href="{{url('/contact')}}">
                            <button class="telemedicine-btn">Contact Us</button></a>

                    </div>
                </div>
                <div class="col-md-6 ">
                    <img src="{{asset('assets/img/home-telemedicine-img.jpg')}}" alt="Doctors Charity" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    @endsection