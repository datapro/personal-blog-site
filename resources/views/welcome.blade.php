@extends('layouts.main')

@section('content')

      <!--=====HERO AREA START=======-->

      <div class="hero2">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="main-heading">
                  <span class="span" data-aos="zoom-in-right" data-aos-duration="700"><img src="{{asset('assetsmain/img/icons/span2.png')}}" alt=""> TechXen Technology & It Solution</span>
                  <h1 class="title tg-element-title">Empowering Your Digital Journey With TechXen</h1>
              </div>

              <div class="row _relative">
                  <div class="col-lg-9">
                      <div class="hero2-tags">
                          <ul>
                              <li><a href="#">Software Development</a></li>
                              <li><a href="#">Cloud Solution</a></li>
                              <li class="active"><a href="#">It Solution</a></li>
                              <li><a href="#">Data Analytics</a></li>
                              <li><a href="#">Technology</a></li>
                              <li><a href="#">Cyber Security</a></li>
                              <li><a href="#">Consulting Services</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="circle-shapes">
                          <div class="shape1 shape-animaiton4">
                              <img src="{{asset('assetsmain/img/shapes/hero2-shape1.png')}}" alt="">
                          </div>
                          <div class="shape2">
                              <a href="service.html"><img src="{{asset('assetsmain/img/shapes/hero2-shape2.png')}}" alt=""></a>
                          </div>
                      </div>
                  </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="hero2-main-imges">
                  <div class="image1">
                      <img src="{{asset('assetsmain/img/hero/hero2-main-img1.png')}}" alt="">
                  </div>
              </div>
            </div>

          </div>
        </div>

        <div class="hero2-main-imge2">
          <img src="{{asset('assetsmain/img/hero/hero2-main-img2.png')}}" alt="">
        </div>
      </div>

      <!--=====HERO AREA END=======-->

      <!--=====ABOUT AREA START =======-->

      <div class="about2">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="about2-images">
                <div class="image1" data-aos="zoom-in-right" data-aos-duration="800">
                  <img src="{{asset('assetsmain/img/about/about2-img1.png')}}" alt="">
                </div>
                <div class="image2 reveal image-anime">
                  <img src="{{asset('assetsmain/img/about/about2-img2.png')}}" alt="">
                </div>
                <div class="image3" data-aos="zoom-in-left" data-aos-duration="900">
                  <img src="{{asset('assetsmain/img/about/about2-img3.png')}}" alt="">
                </div>
                <div class="counter-box" data-aos="flip-left" data-aos-duration="700">
                  <h3>25</h3>
                  <p>Years Of <br> Experience</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="heading2">
                <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="{{asset('assetsmain/img/icons/span2.png')}}" alt=""> Our Service</span>
                <h2 class="title tg-element-title">Empower Your Business With Our Comprehensive IT Solutions</h2>
                <div class="space16"></div>
                <p data-aos="fade-up-left" data-aos-duration="700">Welcome to TechXen, your premier destination for cutting-edge technology solutions and IT services. At TechXen, we are passionate about harnessing the power of technology to empower businesses a like.</p>

                <div class="space10"></div>

                <div class="porgress-line-all" data-aos="fade-up-left" data-aos-duration="900">
                  <div class="progress-line">
                    <h6>IT Consulting</h6>
                    <div id="progress1" data-init="true"></div>
                  </div>
                  <div class="progress-line">
                    <h6>Cyber Security</h6>
                    <div id="progress2" data-init="true"></div>
                  </div>
                </div>

                <div class="space30"></div>
                <div class="button" data-aos="fade-up-left" data-aos-duration="800">
                  <a class="theme-btn2" href="about.html">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!--=====ABOUT AREA END=======-->

      <!--=====SERVICE AREA START=======-->

      <div class="servcie2 pt100">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 m-auto text-center">
              <div class="heading2">
                <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="{{asset('assetsmain/img/icons/span2.png')}}" alt=""> Our Service</span>
                <h2 class="title tg-element-title">Empower Your Business with Our Comprehensive IT Solutions</h2>
              </div>
            </div>
          </div>

          <div class="space30"></div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="" data-aos="zoom-in-up" data-aos-duration="700">
                <div class="servcie2-box">
                  <div class="icon">
                    <img src="{{asset('assetsmain/img/icons/service2-icon1.png')}}" alt="">
                  </div>
                  <a href="service-details.html" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                  <div class="heading2">
                    <h4><a href="service-details.html">Consulting Service</a></h4>
                    <div class="space16"></div>
                    <p>Strategic IT planning  roadmap development Business process analysis and improvement for It solution & technology.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="" data-aos="zoom-in-up" data-aos-duration="900">
                <div class="servcie2-box active">
                  <div class="icon">
                    <img src="{{asset('assetsmain/img/icons/service2-icon2.png')}}" alt="">
                  </div>
                  <a href="service-details.html" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                  <div class="heading2">
                    <h4><a href="service-details.html">Software Development</a></h4>
                    <div class="space16"></div>
                    <p>Mobile app development for iOS, Android, and cross-platform solutions & web <br> application.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="" data-aos="zoom-in-up" data-aos-duration="600">
                <div class="servcie2-box">
                  <div class="icon">
                    <img src="{{asset('assetsmain/img/icons/service2-icon3.png')}}" alt="">
                  </div>
                  <a href="service-details.html" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                  <div class="heading2">
                    <h4><a href="service-details.html">Cloud Solution</a></h4>
                    <div class="space16"></div>
                    <p>Infrastructure as a Service (IaaS), Platform as a Service (PaaS),  and Software as a Service <br> (SaaS)</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="" data-aos="zoom-in-up" data-aos-duration="900">
                <div class="servcie2-box">
                  <div class="icon">
                    <img src="{{asset('assetsmain/img/icons/service2-icon4.png')}}" alt="">
                  </div>
                  <a href="service-details.html" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                  <div class="heading2">
                    <h4><a href="service-details.html">Cyber Security</a></h4>
                    <div class="space16"></div>
                    <p>Threat assessment and vulnerability analysis. Security strategy development and implementation</p>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-4 col-md-6">
              <div class="" data-aos="zoom-in-up" data-aos-duration="1100">
                <div class="servcie2-box">
                  <div class="icon">
                    <img src="{{asset('assetsmain/img/icons/service2-icon5.png')}}" alt="">
                  </div>
                  <a href="service-details.html" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                  <div class="heading2">
                    <h4><a href="service-details.html">Data Analytics</a></h4>
                    <div class="space16"></div>
                    <p>Data visualization and business intelligence solutions Predictive analytics and machine <br> learning </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="" data-aos="zoom-in-up" data-aos-duration="700">
                <div class="servcie2-box">
                  <div class="icon">
                    <img src="{{asset('assetsmain/img/icons/service2-icon6.png')}}" alt="">
                  </div>
                  <a href="service-details.html" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                  <div class="heading2">
                    <h4><a href="service-details.html">Manage It Services</a></h4>
                    <div class="space16"></div>
                    <p>Proactive IT monitoring and management Network infrastructure setup and <br> maintenance</p>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="space40"></div>
          <div class="row">
            <div class="col-lg-12 text-center" data-aos="zoom-in-up" data-aos-duration="700">
              <a class="theme-btn2" href="service.html">View All Services <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>

        </div>
      </div>

      <!--=====SERVICE AREA END=======-->

      <!--=====SOLUTION AREA START=======-->

      <div class="solution pt100">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="heading2">
                <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="{{asset('assetsmain/img/icons/span2.png')}}" alt=""> Best It Solution</span>
                <h2 class="title tg-element-title">Let's Elevate Your Business With Strategic IT Solutions</h2>
                <div class="space16"></div>
                <p data-aos="fade-right" data-aos-duration="700">At TechXen, we understand that every business is unique, which is why we offer a range of flexible IT solutions designed to address your specific challenges and goals.</p>

                <div class="item-box" data-aos="fade-right" data-aos-duration="900">
                  <div class="icon">
                    <div class="">
                      <img src="{{asset('assetsmain/img/icons/solution-iocn1.png')}}" alt="">
                    </div>
                  </div>
                  <div class="">
                    <h3><a href="#">Network Infrastructure Solutions</a></h3>
                    <div class="space10"></div>
                    <p>Build a reliable and secure network infrastructure that <br> supports your business operations enables seamless</p>
                  </div>
                </div>

                <div class="item-box" data-aos="fade-right" data-aos-duration="1100">
                  <div class="icon">
                    <div class="">
                      <img src="{{asset('assetsmain/img/icons/solution-iocn2.png')}}" alt="">
                    </div>
                  </div>
                  <div class="">
                    <h3><a href="#">Managed It Services</a></h3>
                    <div class="space10"></div>
                    <p>Focus on your core business activities while we take <br> care of your IT needs with our managed IT services.</p>
                  </div>
                </div>

                <div class="space30"></div>
                <div class="" data-aos="fade-right" data-aos-duration="800">
                  <a class="theme-btn2" href="service.html">Discover More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="solution-images">
                <div class="image1" data-aos="fade-down-right" data-aos-duration="700">
                  <img src="{{asset('assetsmain/img/others/solution-img1.png')}}" alt="">
                </div>
                <div class="image2 reveal">
                  <img src="{{asset('assetsmain/img/others/solution-img2.png')}}" alt="">
                </div>
                <div class="image3" data-aos="fade-down-left" data-aos-duration="700">
                  <img src="{{asset('assetsmain/img/others/solution-img3.png')}}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--=====SOLUTION AREA END=======-->
      
      <!--=====WORK AREA START=======-->

      <div class="work2 pt100">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 m-auto text-center">
              <div class="heading2">
                <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="{{asset('assetsmain/img/icons/span2.png')}}" alt=""> How It Works</span>
                <h2 class="title tg-element-title">Unlocking Success The Path To Seamless Solutions</h2>
              </div>
            </div>
          </div>

          <div class="space30"></div>
          <div class="row">
            <div class="col-lg-7">
              <div class="work2-box" data-aos="zoom-in-up" data-aos-duration="700">
                <div class="image image-anime">
                  <img src="{{asset('assetsmain/img/work/work2-img1.png')}}" alt="">
                </div>
                <div class="space20"></div>
                <div class="heading2">
                  <h4><a href="service-details.html">Discovery & Consultation</a></h4>
                  <div class="space10"></div>
                  <p>The journey begins with a thorough discovery phase where we take the time to understand your business, goals, and challenges. Our experienced team will work closely with you to assess your needs and objectives.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-5">
              <div class="work2-box" data-aos="zoom-in-up" data-aos-duration="900">
                <div class="image image-anime">
                  <img src="{{asset('assetsmain/img/work/work2-img2.png')}}" alt="">
                </div>
                <div class="space20"></div>
                <div class="heading2">
                  <h4><a href="service-details.html">Custom Solution Design</a></h4>
                  <div class="space10"></div>
                  <p>Once we have a clear understanding of your requirements, our expert team will design a custom solution tailored to your specific needs. </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="work2-box" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="image image-anime">
                  <img src="{{asset('assetsmain/img/work/work2-img3.png')}}" alt="">
                </div>
                <div class="space20"></div>
                <div class="heading2">
                  <h4><a href="service-details.html">Implementation & Integration</a></h4>
                  <div class="space10"></div>
                  <p>With the solution blueprint in hand, our team will begin the implementation and integration <br> process. </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="work2-box" data-aos="zoom-in-up" data-aos-duration="1200">
                <div class="image image-anime">
                  <img src="{{asset('assetsmain/img/work/work2-img4.png')}}" alt="">
                </div>
                <div class="space20"></div>
                <div class="heading2">
                  <h4><a href="service-details.html">Testing & Quality Assurance</a></h4>
                  <div class="space10"></div>
                  <p>Before deployment, we conduct rigorous testing and quality assurance checks to ensure that your solution meets.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="work2-box" data-aos="zoom-in-up" data-aos-duration="700">
                <div class="image image-anime">
                  <img src="{{asset('assetsmain/img/work/work2-img5.png')}}" alt="">
                </div>
                <div class="space20"></div>
                <div class="heading2">
                  <h4><a href="service-details.html">Deployment & Training</a></h4>
                  <div class="space10"></div>
                  <p>Once testing is complete and your solution is ready to go, we'll handle the deployment process with precision and care.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!--=====WORK AREA END=======-->

      <!--=====TEAM AREA START=======-->

      {{-- <div class="team2 pt100">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 m-auto text-center">
              <div class="heading2">
                <span class="span"><img src="{{asset('assetsmain/img/icons/span2.png')}}" alt=""> Our Team</span>
                <h2 class="title tg-element-title">Meet With Our Expert Team</h2>
              </div>
            </div>
          </div>

          <div class="space30"></div>
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="team-box" data-aos="fade-up" data-aos-duration="700">
                <div class="image-area">
                  <div class="image image-anime">
                    <img src="{{asset('assetsmain/img/team/team2-img1.png')}}" alt="">
                  </div>
                  <div class="icon-area">
                    <ul>
                      <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                  </div>
                </div>

                <div class="space30"></div>
                  <div class="heading2">
                    <h4><a href="#">John Doe</a></h4>
                    <div class="space10"></div>
                    <p>CEO & Founder</p>
                  </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="team-box" data-aos="fade-up" data-aos-duration="1100">
                <div class="image-area">
                  <div class="image image-anime">
                    <img src="{{asset('assetsmain/img/team/team2-img2.png')}}" alt="">
                  </div>
                  <div class="icon-area">
                    <ul>
                      <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                  </div>
                </div>

                <div class="space30"></div>
                  <div class="heading2">
                    <h4><a href="#">Jane Smith</a></h4>
                    <div class="space10"></div>
                    <p>Chef Technology Officer</p>
                  </div>

              </div>
            </div>


            <div class="col-lg-3 col-md-6">
              <div class="team-box" data-aos="fade-up" data-aos-duration="900">
                <div class="image-area">
                  <div class="image image-anime">
                    <img src="{{asset('assetsmain/img/team/team2-img3.png')}}" alt="">
                  </div>
                  <div class="icon-area">
                    <ul>
                      <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                  </div>
                </div>

                <div class="space30"></div>
                  <div class="heading2">
                    <h4><a href="#">Sarah Thompson </a></h4>
                    <div class="space10"></div>
                    <p>Head of Project Management</p>
                  </div>

              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="team-box" data-aos="fade-up" data-aos-duration="700">
                <div class="image-area">
                  <div class="image image-anime">
                    <img src="{{asset('assetsmain/img/team/team2-img4.png')}}" alt="">
                  </div>
                  <div class="icon-area">
                    <ul>
                      <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                  </div>
                </div>

                <div class="space30"></div>
                  <div class="heading2">
                    <h4><a href="#">David Garcia</a></h4>
                    <div class="space10"></div>
                    <p>Lead Software Engineer</p>
                  </div>

              </div>
            </div>


          </div>

        </div>
      </div> --}}

      <!--=====TEAM AREA END=======-->

      <!--=====TESTIMONIAL AREA START=======-->

      <div class="testimonial2 pt100 pb40">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 m-auto text-center">
              <div class="heading2">
                <span class="span"><img src="{{asset('assetsmain/img/icons/span2.png')}}" alt=""> Testimonials</span>
                <h2 class="title tg-element-title">See What Our Customer Say’s</h2>
              </div>
            </div>
          </div>

          <div class="space60"></div>
          <div class="row">
            <div class="tes2-slider owl-carousel" data-aos="fade-up" data-aos-duration="700">
              <div class="single-slider">
                <div class="icon">
                  <img src="{{asset('assetsmain/img/icons/tes2-icon.png')}}" alt="">
                </div>
                <p class="pera">"I have been thoroughly impressed with the level of service and expertise provided by TechXen. Their team went above and beyond to understand our business needs and deliver a custom software solution. I highly recommend them to anyone looking for top-notch technology solutions."</p>

                <div class="bottom-area">
                  <div class="author">
                    <a href="#">Jason Behrendorff</a>
                  </div>
                  <div class="reating">
                    <ul>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star-half"></i></li>
                    </ul>
                    <p>(4.5)</p>
                  </div>
                </div>
              </div>

              <div class="single-slider">
                <div class="icon">
                  <img src="{{asset('assetsmain/img/icons/tes2-icon.png')}}" alt="">
                </div>
                <p class="pera">"We approached TechXen with a complex IT problem, and they were able to provide an innovative solution that addressed our needs perfectly. Their team's creativity, technical prowess, and dedication to client satisfaction are truly commendable.”</p>

                <div class="bottom-area">
                  <div class="author">
                    <a href="#">Matthew Kuhnemann</a>
                  </div>
                  <div class="reating">
                    <ul>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <p>(4.5)</p>
                  </div>
                </div>
              </div>


              <div class="single-slider">
                <div class="icon">
                  <img src="{{asset('assetsmain/img/icons/tes2-icon.png')}}" alt="">
                </div>
                <p class="pera">“TechXen has been our go-to partner for IT support for several years now, and they have consistently delivered outstanding service. Their team is highly responsive, knowledgeable, reliable. Thanks to their expertise, we've been able to overcome various IT challenges focus growing business."</p>

                <div class="bottom-area">
                  <div class="author">
                    <a href="#">Scott Boland</a>
                  </div>
                  <div class="reating">
                    <ul>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star-half"></i></li>
                    </ul>
                    <p>(4.5)</p>
                  </div>
                </div>
              </div>

              <div class="single-slider">
                <div class="icon">
                  <img src="{{asset('assetsmain/img/icons/tes2-icon.png')}}" alt="">
                </div>
                <p class="pera">"I have been thoroughly impressed with the level of service and expertise provided by TechXen. Their team went above and beyond to understand our business needs and deliver a custom software solution. I highly them to anyone looking for top-notch technology solutions."</p>

                <div class="bottom-area">
                  <div class="author">
                    <a href="#">Jason Behrendorff</a>
                  </div>
                  <div class="reating">
                    <ul>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star-half"></i></li>
                    </ul>
                    <p>(4.5)</p>
                  </div>
                </div>
              </div>

              <div class="single-slider">
                <div class="icon">
                  <img src="{{asset('assetsmain/img/icons/tes2-icon.png')}}" alt="">
                </div>
                <p class="pera">"We approached TechXen with a complex IT problem, and they were able to provide an innovative solution that addressed our needs perfectly. Their team's creativity, technical prowess, and dedication to client satisfaction are truly commendable.”</p>

                <div class="bottom-area">
                  <div class="author">
                    <a href="#">Matthew Kuhnemann</a>
                  </div>
                  <div class="reating">
                    <ul>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <p>(4.5)</p>
                  </div>
                </div>
              </div>


              <div class="single-slider">
                <div class="icon">
                  <img src="{{asset('assetsmain/img/icons/tes2-icon.png')}}" alt="">
                </div>
                <p class="pera">“TechXen has been our go-to partner for IT support for several years now, and they have consistently delivered outstanding service. Their team is highly responsive, knowledgeable, reliable. Thanks to their expertise, we've been able to overcome various IT challenges focus growing business."</p>

                <div class="bottom-area">
                  <div class="author">
                    <a href="#">Scott Boland</a>
                  </div>
                  <div class="reating">
                    <ul>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star"></i></li>
                      <li><i class="fa-solid fa-star-half"></i></li>
                    </ul>
                    <p>(4.5)</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!--=====TESTIMONIAL AREA END=======-->


      <div class="bottom-circle">
                <!--=====BLOG AREA START=======-->

      <div class="blog sp">
        <div class="container">
          <div class="row">
            <div class="ocl-lg-6 text-center m-auto">
              <div class="heading2">
                <span class="span"><img src="{{asset('assetsmain/img/icons/span2.png')}}" alt=""> Our Blog</span>
                <h2 class="title tg-element-title">See Our Latest Blog & News</h2>
              </div>
            </div>
          </div>

          <div class="space30"></div>
          <div class="row">
            <div class="col-lg-6">
              <div class="blog2-box" data-aos="zoom-in-up" data-aos-duration="800">
                <div class="image image-anime">
                  <img src="{{asset('assetsmain/img/blog/blog2-img2.png')}}" alt="">
                </div>
                <div class="heading2">
                  <div class="tags">
                    <a href="#" class="date"><img src="{{asset('assetsmain/img/icons/date.png')}}" alt=""> 10/02/2024</a>
                    <a href="#" class="date outhor"><img src="{{asset('assetsmain/img/icons/user.png')}}" alt=""> Ben Cutting</a>
                  </div>
                  <h4><a href="blog-details.html">The Importance of Cybersecurity</a></h4>
                  <div class="space16"></div>
                  <p>We explore the growing trend of remote work and its implications for cybersecurity.</p>
                  <div class="space16"></div>
                  <a href="blog-details.html" class="learn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="blog2-box" data-aos="zoom-in-up" data-aos-duration="1100">
                <div class="image image-anime">
                  <img src="{{asset('assetsmain/img/blog/blog2-img1.png')}}" alt="">
                </div>
                <div class="heading2">
                  <div class="tags">
                    <a href="#" class="date"><img src="{{asset('assetsmain/img/icons/date.png')}}" alt=""> 10/02/2024</a>
                    <a href="#" class="date outhor"><img src="{{asset('assetsmain/img/icons/user.png')}}" alt=""> Ben Cutting</a>
                  </div>
                  <h4><a href="blog-details.html">The Future of Cloud Computing</a></h4>
                  <div class="space16"></div>
                  <p>We take a deep dive into the future of cloud computing and discuss emerging trends and predictions that the industry.</p>
                  <div class="space16"></div>
                  <a href="blog-details.html" class="learn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!--=====BLOG AREA END=======-->

      <!--=====CTA AREA START=======-->

      <div class="cta2">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 m-auto text-center">
              <div class="heading2">
                <h2 class="title tg-element-title"> We're Committed To Businesses</h2>
                <div class="space16"></div>
                <p>At TechXen IT Solutions, we're dedicated to delivering innovative technology solutions tailored to meet the unique needs of businesses like yours. </p>

                <div class="row">
                  <div class="col-lg-8 m-auto">
                    <div class="subscribe-form">
                      <form action="#">
                        <input type="email" placeholder="Enter Your Email">
                        <div class="button">
                          <button type="submit" class="theme-btn2">Subscribe <span><i class="fa-solid fa-arrow-right"></i></span></button>
                        </div>
                      </form>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection




