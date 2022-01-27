<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>SayG AMS</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
     
      <link rel='shortcut icon' type='image/jpeg' href='{{ asset("public/admin/assets") }}/img/sayglogo.png' />
      <!-- CSS here -->
      <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/slicknav.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/flaticon.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/animate.min.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/magnific-popup.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/fontawesome-all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/themify-icons.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/slick.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/nice-select.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/slick.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/slick-theme.css') }}"/>
      <style>
          .row
          {
            padding-left: unset !important;
            padding-right: unset !important;
          }
         .col-lg-6 {
            padding-left: unset !important;
            padding-right: unset !important;
         }
         .w-100 {
         width: 100% !important;
         }
         .fa-camera {
         font-size: 35px;
         margin-bottom: 30px;
         color: #d55151;
         }
         .fa-life-ring {
         font-size: 35px;
         margin-bottom: 30px;
         color: #d55151;
         }
         .fa-key {
         font-size: 35px;
         margin-bottom: 30px;
         color: #d55151;
         }
         .fa-utensils {
         font-size: 35px;
         margin-bottom: 30px;
         color: #d55151;
         }
         .fa-heartbeat {
         font-size: 35px;
         margin-bottom: 30px;
         color: #d55151;
         }
         .fa-bed {
         font-size: 35px;
         margin-bottom: 30px;
         color: #d55151;
         }
         .popular-location img {
         height: 400px !important;
         }
         .pt-95 {
         padding-top: 95px;
         }
         .pt-6 {
         padding-top: 50px;
         }
         .section-padding30 {
         padding-top: 31px;
         }
         .section-tittle section-tittle2 mb-40"{
         font-size:20px;
         }

         .section-tittle text-center mb-80 {
         text-align: center;
         font-weight: 900;
         }
         .peoples-visit .single-visit.left-img::before {
         height: px;
         top: 200px;
         }
         .peoples-visit .visit-caption{
         padding: 0px 11px 48px 63px !important;
         }
         .peoples-visit .visit-caption p {
         text-align: justify;
         font-size: 18px;
         color: #3D3D3D !important;
         }
         .peoples-visit .visit-caption span {
         font-size: 37px;
         font-weight: 700;
         margin-bottom: 22px;
         color: #ff3d1c;
         display: inline-block;
         font-family: "Sacramento",cursive;
         }
         .testimonial-padding {
         padding-top: 1px;
         }
         .categories-area .single-cat {
         padding: 50px 32px 20px;
         height:80%;
         }
         .mb-70 {
         margin-bottom: 89px;
         }
         .peoples-visit .single-visit {
         position: relative;
         padding: 90px 40px 0;
         }
         #contactus span {
         font-size: 16px;
         font-family: sans-serif;
         color: #e2eee6;
         margin-bottom: 15px;
         }
         .socialmedia-icons {
         font-size: 22px;
         }
         .home-blog-area .single-team .team-caption h3 {
         padding-right: 48px;
         }
         .footer-area {
         padding-top: 60px;
         }
         .peoples-visit .single-visit.left-img::before {
         left: 6% !important;
         max-height: 730px;
         }
         ul.socialmedia-icons {
         list-style: none;
         width: 100%;
         }
         ul.socialmedia-icons li {
         list-style: none;
         display: inline;
         float: left;
         }
         #carouselExampleIndicators {
         padding-top: 70px;
         padding-right: 0px;
         padding-left: 0px;
         }
         .header-area .main-header .main-menu ul li a {
         color: #000;
         }
         .card-body {
         padding-bottom: 20px;
         }
         #offering {
         padding-top: 64px;
         }
         #category {
         padding-top: 50px;
         }
         #heading {
         font-style: "rubik";
         align-content: center;
         font-size: 30px;
         }
         .navigation {
         text-align: center;
         }
         .list{
            color: #3b97ba !important;
         }

         .orderedlist{
            line-height: 1.8;
            
         }

         .list:hover
         {
            text-decoration: underline;
         }

         .card-header
         {
            color:#f8f8ff !important;
         }
         .orderedlist li {
         list-style: none;
         color:#3D3D3D !important;
         }
         .socialmedia-icons {
         margin-right: 1em;
         }
         .header-area {
         border-bottom: unset !important;
         }
         .login {
         color: #4c4c4c;
         font-size: 19px;
         font-weight: 600;
         }
         .heading {
         font-family: "Sacramento", cursive;
         font-weight: 900;
         padding-top: 22px;
         color: #e2eee6;
         }
         body {
         background-color: #f8f8ff;
         }
         .header-bottom {
         background: #e8eebb !important;
         }
         .footer-area {
         background: #e8eebb !important;
         }
         .popular-location img {
         height: 295px !important;
         }
         .container-fluid {
         padding-left: 0px;
         padding-right: 0px;
         }
         .list{
         color: #000;
         }
         
         .categories-area .single-cat .cat-cap h5>a
         {
            color:#4c4c4c !important;
         }

         .categories-area .single-cat:hover .cat-cap h5 a {
            color: #fff !important;
         }

         .categories-area .single-cat:hover .cat-icon i {
            color: #fff !important;
         }

         @media (max-width: 480px) {
            table {
               table-layout: fixed;
               width: 100%;   
            }

            th,td {
               word-wrap: break-word;
            }
        }

         
               
         .home-blog-area .single-team .team-caption h3 a
         {
            color:#4c4c4c !important;
         }
         .check{
         margin-left: 30px;
         color: #000;
         }
         iframe{
         width: 100%;
         height: 317px !important ;
         margin-bottom: 50px;
         }
         #bedroom{
         margin-bottom: 50px;
         }
         @media (max-width: 575px){
         .peoples-visit .visit-caption {
         padding: 57px 30px 65px 30px !important;
         }
         }

         .carousel-item-div{
            position: relative;
         }

         #myCarousel img
         {
            height: 900px;
         }

         .carousel-item h1
         {
            position: absolute;
            bottom: 0;
            left: 50%;
            color: #fff !important;
            font-weight: 700;
            /* font-size: 24px; */
            font-family: cursive;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
         }

         #feedback {
         max-width: 100%;
         width: 100%;
         margin: 10px auto;
         padding: 20px;
         border: solid 1px #f1f1f1;
         background: #fbfbfb;
         box-shadow: #e6e6e6 0 0 4px ;
         border-radius: 0.25rem;
         }

         @media (max-width: 720px) {
         #feedback{
            max-width: 90%;
         }
         }

         @media (max-width: 500px) {
         #feedback{
            padding: 10px;
         }
         }

         #fh2{
         padding: 2px 15px;
         color: #ff3d1b;
         text-align: center; 
         
         
         }

         @media (max-width: 400px) {
         #fh2{
            font-size: 20px;
         }
         }


         #fh6 {
         padding: 2px 15px;
         color: #4d0er;
         text-align: center;
         font-weight: normal;
         }

         @media (max-width: 400px) {
         #fh6{
            font-size: 12px;
         }
         }

         .pinfo {
         margin: 8px auto;
         font-weight: bold;
         line-height: 1.5;
         color: #0d0d0d;
         }
         .form-group {
         margin-bottom: 1rem;
         }
         
         .form-control {
         display: block;
         width: 100%;
         padding: 0.5rem 0.75rem;
         font-size: 1rem;
         line-height: 1.25;
         font-weight: bold;
         color: #6C6262;
         background-color: #fff;
         background-image: none;
         -webkit-background-clip: padding-box;
                  background-clip: padding-box;
         border: 1px solid rgba(0, 0, 0, 0.15);
         border-radius: 0.25rem;
         -webkit-transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
         transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
         -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
         transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
         transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
         }

         .form-control::-ms-expand {
         background-color: transparent;
         border: 0;
         }

         .form-control:focus {
         color: #696060;
         background-color: #fff;
         border-color: #5cb3fd;
         outline: none;
         }

         .form-control::-webkit-input-placeholder {
         color: #F34949;
         opacity: 1;
         }

         .form-control::-moz-placeholder {
         color: brown;
         opacity: 1;
         }

         .form-control:-ms-input-placeholder {
         color: blue;
         opacity: 1;
         }

         .form-control::placeholder {
         color: white;
         opacity: 1;
         }

         .form-control:disabled, .form-control[readonly] {
         background-color: red;
         opacity: 1;
         }

         .form-control:disabled {
         cursor: not-allowed;
         }

         select.form-control:not([size]):not([multiple]) {
         height: calc(2.25rem + 2px);
         }

         select.form-control:focus::-ms-value {
         color: green;
         background-color: #fff;
         }

         .form-control-file,
         .form-control-range {
         display: block;
         }

         .input-group {
         position: relative;
         display: -webkit-box;
         display: -webkit-flex;
         display: -ms-flexbox;
         display: flex;
         width: 100%; 
         max-width:100%
         }

         .input-group .form-control {
         position: relative;
         z-index: 2;
         -webkit-box-flex: 1;
         -webkit-flex: 1 1 auto;
               -ms-flex: 1 1 auto;
                  flex: 1 1 auto;
         width: 1%;
         margin-bottom: 0;
         }

         .input-group .form-control:focus, .input-group .form-control:active, .input-group .form-control:hover {
         z-index: 3;
         }

         .input-group-addon,
         .input-group-btn,
         .input-group .form-control {
         display: -webkit-box;
         display: -webkit-flex;
         display: -ms-flexbox;
         display: flex;
         -webkit-box-orient: vertical;
         -webkit-box-direction: normal;
         -webkit-flex-direction: column;
               -ms-flex-direction: column;
                  flex-direction: column;
         -webkit-box-pack: center;
         -webkit-justify-content: center;
               -ms-flex-pack: center;
                  justify-content: center;
         }

         .input-group-addon:not(:first-child):not(:last-child),
         .input-group-btn:not(:first-child):not(:last-child),
         .input-group .form-control:not(:first-child):not(:last-child) {
         border-radius: 0;
         }

         .input-group-addon,
         .input-group-btn {
         white-space: nowrap;
         vertical-align: middle;
         }

         .input-group-addon {
         width: 45px;
         padding: 0.5rem 0.75rem;
         margin-bottom: 0;
         font-size: 1rem;
         font-weight: normal;
         line-height: 1.25;
         color: #2e2e2e;
         text-align: center;
         background-color: #eceeef;
         border: 1px solid rgba(0, 0, 0, 0.15);
         border-radius: 0.25rem;
         }

         .input-group-addon.form-control-sm,
         .input-group-sm > .input-group-addon,
         .input-group-sm > .input-group-btn > .input-group-addon.btn {
         padding: 0.25rem 0.5rem;
         font-size: 0.875rem;
         border-radius: 0.2rem;
         }

         .input-group-addon.form-control-lg,
         .input-group-lg > .input-group-addon,
         .input-group-lg > .input-group-btn > .input-group-addon.btn {
         padding: 0.75rem 1.5rem;
         font-size: 1.25rem;
         border-radius: 0.3rem;
         }

         .input-group-addon input[type="radio"],
         .input-group-addon input[type="checkbox"] {
         margin-top: 0;
         }

         .input-group .form-control:not(:last-child),
         .input-group-addon:not(:last-child),
         .input-group-btn:not(:last-child) > .btn,
         .input-group-btn:not(:last-child) > .btn-group > .btn,
         .input-group-btn:not(:last-child) > .dropdown-toggle,
         .input-group-btn:not(:first-child) > .btn:not(:last-child):not(.dropdown-toggle),
         .input-group-btn:not(:first-child) > .btn-group:not(:last-child) > .btn {
         border-bottom-right-radius: 0;
         border-top-right-radius: 0;
         }

         .input-group-addon:not(:last-child) {
         border-right: 0;
         }

         .input-group .form-control:not(:first-child),
         .input-group-addon:not(:first-child),
         .input-group-btn:not(:first-child) > .btn,
         .input-group-btn:not(:first-child) > .btn-group > .btn,
         .input-group-btn:not(:first-child) > .dropdown-toggle,
         .input-group-btn:not(:last-child) > .btn:not(:first-child),
         .input-group-btn:not(:last-child) > .btn-group:not(:first-child) > .btn {
         border-bottom-left-radius: 0;
         border-top-left-radius: 0;
         }

         .form-control + .input-group-addon:not(:first-child) {
         border-left: 0;
         }

         .btn {
         display: inline-block;
         font-weight: normal;
         line-height: 1.25;
         text-align: center;
         white-space: nowrap;
         vertical-align: middle;
         -webkit-user-select: none;
            -moz-user-select: none;
               -ms-user-select: none;
                  user-select: none;
         border: 1px solid transparent;
         padding: 0.5rem 1rem;
         font-size: 1rem;
         border-radius: 0.25rem;
         -webkit-transition: all 0.2s ease-in-out;
         -o-transition: all 0.2s ease-in-out;
         transition: all 0.2s ease-in-out;
         }

         .btn:hover
         {
            background-color:unset !important;
         }

         .btn:focus, .btn:hover {
         text-decoration: none;
         }

         .btn:focus, .btn.focus {
         outline: 0;
         -webkit-box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.25);
                  box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.25);
         }

         .btn.disabled, .btn:disabled {
         cursor: not-allowed;
         opacity: .65;
         }

         .btn:active, .btn.active {
         background-image: none;
         }

         a.btn.disabled,
         fieldset[disabled] a.btn {
         pointer-events: none;
         }

         .btn-primary {
         color: #fff;
         background-color: #0275d8;
         border-color: #0275d8;
         }

         .btn-primary:hover {
         color: #fff;
         background-color: #025aa5;
         border-color: #01549b;
         }

         .btn-primary:focus, .btn-primary.focus {
         -webkit-box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.5);
                  box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.5);
         }

         .btn-primary.disabled, .btn-primary:disabled {
         background-color: #0275d8;
         border-color: #0275d8;
         }

         .btn-primary:active, .btn-primary.active,
         .show > .btn-primary.dropdown-toggle {
         color: #fff;
         background-color: #025aa5;
         background-image: none;
         border-color: #01549b;
         }


      </style>
   </head>
   <body>
      <!-- Preloader Start -->
      @include('layouts.header')
      <main>
         <!-- Hero banner-->
         <div id="topBanner" class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item">
                     <img class="d-block w-100" src="public/assets/img/gallery/102.jpg" alt="First slide"
                        height="600" width="350">
                  </div>
                  <div class="carousel-item">
                     <img class="d-block w-100" src="public/assets/img/gallery/109.jpg" alt="Second slide"
                        height="600" width="350">
                  </div>
                  <div class="carousel-item active">
                     <img class="d-block w-100" src="public/assets/img/gallery/103.jpg" alt="Third slide"
                        height="600" width="350">
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
         </div>
         <!--Hero Area End-->
         <!-- Popular Locations Start -->
         {{-- 
         <div class="popular-location section-padding30" id="gallery">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <!-- Section Tittle -->
                  <div class="section-tittle text-center mb-80">
                     <h2>Features</h2>
                  </div>
               </div>
            </div>
            <div class="section-body">
               <div class="row">
                  <div class="col-6 col-md-6 col-lg-6">
                     <div class="card">
                        <div class="card-header">
                           <h4>Apartment & Building Features</h4>
                        </div>
                        <div class="card-body">
                           <ul class="orderedlist">
                              <li>Infinity edge heated bayfront pool</li>
                              <li>Bi-level fitness center with cardiovascular and weight training equipment
                              </li>
                              <li>Multipurpose exercise room for dance, yoga and other workout regimes</li>
                              <li>Tennis, racquetball and squash courts</li>
                              <li>4 Floors of allotted parking & Valet parking facilities</li>
                              <li>Sustainable design with a proper balance of aesthetics, accessibility,
                                 cost-effectiveness, safety, and security
                              </li>
                              <li>Party room with kitchen</li>
                              <li>Marble vanity tops or pedestal sinks</li>
                              <li>Frameless glass shower enclosures</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-6 col-md-6 col-lg-6">
                     <div class="card">
                        <div class="card-header">
                           <h4>Area Features</h4>
                        </div>
                        <div class="card-body">
                           <ul class="orderedlist">
                              <li>Schools in walkable distance</li>
                              <li>Center for shopping malls</li>
                              <li>Nearby Hospitals</li>
                              <li>Best restaurants in walkable distance</li>
                              <li>Pharmacy nearby</li>
                              <li>Patrol station</li>
                              <li>Theaters nearby</li>
                              <li>Nearby Coldstores</li>
                              <li>Patrol station</li>
                              <li>Theaters nearby</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               --}}
               <!-- Popular Locations End -->
               <!-- Services Area Start -->
               <!-- Services Area End -->
               <!-- Categories Area Start -->
               <div class="categories-area section-padding20" id="featureCatatorgies">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-12">
                           <!-- Section Tittle -->
                           <div class="section-tittle text-center" id="offering">
                              <span style="font-size: 50px;">We are offering</span>
                              <h2>Main Features</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row" id="category">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="single-cat text-center mb-50">
                              <div class="cat-icon">
                                 <i class="fa fa-camera" aria-hidden="true"></i>
                              </div>
                              <div class="cat-cap">
                                 <h5><a >Lobby Reception</a></h5>
                                 <p>We provide 24/7 reception and security.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="single-cat text-center mb-50">
                              <div class="cat-icon">
                                 <i class="fa fa-life-ring"></i>
                              </div>
                              <div class="cat-cap">
                                 <h5><a >Outdoor Swimming Pool</a></h5>
                                 <p>Infinity edge outdoor swimming pool & jacuzzi.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="single-cat text-center mb-50">
                              <div class="cat-icon">
                                 <i class="fa fa-life-ring" aria-hidden="true"></i>
                              </div>
                              <div class="cat-cap">
                                 <h5><a >Indoor Swimming Pool</a></h5>
                                 <p>Infinity edge  temperature controlled indoor swimming pool & jacuzzi.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="single-cat text-center mb-50">
                              <div class="cat-icon">
                                 <i class="fa fa-heartbeat" aria-hidden="true"></i>
                              </div>
                              <div class="cat-cap">
                                 <h5><a >Fitness center</a></h5>
                                 <p>Incorporate physical activity into your daily routine.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-3 col-sm-6">
                           <div class="single-cat text-center mb-50">
                              <div class="cat-icon">
                                 <i class="fa fa-heartbeat" aria-hidden="true"></i>
                              </div>
                              <div class="cat-cap">
                                 <h5><a >Spa Facilities</a></h5>
                                 <p>Take a breather & relax using our steam, sauna & massage room.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-3 col-sm-6">
                           <div class="single-cat text-center mb-50">
                              <div class="cat-icon">
                                 <i class="fas fa-key"></i>
                              </div>
                              <div class="cat-cap">
                                 <h5><a >High Security Keyless Apartments</a></h5>
                                 <p>Keyless apartments 24/7 security.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-3 col-sm-6">
                           <div class="single-cat text-center mb-50">
                              <div class="cat-icon">
                                 <i class="fas fa-bed"></i>
                              </div>
                              <div class="cat-cap">
                                 <h5><a >European Furniture</a></h5>
                                 <p>We provide you with beautiful high quality European furniture.</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-3 col-sm-6">
                           <div class="single-cat text-center mb-50">
                              <div class="cat-icon">
                                 <i class="fas fa-utensils"></i>
                              </div>
                              <div class="cat-cap">
                                 <h5><a >BBQ area with outdoor sitting</a></h5>
                                 <p>Have a lovely feast with family and friends.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="popular-location section-padding30" id="gallery">
                   <div class="section-tittle text-center mb-90">
                      <h2>Features</h2>
                   </div>
                  <div class="container">
                     <div class="row">
                         <div class=" col-sm-12 col-md-6 col-lg-6 mt-3">
                            <div class="card" >
                               <div class="card-header">
                                  <h4 style="font-weight: 600">Apartment & Building Features</h4>
                               </div>
                               <div class="card-body">
                                  <ul class="orderedlist">
                                     <li>Sustainable design with a proper balance of aesthetics,
                                        accessibility, safety, and security
                                     </li>
                                     <li> Frameless shower glass enclosures</li>
                                     <li>Marble top vanity sinks and parquet flooring design</li>
                                     <li>Fitness center with cardiovascular and weight training equipment
                                     </li>
                                     <li>Multipurpose hall equipped with a TV sitting area, ping pong and
                                        billiard tables for entertainment and social gatherings 
                                     </li>
                                     <li>Spa room consisting of a steam and wooden sauna room</li>
                                     <li>Jacuzzi, outdoor infinity edge pool and indoor infinity edge
                                        heated pool
                                     </li>
                                     <li>Massage room for relaxation and recovery </li>
                                     <li>Hairdressing room </li>
                                     <li>Children’s playground</li>
                                     <li>4 Floors of allocated indoor parking</li>
                                     <li>Watchman, reception and admin office</li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                         <div class=" col-sm-12 col-md-6 col-lg-6 mt-3">
                            <div class="card">
                               <div class="card-header">
                                  <h4 style="font-weight: 600">Area Features</h4>
                               </div>
                               <div class="card-body">
                                  <ul class="orderedlist ">
                                     <li><a href="#" class="list" data-toggle="modal" data-target="#exampleModalCenter"> Schools in walkable distance and ease of access of school bus in
                                        nearby area</a>
                                     </li>
                                     <li><a href="#" class="list" data-toggle="modal" data-target="#exampleModalCenter1">Center for shopping malls</a></li>
                                     <li><a href="#"  class="list" data-toggle="modal" data-target="#exampleModalCenter2">Nearby Hospitals and clinics with all facilities in walkable
                                        distance</a>
                                     </li>
                                     <li><a href="#" class="list" data-toggle="modal" data-target="#exampleModalCenter3">Best restaurants and cafes in walkable distance</a></li>
                                     <li><a href="#" class="list" data-toggle="modal" data-target="#exampleModalCenter4">Pharmacy nearby</a></li>
                                     <li><a href="#" class="list" data-toggle="modal" data-target="#exampleModalCenter5">Parks and beaches</a></li>
                                     <li><a href="#" class="list" data-toggle="modal" data-target="#exampleModalCenter6">Digital and electronic shops</a></li>
                                     <li><a href="#" class="list" data-toggle="modal" data-target="#exampleModalCenter7">Nearby Supermarkets</a></li>
                                     <li><a href="#" class="list" data-toggle="modal" data-target="#exampleModalCenter8">Petrol station</a></li>
                                     <li><a href="#" class="list" data-toggle="modal" data-target="#exampleModalCenter9">Movie Theaters nearby</a></li>
                                     <li><a href="#" class="list" data-toggle="modal" data-target="#exampleModalCenter10">Day care & Nursery</a></li>
                                     <li><a href="#" class="list" data-toggle="modal" data-target="#exampleModalCenter11">Salons</a></li>
                                     <li><a href="#" class="list" data-toggle="modal" data-target="#exampleModalCenter12">Pets Grooming nearby</a></li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                     </div>
                     <!-- Popular Locations End -->
                     <!-- Services Area Start -->   
                  </div>
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Schools Near SayG AMS</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <ul class="orderedlist check" >
                                       <li><a href="https://goo.gl/maps/8Eop9tRn7HDeXTp7A" class="list"  target="_blank">Bahrain School</a></li>
                                       <li>
                                          <a href="https://goo.gl/maps/cmBzwpzghuhmsRSU7" class="list"  target="_blank">
                                             New Generation Private School
                                       </li>
                                       <li><a href="https://g.page/MKSBahrain?share" class="list"  target="_blank">Modern Knowledge School</li>
                                       <li><a href="https://g.page/MNSBahrain?share" class="list"  target="_blank">Mulitnational School Bahrain</li>
                                       <li><a href="https://goo.gl/maps/jfC1G6ZB8AFxynwR8" class="list"  target="_blank">Nadeen International School</li>
                                       <li><a href="https://goo.gl/maps/h9ofNsAM7dZh8P3d7" class="list"  target="_blank">Al Quds Primary Girls School</li>
                                       <li><a href="https://goo.gl/maps/mQX4c1JoSHNxmPFq5" class="list"  target="_blank">Al Sharqiya School</li>
                                       <li><a href="https://goo.gl/maps/z649SNPdXA54t79w9" class="list"  target="_blank">The New Horizon School</li>
                                       <li><a href="https://goo.gl/maps/NrL7hnTwD5eigFKRA" class="list"  target="_blank">Capital School Bahrain</li>
                                       <li><a href="https://goo.gl/maps/a8cQBYhrUrZCNTLV6" class="list"  target="_blank">Creativity Private School</li>
                                       <li><a href="https://g.page/nmsdpsbahrain?share" class="list"  target="_blank">New Millennium School Bahrain</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Shopping Malls near SayG AMS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                  <div class="col-lg-12">
                  <ul class="orderedlist check" >
                  <li><a href="https://goo.gl/maps/ASGSn3gZMTe9bgTm7" class="list"  target="_blank">Juffair Mall</a></li>
                  <li><a href="https://goo.gl/maps/k7hifWi79P5559ea9" class="list"  target="_blank">Al Raya Mall</li>
                  <li><a href="https://g.page/juffair-square?share" class="list"  target="_blank">Juffair Square</li>
                  <li><a href="https://goo.gl/maps/pPWVuNzamYRHPMpZ7" class="list"  target="_blank">Oasis Mall</li>
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Hospitals and clinics near SayG AMS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                  <div class="col-lg-12">
                  <ul class="orderedlist check" >
                  <li><a href="https://g.page/BahrainSpecialistHospital?share" class="list"  target="_blank">Bahrain Specialist Hospital</a></li>
                  <li><a href="https://g.page/Elitemedbh?share" class="list"  target="_blank">Elite Medical center</li>
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Restaurants & Cafes near SayG AMS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                  <div class="col-lg-12">
                  <ul class="orderedlist check" >
                  <li><a href="https://goo.gl/maps/huPxWwmeh6mXbN6fA" class="list"  target="_blank">Via Brasil Bahrain</a></li>
                  <li><a href="https://goo.gl/maps/nsxoK3CaUXw6AMtb8" class="list"  target="_blank">Ric's Kountry Kitchen</li>
                  <li><a href="https://g.page/Franksalot?share" class="list"  target="_blank">Franks A Lot</li>
                  <li><a href="https://g.page/rodeo-bahrain?share" class="list"  target="_blank">Rodeo Bahrain </li>
                  <li><a href="https://goo.gl/maps/QakULE5WycG2Df6m6" class="list"  target="_blank">Cucina Italiana </li>
                  <li><a href="https://goo.gl/maps/VM6mEeY7iCzdYCbA6" class="list"  target="_blank">Nando's Juffair</li>
                  <li><a href="https://goo.gl/maps/FYkZJA7H7MERfDr4A" class="list"  target="_blank">Juffair/American Alley-2</li>
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Pharmacy </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                  <div class="col-lg-12">
                  <ul class="orderedlist check" >
                  <li><a href="https://goo.gl/maps/ifNUGFCsC3qD8znu6" class="list"  target="_blank">Juffair Square Pharmacy</a></li>
                  <li><a href="https://goo.gl/maps/THmA24BAqJDBVR4F7" class="list"  target="_blank">Nasser Pharmacy (Al Fateh Branch )</li>
                  <li><a href="https://goo.gl/maps/3fK58z9wNiCiVeKk6" class="list"  target="_blank">Juffair Marina Pharmacy</a></li>
                  <li><a href="https://goo.gl/maps/MEr6d8Ld75RmVKQJ8" class="list"  target="_blank">New Juffair Pharmacy<a></li>
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Park & Beaches near SayG AMS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                  <div class="col-lg-12">
                  <ul class="orderedlist check" >
                  <li><a href="https://goo.gl/maps/JXLzgAP3X9PbTmmRA" class="list"  target="_blank">Juffair Park</a></li>
                  <li><a href="https://goo.gl/maps/S3YgGYtkMhQpY3wa6" class="list"  target="_blank">Juffair Beach</li>
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Digital shops near SayG AMS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                  <div class="col-lg-12">
                  <ul class="orderedlist check" >
                  <li><a href="https://goo.gl/maps/tXxQKEnypgLkPgyT6" class="list"  target="_blank">Xerox Document Centre</a></li>
                  <li><a href="https://g.page/lensmagic-digital-services-w-l-l?share" class="list"  target="_blank">Lensmagic Digital Services W.L.L</li>
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Supermarkets near SayG AMS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                  <div class="col-lg-12">
                  <ul class="orderedlist check" >
                  <li><a href="https://goo.gl/maps/vzejV3ZLjAA5sM34A" class="list"  target="_blank">Al Jazira Supermarket, Juffair</a></li>
                  <li><a href="https://goo.gl/maps/5Uj5cQFa7PLZ7yW89" class="list"  target="_blank"> Carrefour Market Juffair Oasis Mall</li>
                  <li><a href="https://goo.gl/maps/bSwdnaAFSWSRsRrZ9" class="list"  target="_blank">LuLu Hypermarket - Juffair Mall</a></li>
                  <li><a href="https://goo.gl/maps/gEmkioGaFsSG7bFm7" class="list"  target="_blank"> In & Out Supermarket</li>
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Petrol Station near SayG AMS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                  <div class="col-lg-12">
                  <ul class="orderedlist check" >
                  <li><a href="https://goo.gl/maps/w3r3xwUbZ2guVXDy7" class="list"  target="_blank">Al Fateh Service Station</a></li>
                  <li><a href="https://goo.gl/maps/3FJT6GmA6DGJWg657" class="list"  target="_blank">Al-Mahooz petrol station</li>
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="modal fade" id="exampleModalCenter9" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Movie Theaters near SayG AMS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                  <div class="col-lg-12">
                  <ul class="orderedlist check" >
                  <li><a href="https://goo.gl/maps/6XeqjXeiGM9fkavM8" class="list"  target="_blank">Mukta A2 Cinemas</a></li>
                  <li><a href="https://goo.gl/maps/Cf9MPKJRXFmuR71g6" class="list"  target="_blank">Cineco Ten - Juffair</li>
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="modal fade" id="exampleModalCenter10" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Nursery & Day Care near SayG AMS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                  <div class="col-lg-12">
                  <ul class="orderedlist check" >
                  <li><a href="https://g.page/GigglesJuffair?share" class="list"  target="_blank">Giggles Nursery & Daycare, Juffair, Bahrain</a></li>
                  <li><a href="https://goo.gl/maps/Xtu8S5Dmo4NzuTWu8" class="list"  target="_blank">Juffair Nursery</li>
                  <li><a href="https://goo.gl/maps/TXBQWjAccQqQp8pA9" class="list"  target="_blank">Al Fateh English Preschool</li>
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="modal fade" id="exampleModalCenter11" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Salons near SayG AMS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                  <div class="col-lg-12">
                  <ul class="orderedlist check" >
                  <li><a href="https://goo.gl/maps/53QYgcbP3RuJm8em6" class="list"  target="_blank">Juffair Beauty Center</a></li>
                  <li><a href="https://goo.gl/maps/k7hifWi79P5559ea9" class="list"  target="_blank">Abstract Beauty Center</li>
                  <li><a href="https://g.page/juffair-square?share" class="list"  target="_blank">Aya Palace Salon</li>
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="modal fade" id="exampleModalCenter12" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Pets Gromming near SayG AMS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <div class="row">
                  <div class="col-lg-12">
                  <ul class="orderedlist check" >
                  <li><a href="https://g.page/petgardenbh?share" class="list"  target="_blank">Pet Garden</a></li>
                  <li><a href="https://g.page/pet-spa-bahrain?share" class="list"  target="_blank">Pet Spa Bahrain</a></li>
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <!-- Categories Area End -->
                  <!-- Services Area End -->
                  <div class="container">
                     <div class="subscribe-area section-bg pt-95">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="section-tittle text-center mb-90">
                                 <h2>Floor Plan</h2>
                              </div>

                           </div>
                           <div class="col-xl-6 col-lg-6 col-12">
                              <!-- Section Tittle -->
                              <div class="section-tittle section-tittle2  mb-40" id="contactus">
                                 <div class="image">
                                    <img class="d-block w-100" src="public/assets/img/gallery/key.jpg"
                                       alt="First slide" height="500" width="250">
                                 </div>
                              </div>
                              <!--Hero form -->
                           </div>
                           <div class="col-xl-6 col-lg-6 col-12">
                              <!-- Section Tittle -->
                              <table class="table table-dark">
                                 <thead>
                                    <tr>
                                       <th scope="col">FLOOR/Apartments</th>
                                       <th scope="col">BEDS/BATHS</th>
                                       <th scope="col">TOTAL AREA</th>
                                       <th scope="col">FLOOR PLANS</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th scope="row">Apartment 01</th>
                                       <td>3 Bed/4 Bath</td>
                                       <td>120.76 SQ.M.</td>
                                       <td><a href="public/assets/img/gallery/FLA1 01.pdf" target="_blank">view</a></td>
                                    </tr>
                                    <tr>
                                       <th scope="row">Apartment 02</th>
                                       <td>1 Bed/2 Bath</td>
                                       <td>80.00 SQ.M.</td>
                                       <td><a href="public/assets/img/gallery/FLA1 02.pdf" target="_blank">view</a></td>
                                    </tr>
                                    <tr>
                                       <th scope="row">Apartment 03</th>
                                       <td>2 Beds/3 Baths</td>
                                       <td>115.38 SQ.M.</td>
                                       <td><a href="public/assets/img/gallery/FLA1 03.pdf" target="_blank">view</a></td>
                                    </tr>
                                    <tr>
                                       <th scope="row">Apartment 04</th>
                                       <td>2 Beds/4 Baths</td>
                                       <td>117.00 SQ.M.</td>
                                       <td><a href="public/assets/img/gallery/FLA1 04.pdf" target="_blank">view</a></td>
                                    </tr>
                                    <tr>
                                       <th scope="row">Apartment 05</th>
                                       <td>2 Bed/3 Bath</td>
                                       <td>93.00 SQ.M.</td>
                                       <td><a href="public/assets/img/gallery/FLA1 05.pdf" target="_blank">view</a></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        {{-- 
                        <div class="container">
                           <div class="row justify-content-center">
                           </div>
                        </div>
                        --}}
                     </div>
                  </div>
                  <!-- peoples-visit Start -->
               </div>
               <!-- Subscribe Area End -->
               <div class="">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-6 col-12">
                           <div class="text-center">
                              <img class="img-fluid" src="{{ asset('public/assets/img/gallery/001.jpg') }}" style="width:100%;height:400px;" alt="">
                           </div>
                        </div>
                        <div class="col-lg-6 col-12">
                           <div class="peoples-visit">
                              <div class="visit-caption visit" id="visit">
                                 <span>Welcome,</span>
                                 <p>Welcome to SayG AMS ! We look forward to having you stay with us where comfort, entertainment and luxury come together to give you an excellent and joyful experience. 
                                    We hope that you will avail yourselves of the amenities that we provide.
                                    Should you require any additional information or assistance, please do not hesitate to get in touch with our team who are always happy to help. SayG AMS strives to provide friendly and meaningful customer service to our tenants.
                                 </p>
                                 <p class="text-right"> General Manager</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="home-blog-area section-padding20" id="apartments">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-12">
                           <!-- Section Tittle -->
                           <div class="section-tittle text-center mb-90">
                              <h2>Location</h2>
                           </div>
                        </div>
                        <iframe
                           src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d894.6956387412383!2d50.580299!3d26.236254!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd7c12a3090ae5007!2sSayG%20WLL!5e0!3m2!1sen!2sbh!4v1642414475138!5m2!1sen!2sbh"
                           style="width:100%;height:140%" allowfullscreen=""
                           loading="lazy"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Blog Ara Start -->
         <div class="home-blog-area section-padding20" id="apartments">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <!-- Section Tittle -->
                     <div class="section-tittle mt-4 text-center mb-90">
                        <h2>Photos</h2>
                     </div>
                  </div>
               </div>
               <div class="container mb-5">
                  <div class="carousel-container position-relative row">
                    
                  <!-- Sorry! Lightbox doesn't work - yet. -->
                    
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-slide-number="0">
                        {{-- <img src="https://source.unsplash.com/Pn6iimgM-wo/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Pn6iimgM-wo/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery"> --}}
                        <div class="carousel-item-div">
                           <img src="{{ asset('public/assets/img/gallery/102.jpg') }}" alt="" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Pn6iimgM-wo/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                           <h1>Interior Design</h1>
                        </div>
                      </div>
                      <div class="carousel-item" data-slide-number="1">
                        <div class="carousel-item-div">
                        <img src="{{ asset('public/assets/img/gallery/109.jpg') }}" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/tXqVe7oO-go/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                        <h1>Swimming Pool</h1>
                        </div>
                        
                     </div>
                      <div class="carousel-item" data-slide-number="2">
                        <div class="carousel-item-div">
                        <img src="{{ asset('public/assets/img/gallery/14.jpg') }}" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/qlYQb7B9vog/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                        <h1>Bedroom</h1>
                        </div>
                     </div>
                      <div class="carousel-item" data-slide-number="3">
                        <div class="carousel-item-div">
                        <img src="{{ asset('public/assets/img/gallery/15.jpg') }}" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/QfEfkWk1Uhk/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                        <h1>Fitness Center</h1>
                        </div>
                     </div>
                      <div class="carousel-item" data-slide-number="4">
                        <div class="carousel-item-div">
                        <img src="{{ asset('public/assets/img/gallery/16.jpg') }}" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/CSIcgaLiFO0/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                        <h1>Hairdressing Room</h1>
                        </div>
                     </div>
                      <div class="carousel-item" data-slide-number="5">
                        <div class="carousel-item-div">
                        <img src="{{ asset('public/assets/img/gallery/19.jpg') }}" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/a_xa7RUKzdc/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                        <h1>Children’s Playground</h1>
                        </div>
                     </div>
                      <div class="carousel-item" data-slide-number="6">
                        <div class="carousel-item-div">
                        <img src="{{ asset('public/assets/img/gallery/25.jpg') }}" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/uanoYn1AmPs/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                        <h1>Children’s Playground</h1>
                        </div>
                     </div>
                      <div class="carousel-item" data-slide-number="7">
                        <div class="carousel-item-div">
                        <img src="{{ asset('public/assets/img/gallery/26.jpg') }}" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/_snqARKTgoc/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                        <h1>Indoor Parking</h1>
                        </div>
                     </div>
                      <div class="carousel-item" data-slide-number="8">
                        <div class="carousel-item-div">
                        <img src="{{ asset('public/assets/img/gallery/27.jpg') }}" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/M9F8VR0jEPM/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                        <h1>Massage Room</h1>
                        </div>
                     </div>
                      <div class="carousel-item" data-slide-number="9">
                        <div class="carousel-item-div">
                        <img src="{{ asset('public/assets/img/gallery/28.jpg') }}" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Q1p7bh3SHj8/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                        <h1>Frameless Shower Glass</h1>
                        </div>
                     </div>
                    </div>
                  </div>
                  
                  <!-- Carousel Navigation -->
                  <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row mx-0">
                          <div id="carousel-selector-0" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
                            <img src="{{ asset('public/assets/img/gallery/102.jpg') }}" class="img-fluid" alt="..." style="width:187px;height: 125px">
                          </div>
                          <div id="carousel-selector-1" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="1">
                            <img src="{{ asset('public/assets/img/gallery/109.jpg') }}" class="img-fluid" alt="..." style="width:187px;height: 125px">
                          </div>
                          <div id="carousel-selector-2" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="2">
                            <img src="{{ asset('public/assets/img/gallery/14.jpg') }}" class="img-fluid" alt="..." style="width:187px;height: 125px">
                          </div>
                          <div id="carousel-selector-3" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="3">
                            <img src="{{ asset('public/assets/img/gallery/15.jpg') }}" class="img-fluid" alt="..." style="width:187px;height: 125px">
                          </div>
                          <div id="carousel-selector-4" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="4">
                            <img src="{{ asset('public/assets/img/gallery/16.jpg') }}" class="img-fluid" alt="..." style="width:187px;height: 125px">
                          </div>
                          <div id="carousel-selector-5" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="5">
                            <img src="{{ asset('public/assets/img/gallery/19.jpg') }}" class="img-fluid" alt="..." style="width:187px;height: 125px">
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row mx-0">
                          <div id="carousel-selector-6" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="6">
                            <img src="{{ asset('public/assets/img/gallery/25.jpg') }}" class="img-fluid" alt="..." style="width:187px;height: 125px">
                          </div>
                          <div id="carousel-selector-7" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="7">
                            <img src="{{ asset('public/assets/img/gallery/26.jpg') }}" class="img-fluid" alt="..." style="width:187px;height: 125px">
                          </div>
                          <div id="carousel-selector-8" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="8">
                            <img src="{{ asset('public/assets/img/gallery/27.jpg') }}" class="img-fluid" alt="..." style="width:187px;height: 125px">
                          </div>
                          <div id="carousel-selector-9" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="9">
                            <img src="{{ asset('public/assets/img/gallery/28.jpg') }}" class="img-fluid" alt="..." style="width:187px;height: 125px">
                          </div>
                          <div id="carousel-selector-4" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="4">
                            <img src="{{ asset('public/assets/img/gallery/16.jpg') }}" class="img-fluid" alt="..." style="width:187px;height: 125px">
                          </div>
                          <div id="carousel-selector-5" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="5">
                            <img src="{{ asset('public/assets/img/gallery/19.jpg') }}" class="img-fluid" alt="..." style="width:187px;height: 125px">
                          </div>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
               </div>
                  
               </div> <!-- /row -->
               </div> <!-- /container -->
            </div>
         </div>
         
         <!-- Blog Ara End -->
         <!-- Blog Ara End -->
         <div class="home-blog-area section-padding20" id="apartments">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <!-- Section Tittle -->
                     <div class="section-tittle text-center" id="">
                              <h2>Reviews</h2>
                              <span >We appreciate your review</span>
                           </div>
                  </div>
               </div>
               <div class="container mb-5">
                  <div class="row">
                    <!-- <div class="col">
                        <h2 id="fh2">WE APPRECIATE YOUR REVIEW!</h2>
                        <h6 id="fh6">Your review will help us to improve our web hosting quality products, and customer services.</h6>
                     </div> -->
                  </div>

                  <div class="row">
                     <div class="col-lg-8 offset-lg-2">
                     <form id="feedback" >
                       
                       @csrf
                             <div class="pinfo">Name:</div>
                             
                             <div class="form-group">
                             <div class="inputGroupContainer">
                             <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-user"></i></span>
                             <input  name="name" placeholder="John Doe" class="form-control"  type="text">
                                </div>
                             </div>
                             </div>
                             @isset($error)
                                 @error('name')
                                   <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                             @endisset
                             
                             <div class="pinfo">Email:</div>
                             <div class="form-group">
                             <div class="inputGroupContainer">
                             <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input name="email" type="email" class="form-control" placeholder="john.doe@yahoo.com">
                                </div>
                             </div>
                             </div>
                             @isset($error)
                                 @error('email')
                                   <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                             @endisset
                             <div class="pinfo">Write your review:</div>
                             

                             <div class="form-group">
                             <div class="inputGroupContainer">
                             <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                             <textarea class="form-control" name="review" id="review" rows="3"></textarea>
                             </div>
                             </div>
                             </div>
                             @isset($error)
                                 @error('review')
                                   <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                             @endisset
                             <button type="button" class="btn btn-primary btn-submit" style="width:100%">Submit</button>

                    </form>
                     </div>
                  </div>

                    
                  
                  
                  
               </div> <!-- /row -->
               </div> <!-- /container -->
            </div>
         </div>
      
      </main>
      
       @include('layouts.footer')
      <!-- Scroll Up -->
      <div id="back-top">
         <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
      </div>
      <!-- JS here -->
      <!-- All JS Custom Plugins Link Here here -->
      
      <script src="{{ asset('public/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
      <!-- Jquery, Popper, Bootstrap -->
      <script src="{{ asset('public/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
      <script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
      <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
      <!-- Jquery Mobile Menu -->
      <script src="{{ asset('public/assets/js/jquery.slicknav.min.js') }}"></script>
      <!-- Jquery Slick , Owl-Carousel Plugins -->
      <script src="{{ asset('public/assets/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('public/assets/js/slick.min.js') }}"></script>
      <!-- One Page, Animated-HeadLin -->
      <script src="{{ asset('public/assets/js/wow.min.js') }}"></script>
      <script src="{{ asset('public/assets/js/animated.headline.js') }}"></script>
      <script src="{{ asset('public/assets/js/jquery.magnific-popup.js') }}"></script>
      <!-- Nice-select, sticky -->
      <script src="{{ asset('public/assets/js/jquery.nice-select.min.js') }}"></script>
      <script src="{{ asset('public/assets/js/jquery.sticky.js') }}"></script>
      <!-- contact js -->
      <script src="{{ asset('public/assets/js/contact.js') }}"></script>
      <script src="{{ asset('public/assets/js/jquery.form.js') }}"></script>
      <script src="{{ asset('public/assets/js/jquery.validate.min.js') }}"></script>
      <script src="{{ asset('public/assets/js/mail-script.js') }}"></script>
      <script src="{{ asset('public/assets/js/jquery.ajaxchimp.min.js') }}"></script>
      <!-- Jquery Plugins, main Jquery -->
      <script src="{{ asset('public/assets/js/plugins.js') }}"></script>
      <script src="{{ asset('public/assets/js/main.js') }}"></script>

      <script src="https://use.fontawesome.com/a6f0361695.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script type="text/javascript">
   
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
    $(".btn-submit").click(function(){
      
        var name = $("input[name=name]").val()
        var email = $("input[name=email]").val()
        var review = $("textarea[name=review]").val()
        $.ajax({
           type:'POST',
           url:"{{ route('review.save') }}",
           data:{name:name,email:email,review:review},
           success:function(data){
               $('#feedback')[0].reset()
               swal({
               title: "Review",
               text: data.message,
               icon: "success",
               })
           }
        })
  
    })
</script>
   </body>
</html>