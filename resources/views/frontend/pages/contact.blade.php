@extends('frontend.defaults')
@section('content')
<div class="hero-section section overlay" style="background-image: url('img/download.png')">
   <div class="container ">

       <form action="{{route('post.contact')}}" method="POST">
           @csrf
           <h4 class="text-center text-info">contact us</h4>
           <div class="form-row">
               <div class="form-group col-md-6">
                   <label for="inputEmail4">Name</label>
                   <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Your name">
               </div>
               <div class="form-group col-md-6">
                   <label for="inputEmail4">Email</label>
                   <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
               </div>
               <div class="form-group col-md-12">
                   <label for="inputEmail4">Phone Nunmber</label>
                   <input type="number" name="phone_number" class="form-control" id="inputEmail4" placeholder="Phone number">
               </div>

           </div>


           <div class="form-group">
               <label for="exampleFormControlTextarea1">You Massage</label>
               <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
           </div>
           <div class="form-group">

           </div>
           <button type="submit" class="btn btn-primary te">Submit</button>
       </form>
   </div>
</div>
@endsection
