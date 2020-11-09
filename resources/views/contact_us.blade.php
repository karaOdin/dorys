@extends('layouts.app')

@section('content')
@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>{{ __("contacter nous") }}</h2>
            <ul>
                <li> <a href="/"><i class="fas fa-home"></i>{{ __("drepanocytose") }}</a></li>
                <li><i class="fas fa-angle-double-right"></i>{{ __("contacter nous") }}</li>
            </ul>
        </div>
    </div>
</div>


  <!--  ************************* Contact Us Starts Here ************************** -->


<div style="margin-top:0px;" class="row no-margin">

    <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.6152825069607!2d7.7518245148868035!3d48.57891682829903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c854cbbceec1%3A0x79bfde74df641a27!2s1a%20Place%20des%20Orphelins%2C%2067000%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1604924520605!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

<div class="row contact-rooo no-margin">
    <div class="container">
        <div class="row">


            <div style="padding:20px" class="col-sm-7">
                <h2 >Contact Form</h2> <br>
          <form method="POST" action="{{ route('contact', app()->getLocale())}}">
            {{ csrf_field() }}
                <div class="row cont-row">
                    <div  class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                    <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"  ></div>
                </div>
                <div  class="row cont-row">
                    <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                    <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                </div>
                <div  class="row cont-row">
                    <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                    <div class="col-sm-8"><input type="text" name="phone_number" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                </div>
                <div  class="row cont-row">
                    <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                    <div class="col-sm-8">
                        <textarea rows="5" placeholder="Enter Your Message" name='message'class="form-control input-sm"></textarea>
                    </div>
                </div>
                <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                        <button class="btn btn-success btn-sm">Send Message</button>
                    </div>
                </div>

            </div>

        </form>
            <div class="col-sm-5">

                <div style="margin:50px" class="serv">





                    <h2 style="margin-top:10px;">Address</h2>

                    1a place des Orprhelins
                    <br>
                    67000 Strasbourg<br>
                    France <br>
                   {{ __("telephone") }}:06-68-51-90-68<br>
                    Email:dorys.asso@gmail.com<br>








                </div>


            </div>

        </div>
    </div>

</div>
@endsection
