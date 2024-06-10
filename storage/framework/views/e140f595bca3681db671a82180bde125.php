<!DOCTYPE html>

<html>

<head>

   <!-- Basic -->

   <meta charset="utf-8" />

   <meta http-equiv="X-UA-Compatible" content="IE=edge" />

   <!-- Mobile Metas -->

   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

   <!-- Site Metas -->

   <meta name="keywords" content="" />

   <meta name="description" content="" />

   <meta name="author" content="" />

   <link rel="shortcut icon" href="<?php echo e(asset('assets/images/battery.png')); ?>" type="">

   <title>Battery</title>

   <!-- bootstrap core css -->

   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>" />

   <!-- font awesome style -->

   <link href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>" rel="stylesheet" />

   <!-- Custom styles for this template -->

   <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet" />

   <!-- responsive style -->

   <link href="<?php echo e(asset('assets/css/responsive.css')); ?>" rel="stylesheet" />

</head>

<body>

   <div class="hero_area">

      <!-- header section strats -->

      <header class="header_section">

         <div class="container">

            <nav class="navbar navbar-expand-lg custom_nav-container ">

               <a class="navbar-brand" href="<?php echo e(url('dashboard')); ?>"><img width="250" src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="#" /></a>

               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                  <span class=""> </span>

               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">

                  <ul class="navbar-nav">

                     <li class="nav-item active">

                        <a class="nav-link" href="<?php echo e(url('')); ?>">Home <span class="sr-only">(current)</span></a>

                     </li>

                     <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Products<span class="caret"></span></a>

                        <ul class="dropdown-menu">

                           <li><a href="<?php echo e(url('dashboard/agm')); ?>">AGM VRLA Batteries</a></li>

                           <li><a href="<?php echo e(url('dashboard/tub')); ?>">Tubular Gel Batteries</a></li>

                        </ul>

                     </li>

                     <li class="nav-item">

                        <a class="nav-link" href="<?php echo e(url('dashboard/about')); ?>">About us</a>

                     </li>



                     <li class="nav-item">

                        <a class="nav-link" href="<?php echo e(url('dashboard/support')); ?>">support</a>

                     </li>



                     <li class="nav-item">

                        <a class="nav-link" href="<?php echo e(url('dashboard/enquiry')); ?>">Contact us</a>

                     </li>



                  </ul>

               </div>

            </nav>

         </div>

      </header>

      <!-- end header section -->

      <div class="content-wrapper">



         <?php echo $__env->yieldContent('content'); ?>

      </div>



      <!-- footer start -->

      <footer>

         <div class="container">

            <div class="row">

               <div class="col-md-6 col-lg-4">

                  <div class="full">

                     <div class="logo_footer">

                        <a href="#"><img width="210" src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="#" /></a>

                     </div>

                     <div class="information_f">

                        <p><strong>ADDRESS:</strong> PECON DISTRIBUTOR S PVT LTD SURVEY NO. 373/01,GRAM RAJODA TEHSIL SANWER, NEAR RAMA PHASPHORATE INDORE, MADHYA PRADESH</p>

                        <p><strong>TELEPHONE:</strong> +91 8815546646</p>

                        <p><strong>EMAIL:</strong> peconpower56@gmail.com</p>

                     </div>

                  </div>

               </div>


                     <div class="col-md-6 col-lg-2">

                        <div class="widget_menu">

                           <h3>Company</h3>

                           <ul>

                              <li><a href="<?php echo e(url('dashboard')); ?>">Home</a></li>

                              <li><a href="<?php echo e(url('dashboard/about')); ?>">About us</a></li>



                              <li><a href="<?php echo e(url('dashboard/support')); ?>">Support</a></li>

                           </ul>

                        </div>

                     </div>

                     <div class="col-md-6 col-lg-2">

                        <div class="widget_menu">

                           <h3>Information</h3>

                           <ul>



                              <li><a href="<?php echo e(url('dashboard/enquiry')); ?>">Contact us</a></li>

                           </ul>

                        </div>

                     </div>


                     <div class="col-md-6 col-lg-4">

                        <div class="widget_menu">

                           <h3>Newsletter</h3>

                           <div class="information_f">

                              <p>Subscribe by our newsletter and get update protidin.</p>

                           </div>

                           <div class="form_sub">

                              <form>

                                 <fieldset>

                                    <div class="field">

                                       <input type="email" placeholder="Enter Your Mail" name="email" />

                                       <input type="submit" value="Subscribe" />

                                    </div>

                                 </fieldset>

                              </form>

                           </div>

                        </div>

                     </div>


            </div>

         </div>

      </footer>

      <!-- footer end -->

      <div class="cpy_">

         <p class="mx-auto">Peconpower © All Rights Reserved - 2024<a href="https://html.design/"></a><br>



            <a href="https://themewagon.com/" target="_blank"></a>



         </p>

      </div>

      <!-- jQery -->

      <script src="<?php echo e(asset('assets/js/jquery-3.4.1.min.js')); ?>"></script>

      <!-- popper js -->

      <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>

      <!-- bootstrap js -->

      <script src="<?php echo e(asset('assets/js/bootstrap.js')); ?>"></script>

      <!-- custom js -->

      <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>

</body>

</html><?php /**PATH /home/delrgbsa/peconpower.in/resources/views/layouts/apps.blade.php ENDPATH**/ ?>