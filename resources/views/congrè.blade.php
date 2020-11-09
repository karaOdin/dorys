@extends('layouts.app')

@section('content')



<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>{{ __("Nos événements") }}</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> {{ __("Home") }}</a></li>
                <li><i class="fas fa-angle-double-right"></i> {{ __("Events") }}</li>
            </ul>
        </div>
    </div>
</div>


<?php
   $pap=DB::table('events')
   ->select("events.*")
   ->where('etat','0')
   ->get();
   ?>
 <section class="upcomming container-flid">
    <div class="container">
        <div class="session-title row">

            <h2>{{ __("événement passé") }}</h2>
        </div>
        @foreach($pap as $pop)
        <div class="card-group">
     <form method="POST" action="{{route('avenir',[app()->getLocale(),$pop->id])}}">
            {{ csrf_field() }}
            @csrf

            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/storage/'.$pop->image) }}" class="card-img-tsop" alt="...">
                <div class="card-body">
                  <h5 class="card-title center">{{ $pop->title }}</h5>
                  <p class="card-text">{{ $pop->theme }}</p>
                  <h6>{{ $pop->date }}</h6>
                </div>

                <div class="plac-dat row no-margin">
                    <div class="col-7 colplac colplacll">
                        <strong>{{ __("PLACE:") }}</strong>
                        <p>{{ $pop->place }}</p>
                    </div>
                    <div class="col-5 colplac">
                        <input type="submit" value="{{ $pop->title }}" name="id" class="btn btn-primary btn-lg active" >
                    </div>
                </div>
            </form>
              </div>

              @endforeach



    </div>
</section>

<?php
$pap=DB::table("events")
->select("events.*")
->where('etat','1')
->get();
?>
 <section class="upcomming container-flid">
    <div class="container">
        <div class="session-title row">

            <h2>{{ __("évènement à venir") }}</h2>
        </div>

        @foreach($pap as $pap)
        <div class="card" style="width:auto;">
            <img src="{{ asset('/storage/'.$pap->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <ul>
           <strong><h5 class="card-title center">{{ $pap->title }}</h5></strong>
              <p class="card-text">{{ $pap->theme }}</p>

        <li>
            <?php $brochur = json_decode($pap->brochure);

            ?>
            @foreach($brochur as $brch)

            <h6>{{ $pap->resumer }}</h6></li>
            <a href="/storage/{{$brch->download_link }}" download=""class="btn btn-info btn-lg active"><strong>{{ __("le programme") }}</strong> </a></div>

            @endforeach

        </ul>

            <div class="plac-dat row no-margin">
                <div class="col-6 colplac colplacll">
                    <strong>PLACE:</strong>
                    <ul>
                        <li><p>{{ $pap->place }}</p></li>

                    <li> <h6>{{ $pap->date }}</h6></li>
                    </ul>

                </div>

                <div class="col-6 colplac ">
                    <a href="{{ route('reservation',app()->getLocale())}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true" name={{ $pap->id }}>{{ __("s'inscrire") }}</a>
                </div>

            </div>
          </div>
          @endforeach
    </div>

  </section>
   <!-- ******************** Upcomming Events Starts Here ******************* -->


@endsection
