@extends('layouts.app')

@section('content')



<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Our Events</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Events</li>
            </ul>
        </div>
    </div>
</div>





   <!-- ******************** Upcomming Events Starts Here ******************* -->

<section class="upcomming container-flid">
    <div class="container">
        <div class="session-title row">
            <p>KNOW AND COME TO JOIN OUR</p>
            <h2>UPCOMING EVENTS</h2>
        </div>
        <div class="events-row row">
            <div class="col-md-4">
                <div class="event-card">
                    <img src="assets/images/event/e1.jpg" alt="">
                    <div class="event-detail">
                        <h4>Fund Raising Event</h4>
                        <p>Estibulum at maximus neque. Etiam interdum fermentum dolor, eget placerat lorem.</p>

                        <h6>25 <sup>Th</sup> Mar 2020</h6>
                    </div>
                    <div class="plac-dat row no-margin">
                        <div class="col-7 colplac colplacll">
                            <strong>PLACE:</strong>
                            <p>EASTER COAST HOTEL, CA</p>
                        </div>
                        <div class="col-5 colplac">
                             <strong>TICKET:</strong>
                            <p>FREE OF COST</p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-md-4">
                <div class="event-card">
                    <img src="assets/images/event/e2.jpg" alt="">
                    <div class="event-detail">
                        <h4>Fund Raising Event</h4>
                        <p>Estibulum at maximus neque. Etiam interdum fermentum dolor, eget placerat lorem.</p>

                        <h6>25 <sup>Th</sup> Mar 2020</h6>
                    </div>
                    <div class="plac-dat row no-margin">
                        <div class="col-7 colplac colplacll">
                            <strong>PLACE:</strong>
                            <p>EASTER COAST HOTEL, CA</p>
                        </div>
                        <div class="col-5 colplac">
                             <strong>TICKET:</strong>
                            <p>FREE OF COST</p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-md-4">
                <div class="event-card">
                    <img src="assets/images/event/e3.jpg" alt="">
                    <div class="event-detail">
                        <h4>Fund Raising Event</h4>
                        <p>Estibulum at maximus neque. Etiam interdum fermentum dolor, eget placerat lorem.</p>

                        <h6>25 <sup>Th</sup> Mar 2020</h6>
                    </div>
                    <div class="plac-dat row no-margin">
                        <div class="col-7 colplac colplacll">
                            <strong>PLACE:</strong>
                            <p>EASTER COAST HOTEL, CA</p>
                        </div>
                        <div class="col-5 colplac">
                             <strong>TICKET:</strong>
                            <p>FREE OF COST</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- ******************** Footer Starts Here ******************* -->
<div class="footer-ablove">
    <div class="container">
        <div class="row">
            <p>Looking For Exclusive Services?
                <button class="btn btn-default">Donate Now</button>
            </p>
        </div>
    </div>
</div>
</section>



@endsection
