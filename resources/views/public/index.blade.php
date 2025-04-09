@extends('layouts.app')

@section('title', 'Accueil - Ser-Rapide')

@section('content')

    <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1 overlay" style="background-image: url('https://source.unsplash.com/pSyfecRCBQA/1920x780')">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-6">
                <h1>Choose Your Quality Delivery of Your Cargo</h1>
                <p class="mb-5">Handcrated with love by the fine folks at <a href="https://free-template.co/" target="_blank">Free-Template.co</a></p>
                <form action="#">
                <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Enter your tracking number">
                    <input type="submit" class="btn btn-primary text-white px-4" value="Track Now">
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- END .ftco-cover-1 -->
        <div class="ftco-service-image-1 pb-5">
        <div class="container">
            <div class="owl-carousel owl-all">
            <div class="service text-center">
                <a href="#"><img src="{{ asset('assets/images/cargo_sea_small.jpg') }}" alt="Image" class="img-fluid"></a>
                <div class="px-md-3">
                <h3><a href="#">Fret maritime</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                </div>
            </div>
            <div class="service text-center">
                <a href="#"><img src="{{ asset('assets/images/cargo_sea_small.jpg') }}" alt="Image" class="img-fluid"></a>
                <div class="px-md-3">
                <h3><a href="#">Fret aérien</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                </div>
            </div>
            <div class="service text-center">
                <a href="#"><img src="{{ asset('assets/images/cargo_sea_small.jpg') }}" alt="Image" class="img-fluid"></a>
                <div class="px-md-3">
                <h3><a href="#">Réexpédition de colis</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                </div>
            </div>
            </div>
        </div>
        </div>

    </div>

    <div class="site-section bg-light" id="services-section">
        <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
            <div class="block-heading-1">
                <h2>What We Offer</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            </div>
        </div>
        <div class="owl-carousel owl-all">
            <div class="block__35630">
            <div class="icon mb-0">
                <span class="flaticon-ferry"></span>
            </div>
            <h3 class="mb-3">Sea Freight</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
            </div>

            <div class="block__35630">
            <div class="icon mb-0">
                <span class="flaticon-airplane"></span>
            </div>
            <h3 class="mb-3">Air Freight</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
            </div>

            <div class="block__35630">
            <div class="icon mb-0">
                <span class="flaticon-box"></span>
            </div>
            <h3 class="mb-3">Package Forwarding</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
            </div>

            <div class="block__35630">
            <div class="icon mb-0">
                <span class="flaticon-lorry"></span>
            </div>
            <h3 class="mb-3">Trucking</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
            </div>

            <div class="block__35630">
            <div class="icon mb-0">
                <span class="flaticon-warehouse"></span>
            </div>
            <h3 class="mb-3">Warehouse</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
            </div>

            <div class="block__35630">
            <div class="icon mb-0">
                <span class="flaticon-add"></span>
            </div>
            <h3 class="mb-3">Delivery</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
            </div>

        </div>
        </div>
    </div>

    <div class="site-section" id="about-section">

        <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>About Us</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            </div>
        </div>
        </div>

    </div>

    <div class="site-section bg-light" id="about-section">
        <div class="container">
        <div class="row justify-content-center mb-4 block-img-video-1-wrap">
            <div class="col-md-12 mb-5">
            <figure class="block-img-video-1" data-aos="fade">
                <a href="https://vimeo.com/45830194" data-fancybox data-ratio="2">
                <span class="icon"><span class="icon-play"></span></span>
                <img src="images/cargo_delivery_big.jpg" alt="Image" class="img-fluid">
            </a>
            </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <div class="row">
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="">
                <div class="block-counter-1">
                    <span class="number"><span data-number="50">0</span>+</span>
                    <span class="caption">Years of Experience</span>
                </div>
                </div>
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="block-counter-1">
                    <span class="number"><span data-number="300">0</span>+</span>
                    <span class="caption">Companies</span>
                </div>
                </div>
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="block-counter-1">
                    <span class="number"><span data-number="108">0</span>+</span>
                    <span class="caption">Covered Countries</span>
                </div>
                </div>
                <div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="block-counter-1">
                    <span class="number"><span data-number="1500">0</span>+</span>
                    <span class="caption">Couriers</span>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="site-section" id="team-section">
        <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>Our Staff</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            </div>
        </div>

        <div class="owl-carousel owl-all">
            <div class="block-team-member-1 text-center rounded h-100">
            <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
            </figure>
            <h3 class="font-size-20 text-black">Max Carlson</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Co-Founder</span>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
            </div>

            <div class="block-team-member-1 text-center rounded h-100">
            <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
            </figure>
            <h3 class="font-size-20 text-black">Charlotte Pilat</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Co-Founder</span>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
            </div>

            <div class="block-team-member-1 text-center rounded h-100">
            <figure>
                <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle">
            </figure>
            <h3 class="font-size-20 text-black">Nicole Lewis</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Co-Founder</span>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
            </div>

            <div class="block-team-member-1 text-center rounded h-100">
            <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
            </figure>
            <h3 class="font-size-20 text-black">Jean Smith</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Financial Manager</span>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
            </div>

            <div class="block-team-member-1 text-center rounded h-100">
            <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
            </figure>
            <h3 class="font-size-20 text-black">Bob Carry</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Loader Manager</span>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
            </div>

            <div class="block-team-member-1 text-center rounded h-100">
            <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
            </figure>
            <h3 class="font-size-20 text-black">Anne Fisher</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Package Manager</span>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
            </div>
        </div>



        </div>
    </div>

    <div class="site-section bg-light" id="pricing-section">
        <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-md-7">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>Pricing</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="pricing">
                <h3 class="text-center text-black">Basic</h3>
                <div class="price text-center mb-4 ">
                <span><span>$47</span> / year</span>
                </div>
                <ul class="list-unstyled ul-check success mb-5">

                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li class="remove">Lorem ipsum dolor sit amet</li>
                <li class="remove">Consectetur adipisicing elit</li>
                <li class="remove">Dolorum esse odio quas architecto sint</li>
                </ul>
                <p class="text-center">
                <a href="#" class="btn btn-secondary btn-md">Buy Now</a>
                </p>
            </div>
            </div>

            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing">
                <h3 class="text-center text-black">Premium</h3>
                <div class="price text-center mb-4 ">
                <span><span>$200</span> / year</span>
                </div>
                <ul class="list-unstyled ul-check success mb-5">

                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li class="remove">Dolorum esse odio quas architecto sint</li>
                </ul>
                <p class="text-center">
                <a href="#" class="btn btn-primary btn-md text-white">Buy Now</a>
                </p>
            </div>
            </div>

            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing">
                <h3 class="text-center text-black">Professional</h3>
                <div class="price text-center mb-4 ">
                <span><span>$750</span> / year</span>
                </div>
                <ul class="list-unstyled ul-check success mb-5">

                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li>Dolorum esse odio quas architecto sint</li>
                </ul>
                <p class="text-center">
                <a href="#" class="btn btn-secondary btn-md">Buy Now</a>
                </p>
            </div>
            </div>
        </div>


        </div>
    </div>

    <div class="site-section" id="faq-section">
        <div class="container">
        <div class="row mb-5">
            <div class="block-heading-1 col-12 text-center">
            <h2>Frequently Ask Questions</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>Can I accept both Paypal and Stripe?</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>What available is refund period?</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>Can I accept both Paypal and Stripe?</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>What available is refund period?</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
            </div>
            <div class="col-lg-6">

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>Where are you from?</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>What is your opening time?</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>Can I accept both Paypal and Stripe?</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-black h4 mb-4"><span class="icon-question_answer text-primary mr-2"></span>What available is refund period?</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="block__73694 site-section border-top" id="why-us-section">
        <div class="container">
        <div class="row d-flex no-gutters align-items-stretch">

            <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url('images/cargo_sea_small.jpg');" data-aos="fade-left" data-aos-delay="">
            </div>



            <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
            <h2 class="mb-4 text-black">Why Us</h2>
            <h4 class="text-primary">We work quickly and efficiently!</h4>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

            <ul class="ul-check primary list-unstyled mt-5">
                <li>Cargo express</li>
                <li>Secure Services</li>
                <li>Secure Warehouseing</li>
                <li>Cost savings</li>
                <li>Proven by great companies</li>
            </ul>

            </div>

        </div>
        </div>
    </div>

    <div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
        <div class="container">

        <div class="text-center mb-5">
            <div class="block-heading-1">
            <h2>Happy Clients</h2>
            </div>
        </div>

        <div class="owl-carousel nonloop-block-13">
            <div>
            <div class="block-testimony-1 text-center">

                <blockquote class="mb-4">
                <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt
                    and made herself on the way.&rdquo;</p>
                </blockquote>

                <figure>
                <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">Ricky Fisher</h3>
            </div>
            </div>

            <div>
            <div class="block-testimony-1 text-center">
                <blockquote class="mb-4">
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                </blockquote>
                <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>

            </div>
            </div>

            <div>
            <div class="block-testimony-1 text-center">


                <blockquote class="mb-4">
                <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
                </blockquote>

                <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">Mellisa Griffin</h3>


            </div>
            </div>

            <div>
            <div class="block-testimony-1 text-center">
                <blockquote class="mb-4">
                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                </blockquote>

                <figure>
                <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>

            </div>
            </div>


        </div>

        </div>
    </div>

    <div class="site-section py-5" id="blog-section">
        <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="block-heading-1" data-aos="fade-right" data-aos-delay="">
                <h2>Articles</h2>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
            <div class="mb-5 d-flex blog-entry" data-aos="fade-right" data-aos-delay="">
                <a href="#" class="blog-thumbnail"><img src="images/cargo_sea_small.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
                <div class="blog-excerpt">
                <span class="d-block text-muted">Apr 19, 2019</span>
                <h2 class="h4  mb-3"><a href="press-single.html">Knowing the Difference Is Key to Effective Logistics</a></h2>

                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                <p><a href="single.html" class="text-primary">Read More</a></p>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="mb-5 d-flex blog-entry" data-aos="fade-right" data-aos-delay="">
                <a href="#" class="blog-thumbnail"><img src="images/cargo_air_small.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
                <div class="blog-excerpt">
                <span class="d-block text-muted">Apr 19, 2019</span>
                <h2 class="h4  mb-3"><a href="press-single.html">Knowing the Difference Is Key to Effective Logistics</a></h2>

                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                <p><a href="single.html" class="text-primary">Read More</a></p>
                </div>
            </div>
            </div>


        </div>
        </div>
    </div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
@endpush

@push('scripts')
@endpush
