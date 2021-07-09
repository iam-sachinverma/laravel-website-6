@extends('layouts.front_layout.front_layout')
@section('content')

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">
  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-9 text-center">
        <h1>Get best car service in one click</h1>
        <h2 class="mb-4">We Offer Complete Car Care</h2>
      </div>
    </div>

    <div class="row justify-content-center mt-4">
      <div class="col-xl-7 col-lg-9 text-center">
        <form name="queryForm" id="queryForm" method="post" action="{{ url('/add-query') }}">@csrf
          <div class="row">
            <div class="col-md-6 form-group pr-md-1 mt-2">
              <input type="text" name="query_name" id="query_name" class="form-control" id="name" placeholder="Type Your Car Model" required>
            </div>
            <div class="col-md-6 form-group pl-md-1 mt-2">
              <input type="number" class="form-control" name="query_phone" id="query_phone" placeholder="Phone Number" required>
            </div>
          </div>
          <div class="text-center">
            <button class="btn-get-started scrollto" type="submit">Book Service</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= Why Us ======= -->
  <section id="whyUs" class="whyUs section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Services</h2>
        <p>Why GoMechanicx</p>
      </div>

      <div class="row icon-boxes">
        <div class="col-md-6 col-lg-3 mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><img src="{{ asset('images/front_images/c1.png') }}" alt=""></div>
            <h4 class="title"><a href="">Free Pick-Up & Drop from your Door</a></h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><img src="{{ asset('images/front_images/c2.png') }}" alt=""></div>
            <h4 class="title"><a href="">100% Genuine OEM/OES Spare</a></h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><img src="{{ asset('images/front_images/c3.png') }}" alt=""></div>
            <h4 class="title"><a href="">Upfront & Cost-Effective</a></h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><img src="{{ asset('images/front_images/c4.png') }}" alt=""></div>
            <h4 class="title"><a href="">Highly Equipped Workshop</a></h4>
          </div>
        </div>

      </div>

      <div class="row content">

        <div class="col-lg-6">
          <div class="section-title">
            <h2>Services Offered</h2>
          </div>
          <p>
            With GoMechanicx, you can choose from my side of car repair services in my city. A part from time to time car repair  service, we always offer to that
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Exterior and interior car care services</li>
            <li><i class="ri-check-double-line"></i> Denting and painting services</li>
            <li><i class="ri-check-double-line"></i> Wheel, Rim, and Alloy care</li>
            <li><i class="ri-check-double-line"></i> Quick car repair service</li>
          </ul>
        </div>

        <div class="col-lg-6">
          <div class="section-title">
            <h2>CNG Gas Kit Fitment Service Center</h2>
          </div>
          <p>
            Gomechanicx is the CNG GAS Kit Fitment Center in New Delhi at lowest Prices with Original Brands kit Spare Parts. We are only one of the most CNG GAS fittings Qualified and Expert Technician Approved CNG GAS Kits in all Brand & all Model of cars. 
            We can easily install:
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Sequentialy CNG Gas Kits</li>
            <li><i class="ri-check-double-line"></i> CNG Gas conversion kits</li>
            <li><i class="ri-check-double-line"></i> CNG Kits Spare Parts</li>
            <li><i class="ri-check-double-line"></i> CNG Cylinder & CNG Hydro Testing</li>
          </ul>
          <p>of all brands and all models include all types of Imported CNG Kit</p>
        </div>

      </div>

      <div class="row content">

        <div class="col-lg-6">
          <div class="section-title">
            <h2>Service at your convenience</h2>
          </div>
          <p>
            You get FREE check-up and pick-up and drop service any time available for your car repair service at near your location in city as per your selecting time slot is available. However, you can also take in your car for the car repair service at the nearest Gomechanicx workshop.
          </p>
        </div>

        <div class="col-lg-6">
          <div class="section-title">
            <h2>Multi-payment options</h2>
          </div>
          <p>
            We offer various payment modes at every GoMechanicx workshop in city
          </p>
        </div>

      </div>
   
    </div>
  </section><!-- Why uS -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts section-bg">
    <div class="container">

      <div class="row justify-content-end">

        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="2" class="purecounter"></span>
            <p>Happy Clients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="2" class="purecounter"></span>
            <p>Years of experience</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2" class="purecounter"></span>
            <p>Awards</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>what we offer</h2>
        <p>Our Services</p> 
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue">
            <div class="icon">
              <img src="{{ url('images/front_images/s1.png') }}" alt="">
            </div>
            <h4><a href="">Car Service</a></h4>
            <p>Affordable car repair service near at you All types of best car repair service center by experienced mechanics using genuine spare parts OEM parts & manufacturer recommending guidelines.</p>
          </div>
        </div>
   
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue">
            <div class="icon">
              <img src="{{ url('images/front_images/s2.png') }}" alt="">
            </div>
            <h4><a href="">Car Repair</a></h4>
            <p>Stearing rack, Brakes, Suspension, transmission, Scorer ,clutch or engine repair. Go mechanicx providing repair and services for any mechanical, electrical or technical issues of your car.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange ">
            <div class="icon">
              <img src="{{ url('images/front_images/s3.png') }}" alt="">
            </div>
            <h4><a href="">Car AC Repair & Service</a></h4>
            <p>Keeping your safe car’s air conditioning in a Good condition. Our Car Ac Repair Service packages includes to ac gas refill charge, blower cleaning repair and service, cooling coil cleaning and repair service , Condenser cleaning & repair Service much more.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-red">
            <div class="icon">
              <img src="{{ url('images/front_images/s4.png') }}" alt="">
            </div>
            <h4><a href="">Wheel Care</a></h4>
            <p>You need new tyres or wheel alignment and balancing and if any condition to not capable your car tyres so change it  we are providing everything. Increase the life of car's tyres with our wheel care Gomechanicx.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-red">
            <div class="icon">
              <img src="{{ url('images/front_images/s5.png') }}" alt="">
            </div>
            <h4><a href="">Denting and Painting</a></h4>
            <p>Don't worry about it car dents, Rubbing, Polishing & Scratches. Our car repair workshops are Highly recognised expert Technician with state of the art paint booths & One of the best classic tools for dent paint services.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-red">
            <div class="icon">
              <img src="{{ url('images/front_images/s6.png') }}" alt="">
            </div>
            <h4><a href="">Car Cleaning</a></h4>
            <p>Choose from any types of variety of car cleaning services such as a Car Washing, Dashboard Polishing, Vaccum cleaning, Rubbing, Polishing, Car Dry Clean & Teflon Coating, so your car is always shines that's my responsibility like brand new car.</p>
          </div>
        </div>



      </div>

    </div>
  </section><!-- End Sevices Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Clients</h2>
        <p>Our Clients</p> 
      </div>

      <div class="row">

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <img src="{{ asset('images/front_images/clients/client-1.png') }}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <img src="{{ asset('images/front_images/clients/client-2.png') }}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <img src="{{ asset('images/front_images/clients/client-3.png') }}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <img src="{{ asset('images/front_images/clients/client-4.png') }}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <img src="{{ asset('images/front_images/clients/client-5.png') }}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <img src="{{ asset('images/front_images/clients/client-6.png') }}" class="img-fluid" alt="">
        </div>

      </div>

    </div>
  </section><!-- End Clients Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>what they say about us</h2>
        <p>Reviews</p>
      </div>

      <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                They were really helpful and completed my car full servicing in less than 90 minutes
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{ asset('images/front_images/testimonials/man.png') }}" class="testimonial-img" alt="">
              <h3>Sachin Verma</h3>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                I was amazed at their work quality and also I got a free car wash for my car 
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{ asset('images/front_images/testimonials/man.png') }}" class="testimonial-img" alt="">
              <h3>Sumit Rawat</h3>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                A friend told me about GoMechanicx, thought to give it a try for service of my eco sport.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{ asset('images/front_images/testimonials/man.png') }}" class="testimonial-img" alt="">
              <h3>Vishal Thakur</h3>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Their service quality is amazing, my car was serviced in Rs 3000 only, Great work GoMechanicx
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{ asset('images/front_images/testimonials/man.png') }}" class="testimonial-img" alt="">
              <h3>Ajay Nagar</h3>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                My swift had some scratches on front bumper surprisingly GoMechanicx repaired my car in just Rs 1500
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{ asset('images/front_images/testimonials/man.png') }}" class="testimonial-img" alt="">
              <h3>Mohit Kashyap</h3>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

   <!-- ======= Pricing Section ======= -->
   <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Price Chart</h2>
        <p>Pricing</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <h3>Car Brand</h3>
            <ul>
              <li>Maruti Suzuki</li>
              <li>Hyundai</li>
              <li>Honda</li>
              <li>Mahindra</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Book Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="box">
            <h3>Local Mechanic</h3>
            <ul>
              <li class="na">₹ 2600</li>
              <li class="na">₹ 2600</li>
              <li class="na">₹ 2499</li>
              <li class="na">₹ 3599</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Book Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <h3>Authorized Service Center</h3>
            <ul>
              <li class="na">₹ 3408</li>
              <li class="na">₹ 3400</li>
              <li class="na">₹ 3799</li>
              <li class="na">₹ 5399</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Book Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box featured">
            <h3>GoMechanicx</h3>
            <ul>
              <li>₹ 2299</li>
              <li>₹ 2299</li>
              <li>₹ 2499</li>
              <li>₹ 2499</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Book Now</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Pricing Section -->

 
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>How to Reach Us</h2>
        <p>Contact</p>
      </div>

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>14/22 Nangli Sakrawati, 
                Near Nangli metro station, Industrial Area<br>
                Delhi 110043</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p><a href="tel:09310783727"> 09310783727<br></a></p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection  