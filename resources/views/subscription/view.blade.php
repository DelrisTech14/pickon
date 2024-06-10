@extends('layouts.apps')
@section('content')
<!-- subscribe section -->
<section class="subscribe_section">
         <div class="container-fuild">
            <div class="box">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <div class="subscribe_form ">
                        <div class="heading_container heading_center">
                           <h3>Subscribe To Get Discount Offers</h3>
                        </div>
                        <p>Unlock Exclusive Discount Offers with Pecon Power</p>
                        <form action="{{route('subscription.send')}}" method="post" enctype="multipart/form-data">
                            @csrf
                           <input type="email" placeholder="Enter your email">
                          
                           <button type="submit" class="btn btn-primary">Subscribe</button>
                           
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end subscribe section -->
      @endsection