{{-- previous code --}}
{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/></svg>
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <main class="mt-6">
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                            <a
                                href="https://laravel.com/docs"
                                id="docs-card"
                                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                    <img
                                        src="https://laravel.com/assets/img/welcome/docs-light.svg"
                                        alt="Laravel documentation screenshot"
                                        class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden"
                                        onerror="
                                            document.getElementById('screenshot-container').classList.add('!hidden');
                                            document.getElementById('docs-card').classList.add('!row-span-1');
                                            document.getElementById('docs-card-content').classList.add('!flex-row');
                                            document.getElementById('background').classList.add('!hidden');
                                        "
                                    />
                                    <img
                                        src="https://laravel.com/assets/img/welcome/docs-dark.svg"
                                        alt="Laravel documentation screenshot"
                                        class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block"
                                    />
                                    <div
                                        class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900"
                                    ></div>
                                </div>

                                <div class="relative flex items-center gap-6 lg:items-end">
                                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                            <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path fill="#FF2D20" d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z"/><path fill="#FF2D20" d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z"/></svg>
                                        </div>

                                        <div class="pt-3 sm:pt-5 lg:pt-0">
                                            <h2 class="text-xl font-semibold text-black dark:text-white">Documentation</h2>

                                            <p class="mt-4 text-sm/relaxed">
                                                Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                            </p>
                                        </div>
                                    </div>

                                    <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                                </div>
                            </a>

                            <a
                                href="https://laracasts.com"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="#FF2D20"><path d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Laracasts</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                            </a>

                            <a
                                href="https://laravel-news.com"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="#FF2D20"><path d="M8.75 4.5H5.5c-.69 0-1.25.56-1.25 1.25v4.75c0 .69.56 1.25 1.25 1.25h3.25c.69 0 1.25-.56 1.25-1.25V5.75c0-.69-.56-1.25-1.25-1.25Z"/><path d="M24 10a3 3 0 0 0-3-3h-2V2.5a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2V20a3.5 3.5 0 0 0 3.5 3.5h17A3.5 3.5 0 0 0 24 20V10ZM3.5 21.5A1.5 1.5 0 0 1 2 20V3a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v17c0 .295.037.588.11.874a.5.5 0 0 1-.484.625L3.5 21.5ZM22 20a1.5 1.5 0 1 1-3 0V9.5a.5.5 0 0 1 .5-.5H21a1 1 0 0 1 1 1v10Z"/><path d="M12.751 6.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 7.3v-.5a.75.75 0 0 1 .751-.753ZM12.751 10.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 11.3v-.5a.75.75 0 0 1 .751-.753ZM4.751 14.047h10a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-10A.75.75 0 0 1 4 15.3v-.5a.75.75 0 0 1 .751-.753ZM4.75 18.047h7.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-7.5A.75.75 0 0 1 4 19.3v-.5a.75.75 0 0 1 .75-.753Z"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Laravel News</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                    </p>
                                </div>

                                <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
                            </a>

                            <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <g fill="#FF2D20">
                                            <path
                                                d="M16.597 12.635a.247.247 0 0 0-.08-.237 2.234 2.234 0 0 1-.769-1.68c.001-.195.03-.39.084-.578a.25.25 0 0 0-.09-.267 8.8 8.8 0 0 0-4.826-1.66.25.25 0 0 0-.268.181 2.5 2.5 0 0 1-2.4 1.824.045.045 0 0 0-.045.037 12.255 12.255 0 0 0-.093 3.86.251.251 0 0 0 .208.214c2.22.366 4.367 1.08 6.362 2.118a.252.252 0 0 0 .32-.079 10.09 10.09 0 0 0 1.597-3.733ZM13.616 17.968a.25.25 0 0 0-.063-.407A19.697 19.697 0 0 0 8.91 15.98a.25.25 0 0 0-.287.325c.151.455.334.898.548 1.328.437.827.981 1.594 1.619 2.28a.249.249 0 0 0 .32.044 29.13 29.13 0 0 0 2.506-1.99ZM6.303 14.105a.25.25 0 0 0 .265-.274 13.048 13.048 0 0 1 .205-4.045.062.062 0 0 0-.022-.07 2.5 2.5 0 0 1-.777-.982.25.25 0 0 0-.271-.149 11 11 0 0 0-5.6 2.815.255.255 0 0 0-.075.163c-.008.135-.02.27-.02.406.002.8.084 1.598.246 2.381a.25.25 0 0 0 .303.193 19.924 19.924 0 0 1 5.746-.438ZM9.228 20.914a.25.25 0 0 0 .1-.393 11.53 11.53 0 0 1-1.5-2.22 12.238 12.238 0 0 1-.91-2.465.248.248 0 0 0-.22-.187 18.876 18.876 0 0 0-5.69.33.249.249 0 0 0-.179.336c.838 2.142 2.272 4 4.132 5.353a.254.254 0 0 0 .15.048c1.41-.01 2.807-.282 4.117-.802ZM18.93 12.957l-.005-.008a.25.25 0 0 0-.268-.082 2.21 2.21 0 0 1-.41.081.25.25 0 0 0-.217.2c-.582 2.66-2.127 5.35-5.75 7.843a.248.248 0 0 0-.09.299.25.25 0 0 0 .065.091 28.703 28.703 0 0 0 2.662 2.12.246.246 0 0 0 .209.037c2.579-.701 4.85-2.242 6.456-4.378a.25.25 0 0 0 .048-.189 13.51 13.51 0 0 0-2.7-6.014ZM5.702 7.058a.254.254 0 0 0 .2-.165A2.488 2.488 0 0 1 7.98 5.245a.093.093 0 0 0 .078-.062 19.734 19.734 0 0 1 3.055-4.74.25.25 0 0 0-.21-.41 12.009 12.009 0 0 0-10.4 8.558.25.25 0 0 0 .373.281 12.912 12.912 0 0 1 4.826-1.814ZM10.773 22.052a.25.25 0 0 0-.28-.046c-.758.356-1.55.635-2.365.833a.25.25 0 0 0-.022.48c1.252.43 2.568.65 3.893.65.1 0 .2 0 .3-.008a.25.25 0 0 0 .147-.444c-.526-.424-1.1-.917-1.673-1.465ZM18.744 8.436a.249.249 0 0 0 .15.228 2.246 2.246 0 0 1 1.352 2.054c0 .337-.08.67-.23.972a.25.25 0 0 0 .042.28l.007.009a15.016 15.016 0 0 1 2.52 4.6.25.25 0 0 0 .37.132.25.25 0 0 0 .096-.114c.623-1.464.944-3.039.945-4.63a12.005 12.005 0 0 0-5.78-10.258.25.25 0 0 0-.373.274c.547 2.109.85 4.274.901 6.453ZM9.61 5.38a.25.25 0 0 0 .08.31c.34.24.616.561.8.935a.25.25 0 0 0 .3.127.631.631 0 0 1 .206-.034c2.054.078 4.036.772 5.69 1.991a.251.251 0 0 0 .267.024c.046-.024.093-.047.141-.067a.25.25 0 0 0 .151-.23A29.98 29.98 0 0 0 15.957.764a.25.25 0 0 0-.16-.164 11.924 11.924 0 0 0-2.21-.518.252.252 0 0 0-.215.076A22.456 22.456 0 0 0 9.61 5.38Z"
                                            />
                                        </g>
                                    </svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Vibrant Ecosystem</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white dark:focus-visible:ring-[#FF2D20]">Forge</a>, <a href="https://vapor.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Vapor</a>, <a href="https://nova.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Nova</a>, <a href="https://envoyer.io" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Envoyer</a>, and <a href="https://herd.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Herd</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Echo</a>, <a href="https://laravel.com/docs/horizon" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Telescope</a>, and more.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html> --}}