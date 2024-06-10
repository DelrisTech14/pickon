@extends('layouts.apps')

@section('content')

   <section class="slider_section ">
      <div class="container ">
         <div class="row">
            <div class="col-md-12 col-lg-6 ">
               <div class="detail-box">
                  <h1>
                     <span>
                     Support
                     </span>
                     <!--<br>
                     On Everything-->
                  </h1>
                  <p>
                     PeconPower batteries come with a warranty period ranging from one year to three years depending on the product range and application. Warranty support could be “On Site” or “Return To Bench” depending on the model. Please refer to the comprehensive warranty policy for more details and terms of warranty.
                     We provide on site support at the customer’s location for any problem faced during the warranty period. In addition, our extensive support network is used to provide installation and logistics support for deployment of large projects across industry verticals.
                  </p>
                  <div class="btn-box">
                     <a href="{{ url('dashboard/enquiry') }}" class="btn1">
                        Enquiry Now
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-md-12 col-lg-6 text-center">
               <img src="{{asset('assets/images/support.png')}}" alt="" class="img-fluid mx-auto">
            </div>
         </div>
      </div>
   </section>
      


      @endsection