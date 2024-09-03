<!--=====HEADER START=======-->
<header>
    <div class="header-area header-area2 header-area-all d-none d-lg-block" id="header">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="header-elements">
              <div class="site-logo">
                <a href="index-2.html">
                 <img src="{{asset('assetsmain/img/logo/header-logo2.png')}}" alt="">
                </a>
              </div>


              <div class="main-menu-ex main-menu-ex1">
               <ul>
                 <li><a href="{{url('/')}}">Home <i class=""></i></a>
                 <li><a href="{{url('/about')}}">About <i class=""></i></a>
                 <li><a href="{{url('/contact')}}">Contact<i class=""></i></a>
                 <li><a href="{{url('/service')}}">Services<i class=""></i></a>
                 <li><a href="{{url('/posts')}}">Blog<i class=""></i></a>
                 <li><a href="{{url('/project')}}">Projects<i class=""></i></a>
                   {{-- <div class="tp-submenu">
                     <div class="row">
                        <div class="col-lg-12">
                         <div class="all-images-menu">
                           <div class="homemenu-thumb">
                             <div class="img1">
                             <img src="{{asset('assetsmain/img/demo/demo1.png')}}" alt="">
                             </div>
                              <div class="homemenu-btn">
                               <a class="header-btn1" href="index-2.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                               <div class="space16"></div>
                               <a class="header-btn1" href="single-index1.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                              <a href="index-2.html" class="bottom-heading">Home V1</a>
                           </div>
                        
                             <div class="homemenu-thumb">
                               <div class="img1">
                                 <img src="{{asset('assetsmain/img/demo/demo2.png')}}" alt="">
                               </div>
                               <div class="homemenu-btn">
                                 <a class="header-btn1" href="index2.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                                 <div class="space16"></div>
                                 <a class="header-btn1" href="single-index2.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>                             
                               </div>
                               <a href="index2.html" class="bottom-heading">Home V2</a>
                             </div>


                           <div class="homemenu-thumb">
                             <div class="img1">
                               <img src="{{asset('assetsmain/img/demo/demo3.png')}}" alt="">
                             </div>
                             <div class="homemenu-btn">
                               <a class="header-btn1" href="index3.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                               <div class="space16"></div>
                               <a class="header-btn1" href="single-index3.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>                           
                             </div>
                             <a href="index3.html" class="bottom-heading">Home V3</a>
                           </div>

                         <div class="homemenu-thumb" style="margin: 0;">
                           <div class="img1">
                             <img src="{{asset('assetsmain/img/demo/demo4.png')}}" alt="">
                           </div>
                           <div class="homemenu-btn">
                             <a class="header-btn1" href="index4.html">Multi Page <i class="fa-solid fa-arrow-right"></i></a>
                             <div class="space16"></div>
                             <a class="header-btn1" href="single-index4.html" target="_blank">One page <i class="fa-solid fa-arrow-right"></i></a>                       
                           </div>
                           <a href="index4.html" class="bottom-heading">Home V4</a>
                         </div>
                       </div>

                       <div class="space16"></div>
                       <div class="all-images-menu">
                         <div class="homemenu-thumb active">
                           <div class="img1">
                           <img src="{{asset('assetsmain/img/demo/demo5.png')}}" alt="">
                           <img src="{{asset('assetsmain/img/demo/cooming.png')}}" alt="" class="coming">
                           </div>
                            <a href="#" class="bottom-heading">Home V5</a>
                         </div>
                      
                           <div class="homemenu-thumb active">
                             <div class="img1">
                               <img src="{{asset('assetsmain/img/demo/demo6.png')}}" alt="">
                               <img src="{{asset('assetsmain/img/demo/cooming.png')}}" alt="" class="coming">
                             </div>
                             <a href="#" class="bottom-heading">Home V6</a>
                           </div>


                         <div class="homemenu-thumb active">
                           <div class="img1">
                             <img src="{{asset('assetsmain/img/demo/demo7.png')}}" alt="">
                             <img src="{{asset('assetsmain/img/demo/cooming.png')}}" alt="" class="coming">
                           </div>
                           <a href="#" class="bottom-heading">Home V7</a>
                         </div>

                       <div class="homemenu-thumb active" style="margin: 0;">
                         <div class="img1">
                           <img src="{{asset('assetsmain/img/demo/demo8.png')}}" alt="">
                           <img src="{{asset('assetsmain/img/demo/cooming.png')}}" alt="" class="coming">
                         </div>
                         <a href="#" class="bottom-heading">Home V8</a>
                       </div>
                     </div>

                     </div>
                   </div>
                  </div> --}}
                 </li>

                 {{-- <li class="dropdown-menu-parrent"><a href="#">About <i class="fa-solid fa-angle-down"></i></a>
                   <ul>
                    <li><a href="about.html">About - Light</a></li>
                    <li><a href="about2.html">About - Dark</a></li>
                   </ul>
                 </li> --}}

                 {{-- <li class="dropdown-menu-parrent"><a href="#">Service <i class="fa-solid fa-angle-down"></i></a>
                   <ul>
                    <li><a href="service.html">Service <i class="fa-solid fa-angle-right"></i></a>
                      <ul>
                        <li><a href="#">Light <i class="fa-solid fa-angle-right"></i></a>
                          <ul>
                            <li><a href="service.html">Service - Light</a></li>
                           </ul>
                          </li>
                          <li><a href="#">Dark <i class="fa-solid fa-angle-right"></i></a>
                            <ul>
                              <li><a href="service2.html">Service - Dark</a></li>
                             </ul>
                            </li>
                       </ul>
                      </li>
 
                      <li><a href="blog-details.html">Single Service <i class="fa-solid fa-angle-right"></i></a>
                        <ul>
                          <li><a href="#">Light <i class="fa-solid fa-angle-right"></i></a>
                            <ul>
                             <li><a href="service-details-left.html">Service Left - Light</a></li>
                             <li><a href="service-details-right.html">Service Right - Light</a></li>
                             <li><a href="service-details.html">Service Details - Light</a></li>
                             </ul>
                            </li>
                            <li><a href="#">Dark <i class="fa-solid fa-angle-right"></i></a>
                              <ul>
                               <li><a href="service-details-left2.html">Service Left - Dark</a></li>
                               <li><a href="service-details-right2.html">Service Right - Dark</a></li>
                               <li><a href="service-details2.html">Service Details - Dark</a></li>
                               </ul>
                              </li>
                         </ul>
                        </li>
 
                   </ul>
                 </li> --}}

                {{-- <li class="dropdown-menu-parrent"><a href="#" class="main1">Pages <i class="fa-solid fa-angle-down"></i></a>
                 <div class="mega-menu-all">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="mega-menu-single dis1">
                        <h3>Our Services</h3>
                        <ul>
                          <li><a href="service.html">Service</a></li>
                          <li><a href="service-details-left.html">Details Left</a></li>
                          <li><a href="service-details-right.html">Details Right</a></li>
                          <li><a href="service-details.html">Single Details</a></li>
                        </ul>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="mega-menu-single">
                        <h3>News Letter</h3>
                        <ul>
                          <li><a href="blog.html">Blog</a></li>
                          <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                          <li><a href="blog-details-left.html">Details Left</a></li>
                          <li><a href="blog-details-right.html">Details Right</a></li>
                          <li><a href="blog-details.html">Single Details</a></li>
                        </ul>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="mega-menu-single">
                        <h3>Page's</h3>
                        <ul>
                          <li><a href="about.html">About Us</a></li>
                          <li><a href="contact.html">Contact Us</a></li>
                          <li><a href="team.html">Our Team</a></li>
                          <li><a href="testimonial.html">Testimonial</a></li>
                          <li><a href="error.html">ERROR 404</a></li>

                        </ul>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="mega-menu-single">
                        <h3>Our Project's</h3>
                        <ul>
                          <li><a href="project.html">Project</a></li>
                          <li><a href="project-details-left.html">Details Left</a></li>
                          <li><a href="project-details-right.html">Details Right</a></li>
                          <li><a href="project-details.html">Single Details</a></li>
                        </ul>
                      </div>
                    </div>

                  </div>
                 </div>
               </li> --}}

                 {{-- <li class="dropdown-menu-parrent"><a href="#">Blog <i class="fa-solid fa-angle-down"></i></a>
                  <ul>
                   <li><a href="blog.html">Blog <i class="fa-solid fa-angle-right"></i></a>
                     <ul>
                       <li><a href="#">Light <i class="fa-solid fa-angle-right"></i></a>
                         <ul>
                           <li><a href="blog.html">Blog - Light</a></li>
                           <li><a href="blog-sidebar.html">Blog Sidebar - Light</a></li>
                          </ul>
                         </li>
                         <li><a href="#">Dark <i class="fa-solid fa-angle-right"></i></a>
                           <ul>
                             <li><a href="blog2.html">Blog - Dark</a></li>
                            </ul>
                           </li>
                      </ul>
                     </li>

                     <li><a href="blog-details.html">Single Blog <i class="fa-solid fa-angle-right"></i></a>
                       <ul>
                         <li><a href="#">Light <i class="fa-solid fa-angle-right"></i></a>
                           <ul>
                             <li><a href="blog-details-left.html">Details Left - Light</a></li>
                             <li><a href="blog-details-right.html">Details Right - Light</a></li>
                             <li><a href="blog-details.html">Blog Details - Light</a></li>
                            </ul>
                           </li>
                           <li><a href="#">Dark <i class="fa-solid fa-angle-right"></i></a>
                             <ul>
                               <li><a href="blog-details-left2.html">Details Left - Dark</a></li>
                               <li><a href="blog-details-right2.html">Details Right - Dark</a></li>
                               <li><a href="blog-details2.html">Blog Details - Dark</a></li>
                              </ul>
                             </li>
                        </ul>
                       </li>

                  </ul>
                </li> --}}

                {{-- <li class="dropdown-menu-parrent"><a href="#">Project <i class="fa-solid fa-angle-down"></i></a>
                 <ul>
                  <li><a href="project.html">Project <i class="fa-solid fa-angle-right"></i></a>
                    <ul>
                      <li><a href="#">Light <i class="fa-solid fa-angle-right"></i></a>
                        <ul>
                          <li><a href="project.html">Project - Light</a></li>
                         </ul>
                        </li>
                        <li><a href="#">Dark <i class="fa-solid fa-angle-right"></i></a>
                          <ul>
                            <li><a href="project2.html">Project - Dark</a></li>
                           </ul>
                          </li>
                     </ul>
                    </li>

                    <li><a href="blog-details.html">Single Project <i class="fa-solid fa-angle-right"></i></a>
                      <ul>
                        <li><a href="#">Light <i class="fa-solid fa-angle-right"></i></a>
                          <ul>
                           <li><a href="project-details-left.html">Project Left - Light</a></li>
                           <li><a href="project-details-right.html">Project Right - Light</a></li>
                           <li><a href="project-details.html">Project Details - Light</a></li>
                           </ul>
                          </li>
                          <li><a href="#">Dark <i class="fa-solid fa-angle-right"></i></a>
                            <ul>
                             <li><a href="project-details-left2.html">Project Left - Dark</a></li>
                             <li><a href="project-details-right2.html">Project Right - Dark</a></li>
                             <li><a href="project-details2.html">Project Details - Dark</a></li>
                             </ul>
                            </li>
                       </ul>
                      </li>

                 </ul>
               </li>

                   
               </ul> --}}
              </div>



              <div class="header2-buttons">
               <div class="contact-3 d-lg-block d-none">
                   <div class="consulting2">
                         <div class="search-icon header__search header-search-btn">
                           <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                         </div> 
                     </div>
                   </div>

                   <!-- header search start -->
                       <div class="header-search-form-wrapper">
                           <div class="tx-search-close tx-close"><i class="fa-solid fa-xmark"></i></div>
                           <div class="header-search-container">
                               <form role="search" class="search-form">
                               <input type="search"  class="search-field" placeholder="Search …" value="" name="s">
                               <button type="submit" class="search-submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                               </form>
                           </div>
                       </div>
                       <!-- header search end -->
                       <div class="body-overlay"></div>
                       <!-- slide bar end -->


                   <div class="button">
                     <a class="theme-btn2" href="{{url('/login')}}">Login<span><i class="fa-solid fa-arrow-right"></i></span></a>
                   </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--=====HEADER END=======-->
  <!--=====Mobile header start=======-->
  <div class="mobile-header mobile-header-main d-block d-lg-none ">
    <div class="container-fluid">
      <div class="col-12">
        <div class="mobile-header-elements">
          <div class="mobile-logo">
            <a href="index1.html"><img src="{{asset('assetsmain/img/logo/header-logo2.png')}}" alt=""></a>
          </div>
          <div class="mobile-nav-icon">
            <i class="fa-duotone fa-bars-staggered"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="mobile-sidebar d-block d-lg-none">
    <div class="logo-m">
      <a href="index-2.html"><img src="{{asset('assetsmain/img/logo/header-logo2.png')}}" alt=""></a>
    </div>
    <div class="menu-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="mobile-nav">

      <ul>
        <li class="has-dropdown"><a href="{{url('/')}}">Home </a> 
          {{-- <ul class="sub-menu">
            <li  class="has-dropdown has-dropdown1"><a href="#">Multipage</a>
              <ul class="sub-menu">
                <li><a href="index-2.html">Home 1</a></li>
                <li><a href="index2.html">Home 2</a></li>
                <li><a href="index3.html">Home 3</a></li>
                <li><a href="index4.html">Home 4</a></li>
              </ul>
            </li>
            <li  class="has-dropdown has-dropdown1"><a href="#">Landing Page</a>
              <ul class="sub-menu">
                <li><a href="single-index1.html">Home 1</a></li>
                <li><a href="single-index2.html">Home 2</a></li>
                <li><a href="single-index3.html">Home 3</a></li>
                <li><a href="single-index4.html">Home 4 </a></li>
              </ul>
            </li>
          </ul> --}}
      </li>
      <li><a href="{{url('/about')}}">About Us</a></li>
      <li><a href="{{url('/service')}}">Services</a></li>
      <li><a href="{{url('/conact')}}">contact</a></li>
      <li><a href="{{url('/project')}}">Projects</a></li>
      {{-- <li class="has-dropdown"><a href="#">Service</a> 
        <ul class="sub-menu">
            <li><a href="service.html">Service</a></li>
            <li><a href="service-details-left.html">Service Left</a></li>
            <li><a href="service-details-right.html">Service Right</a></li>
            <li><a href="service-details.html">Service Details</a></li>
        </ul>
    </li> --}}

    {{-- <li class="has-dropdown"><a href="#">Pages</a> 
      <ul class="sub-menu">
        <li><a href="contact.html">Contact</a></li>
        <li><a href="team.html">Team</a></li>
        <li><a href="testimonial.html">Testimonial</a></li>
        <li><a href="error.html">404</a></li>
      </ul>
  </li> --}}

        {{-- <li class="has-dropdown"><a href="#">Blog</a> 
          <ul class="sub-menu">
            <li><a href="blog.html">Blog</a></li>
            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                  <li><a href="blog-details-left.html">Details Left</a></li>
                  <li><a href="blog-details-right.html">Details Right</a></li>
                  <li><a href="blog-details.html">Blog Details</a></li>
          </ul>
      </li> --}}

      {{-- <li class="has-dropdown"><a href="#">Project</a> 
        <ul class="sub-menu">
          <li><a href="project.html">Project</a></li>
          <li><a href="project-details-left.html">Project Left</a></li>
          <li><a href="project-details-right.html">Project Right</a></li>
          <li><a href="project-details.html">Project Details</a></li>
        </ul>
    </li> --}}

      </ul>
      
      <div class="mobile-button">
        <a class="theme-btn2" href="service.html">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
      </div>

      <div class="single-footer-items">
        <h3>Contact Us</h3>

        <div class="contact-box">
          <div class="icon">
            <img src="{{asset('assetsmain/img/icons/footer1-icon1.png')}}" alt="">
          </div>
          <div class="pera">
            <a href="tel:0500222333">+2348026931519</a>
          </div>
        </div>

        <div class="contact-box">
          <div class="icon">
            <img src="{{asset('assetsmain/img/icons/footer1-icon2.png')}}" alt="">
          </div>
          <div class="pera">
            <a href="tel:0356588547">+2347032446095</a>
          </div>
        </div>

        <div class="contact-box">
          <div class="icon">
            <img src="{{asset('assetsmain/img/icons/footer1-icon3.png')}}" alt="">
          </div>
          <div class="pera">
            <a href="mailto:admin@techxen.org">admin@systech.com.ng</a>
          </div>
        </div>

        <div class="contact-box">
          <div class="icon">
            <img src="{{asset('assetsmain/img/icons/footer1-icon4.png')}}" alt="">
          </div>
          <div class="pera">
            <a href="mailto:admin@techxen.org">www.systech.com.ng</a>
          </div>
        </div>

   </div>

      <div class="contact-infos">
        <h3>Our Location</h3>
        <ul class="social-icon">
          <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
     </ul>
      </div>

    </div>
  </div>

  <!--=====Mobile header end=======-->
