<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>SayG AMS</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
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
      <link rel="stylesheet" href="{{  asset('public/assets/css/intlTelInput.css') }}">
      <link rel="stylesheet" href="{{  asset('public/assets/css/demo.css') }}">
      <style>
         body {
         background-color: #f8f8ff !important;
         }
         .popular-location img
         {
         height: 400px !important;
         }
         .subscribe-area {
         height: 600px !important;
         }
         .pt-95{
         padding-top: 95px;
         }
         .pt-6{
         padding-top:50px;
         }
         .section-padding30{
         padding-top: 90px;
         }
         .section-tittle section-tittle2  mb-40"{
         font-size:20px;
         }

         label{
            color: #3D3D3D !important;
         }
         .section-tittle text-center mb-80{
         text-align: center;
         font-weight: 900;
         }
         .peoples-visit .single-visit.left-img::before {
         height: 763px;
         top: 200px;
         }
         .peoples-visit .visit-caption p{
         text-align: justify;
         }

         main{
            background: #f8f8ff !important;
         }
         .testimonial-padding {
         padding-top: 1px;
         }
         .categories-area .single-cat{
         padding: 40px 32px 20px;
         }
         .mb-70 {
         margin-bottom: 89px;
         }
         .peoples-visit .single-visit {
         position: relative;
         padding: 90px 40px 0;
         }
         #contactus span
         {
         font-size: 16px;
         font-family: sans-serif;
         color: #e2eee6;
         margin-bottom: 15px;
         }
         .subscribe-area {
         height: 522px !important;
         }
         .socialmedia-icons{
         font-size: 22px;
         }
         .home-blog-area .single-team .team-caption h3 {
         padding-right: 48px;
         }
         .footer-area{
         padding-top:60px;
         }
         .peoples-visit .single-visit.left-img::before{
         left:6% !important;
         max-height: 730px;
         }
         ul.socialmedia-icons{
         list-style: none;
         width: 100%;
         }
         ul.socialmedia-icons li{
         list-style: none;
         display: inline;
         float: left;
         }
         #carouselExampleIndicators{
         padding-top: 70px;
         padding-right: 0px;
         padding-left: 0px;
         }
         .header-area .main-header .main-menu ul li a {
         color: #000;
         }
         .card-body{
         padding-bottom: 20px;
         }
         #offering{
         padding-top: 64px;
         }
         #category{
         padding-top: 50px;
         }
         #heading{
         font-style: "rubik";
         align-content: center;
         font-size: 30px;
         }
         .navigation{
         text-align: center;
         }
         .orderedlist li{
         list-style: disc;
         }
         .socialmedia-icons{
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
         .heading{
         font-family: "Sacramento",cursive;
         font-weight: 900;
         padding-top: 22px;
         color: #e2eee6;
         }
         .header-bottom {
         background: #e8eebb !important;
         }
         .footer-area {
         background: #e8eebb !important;
         }
         .popular-location img {
         height: 294px !important;
         }
         .w-100 {
         width: 105%!important;
         }
         .home-blog-area .single-team .team-img img {
         width: unset;
         }
         .container-fluid {
         padding-left: 0px;
         padding-right: 0px;
         }
         .team-img1{
         height: 50%;
         }
         .team-img1{
         height: 800px;
         }
         .iti--allow-dropdown{
         width:100%;
         }
         .invalid-feedback
         {
         display: block !important;
         }
         @media (min-width: 576px) { 
         .form {
         margin-bottom: 50px;
         }
         }
         @media (min-width: 576px) { 
         .gables {
         width:100%;
         height:cover;
         }
         }
         .testimonial
         {
         background: #020122;
         padding: 30px;
         border-radius: 15px;
         }
         p {
         font-family: "Sulphur Point",sans-serif;
         color: #88980d;
         font-size: 16px;
         line-height: 30px;
         margin-bottom: 15px;
         font-weight: normal;
         }

         @media (max-width: 480px) {
            .card
            {
               margin-top:80px !important;
            }
        }
      </style>
   </head>
   <body>
      <!-- Preloader Start -->
      @include('layouts.header')
      <main>
         <div class="container">
         <section class="section" style="margin-top:120px;">
         <div class="section-body">
            <div class="row">
               <div class="col-12 col-md-6 col-lg-6 form" style="padding-right: 15px;padding-left:15px;">
                  <div class="card" style="margin-top:50px;">
                     @if(session()->has('message'))
                     <div class="alert alert-success">
                        {{ session()->get('message') }}
                     </div>
                     @endif
                     <form method="POST" action="{{ route('save_job_info') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                           <h1>Application Form</h1>
                           <div class="form-group ">
                              <label>First Name</label>
                              <input type="text" name="first_name" class="form-control  @if(!empty($errors)) @error('first_name') is-invalid @enderror @endif">
                              
                              @isset($errors)
                              
                                  @error('first_name')
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                              @endisset
                           </div>
                           <div class="form-group">
                              <label>Last Name</label>
                              <input type="text" name="last_name" class="form-control @if(!empty($errors)) @error('last_name') is-invalid @enderror @endif">
                              @isset($errors)
                                  @error('last_name')
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                              @endisset
                           </div>
                           <div class="form-group">
                              <label>Address</label>
                              <textarea name="address" class="form-control @if(!empty($errors)) @error('address') is-invalid @enderror @endif"></textarea>
                              @isset($errors)
                                  @error('address')
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                              @endisset
                           </div>
                           <div class="form-group">
                              <label>Date Of Birth</label>
                              <input type="date" name="date_of_birth" class="form-control @if(!empty($errors)) @error('date_of_birth') is-invalid @enderror @endif"></textarea>
                              @isset($errors)
                                  @error('date_of_birth')
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                              @endisset
                           </div>
                           <div class="form-group">
                              <label>Email</label>
                              <input type="email" name="email_address"  class="form-control @if(!empty($errors)) @error('email_address') is-invalid @enderror @endif">
                              @isset($errors)
                                  @error('email_address')
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                              @endisset
                           </div>
                           <div class="form-group">
                              <label>Phone</label>
                              <input type="tel" id="phone" maxlength="11" name="phone"  class="form-control @if(!empty($errors)) @error('phone') is-invalid @enderror @endif">
                              @isset($errors)
                                  @error('phone')
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                              @endisset
                              <input type="hidden" name="country_code" value="" >
                           </div>
                           <div class="form-group">
                              <label>Attach CV</label> 
                              <input type="file" name="cv" accept="application/pdf" class="form-control @if(!empty($errors)) @error('cv') is-invalid @enderror @endif">
                              @isset($errors)
                                  @error('cv')
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                              @endisset
                           </div>
                           <div class="card-footer text-right">
                              <button class="btn btn-primary mr-1"  type="submit">Submit</button>
                     </form>
                     </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-6 col-lg-6 gables" style="padding-right: 15px;padding-left:15px;">
                  <div class="single-team mb-30" style="margin-top:50px;">
                     <div class="team-img1">
                        <img src="{{ asset('public/assets/img/gallery/003.jpg') }}" width="100%" height="820" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
      @include('layouts.footer')
      <!-- Scroll Up -->
      <div id="back-top" >
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
      <script src="{{  asset('public/assets/js/intlTelInput.js') }}"></script>
      <script src="{{ asset('public/assets/js/intlTelInput.js')}}"></script>
      <script>
        (function($) {
                $.fn.inputFilter = function(inputFilter) {
                    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
                    if (inputFilter(this.value)) {
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                    } else if (this.hasOwnProperty("oldValue")) {
                        this.value = this.oldValue;
                        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                    } else {
                        this.value = "";
                    }
                    });
                };
            }(jQuery));
        
            
            $("#phone").inputFilter(function(value) {
            return /^[+-]?\d*$/.test(value); });
        </script>
      <script>
         var input = document.querySelector("#phone");
         window.intlTelInput(input, {
         //   allowDropdown: false,
         //   autoHideDialCode: true,
         autoPlaceholder: "On",
         //   dropdownContainer: document.body,
         //   excludeCountries: ["us"],
         //   formatOnDisplay: true,
         geoIpLookup: function(callback) {
           $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
             var countryCode = (resp && resp.country) ? resp.country : "";
             callback(countryCode);
           });
         },
         //   hiddenInput: "full_number",
         //   initialCountry: "auto",
         //   localizedCountries: { 'de': 'Deutschland' },
         //   nationalMode: false,
         //   onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
         placeholderNumberType: "MOBILE",
         //   preferredCountries: ['cn', 'jp'],
         separateDialCode: true,
         
         utilsScript: "build/js/utils.js",
         });
         
      </script>
      <script>
         $(document).ready(function(){
            let country_code = $(".iti__selected-dial-code").html()

            $("input[name=country_code]").val(country_code)
         })

         $(".iti__selected-dial-code").on('DOMSubtreeModified',function(){
            let country_code = $(".iti__selected-dial-code").html()

            $("input[name=country_code]").val(country_code)
         })
      </script>
   </body>
</html>