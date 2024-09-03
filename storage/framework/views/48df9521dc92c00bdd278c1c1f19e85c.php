<!--=====HEADER START=======-->
<header>
    <div class="header-area header-area2 header-area-all d-none d-lg-block" id="header">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="header-elements">
              <div class="site-logo">
                <a href="index-2.html">
                 <img src="<?php echo e(asset('assetsmain/img/logo/header-logo2.png')); ?>" alt="">
                </a>
              </div>


              <div class="main-menu-ex main-menu-ex1">
               <ul>
                 <li><a href="<?php echo e(url('/')); ?>">Home <i class=""></i></a>
                 <li><a href="<?php echo e(url('/about')); ?>">About <i class=""></i></a>
                 <li><a href="<?php echo e(url('/contact')); ?>">Contact<i class=""></i></a>
                 <li><a href="<?php echo e(url('/service')); ?>">Services<i class=""></i></a>
                 <li><a href="<?php echo e(url('/posts')); ?>">Blog<i class=""></i></a>
                 <li><a href="<?php echo e(url('/project')); ?>">Projects<i class=""></i></a>
                   
                 </li>

                 

                 

                

                 

                
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
                     <a class="theme-btn2" href="<?php echo e(url('/login')); ?>">Login<span><i class="fa-solid fa-arrow-right"></i></span></a>
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
            <a href="index1.html"><img src="<?php echo e(asset('assetsmain/img/logo/header-logo2.png')); ?>" alt=""></a>
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
      <a href="index-2.html"><img src="<?php echo e(asset('assetsmain/img/logo/header-logo2.png')); ?>" alt=""></a>
    </div>
    <div class="menu-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="mobile-nav">

      <ul>
        <li class="has-dropdown"><a href="<?php echo e(url('/')); ?>">Home </a> 
          
      </li>
      <li><a href="<?php echo e(url('/about')); ?>">About Us</a></li>
      <li><a href="<?php echo e(url('/service')); ?>">Services</a></li>
      <li><a href="<?php echo e(url('/conact')); ?>">contact</a></li>
      <li><a href="<?php echo e(url('/project')); ?>">Projects</a></li>
      

    

        

      

      </ul>
      
      <div class="mobile-button">
        <a class="theme-btn2" href="service.html">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
      </div>

      <div class="single-footer-items">
        <h3>Contact Us</h3>

        <div class="contact-box">
          <div class="icon">
            <img src="<?php echo e(asset('assetsmain/img/icons/footer1-icon1.png')); ?>" alt="">
          </div>
          <div class="pera">
            <a href="tel:0500222333">+2348026931519</a>
          </div>
        </div>

        <div class="contact-box">
          <div class="icon">
            <img src="<?php echo e(asset('assetsmain/img/icons/footer1-icon2.png')); ?>" alt="">
          </div>
          <div class="pera">
            <a href="tel:0356588547">+2347032446095</a>
          </div>
        </div>

        <div class="contact-box">
          <div class="icon">
            <img src="<?php echo e(asset('assetsmain/img/icons/footer1-icon3.png')); ?>" alt="">
          </div>
          <div class="pera">
            <a href="mailto:admin@techxen.org">admin@systech.com.ng</a>
          </div>
        </div>

        <div class="contact-box">
          <div class="icon">
            <img src="<?php echo e(asset('assetsmain/img/icons/footer1-icon4.png')); ?>" alt="">
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
<?php /**PATH C:\xampp\htdocs\aiblog\blogsite\resources\views/includes/header.blade.php ENDPATH**/ ?>