@extends('layouts.app')


@section('content')

     <!-- ******************** Slider Starts Here ******************* -->



    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-1.jpg" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title"></h1>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-2.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">{{ __("Association de Lutte Contre la Drepanocytose") }}</h1>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-3.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title"></h1>
                                <p class="slider-text hidden-xs"></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

     <!-- ******************** About US Starts Here ******************* -->

    <div class="about-us">
        <div class="container">
            <div class="session-title">

            <h2>{{ __("drepanocytose") }}</h2>
            </div>
            <div class="about-row row">
                <div class="col-md-8">
                    <div class="abut-detail">
                         <h4>{{__("Drépanocytose : qu'est-ce que c'est ?")}}</h4>
                      <p>{{ __("La Drépanocytose est une maladie génétique due à une anomalie de l’hémoglobine contenue dans les globules rouges provocant leur déformation et leur destruction")}}.
                        {{ __("Leur destruction entraîne une anémie chronique sévère et leur déformation s’accompagne de troubles circulatoires très douloureux. C’est la maladie génétique la plus répandue dans le monde mais méconnue. Elle touche environ 50 millions de personnes avec une prédilection pour l’Afrique Noire. Près de la moitié des enfants atteints de cette maladie meurent avant d’être dépistés dans les pays en voie de développement") }}
                        {{ __("Il existe aujourd’hui des traitements mais aucun ne conduit à une guérison totale. C’est pourquoi l’essentiel du traitement consiste en la prise en charge des symptômes résultant des crises : transfusion, oxygénothérapie, hydratation, analgésie.") }}
                        </p>) }}
                    </div>



                </div>
                <div class="col-md-4">
                    <img src="assets/images/about_img.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
{{--  --}}
<div class="we-are-making container-fluid">
    <div class="row">
        <div class="col-lg-6 imag-part">
            <img src="assets/images/count.png" alt="">
        </div>
        <div class="col-lg-6 text-part">
            <h3>{{ __('Symptomes') }}</h3>
    <ul class="list-unstyled">
        {{ __('Dans sa forme homozygote, la drépanocytose se traduit chez l\'enfant de 12-18 mois par :') }}</ul>

    <li >
        <ul class="col-sm-12">
               <li style="list-style-type: disc">{{ __('Un ictère') }}</li>
                <li style="list-style-type: disc">{{ __('Un teint pâle') }}</li>
                <li style="list-style-type: disc">{{ __('Un gros foie') }}</li>
                <li style="list-style-type: disc">{{ __('Une grosse rate') }}</li>
                <li style="list-style-type:disc" >{{ __('Des crises douloureuses abdominales et des douleurs des membres') }}</li>

            </ul>
     </li>


<p>{{ __('D\'autres symptômes sont moins évocateurs :')}}</p>

    <ul class="col-sm-12">

                                      <li  style="list-style-type: disc">{{ __('Infections respiratoires à répétition')}}</li>
                                      <li  style="list-style-type: disc">{{ __('Convulsions') }}</li>
                                      <li  style="list-style-type: disc">{{ __('Coma') }}</li>
                                      <li style="list-style-type: disc">{{ __('Paralysies') }}</li>
                                      <li style="list-style-type: disc">{{ ('Insuffisance cardiaque') }}</li>
                                      <li style="list-style-type: disc">{{ ('Hématurie') }}</li>

    </ul>



</div>

     <!-- ******************** Services Starts Here ******************* -->

     {{-- $tat=DB::table("posts") --}}
     {{-- ->select("posts.*") --}}
     {{-- ->get(); --}}


      <section class="services container-fluid">
        <div class="container">
           <div class="session-title">
               <p>{{ __("approfondir") }}</p>
               <h2>{{ __("parlons plus de ca") }}parlons plus de ca</h2>
           </div>
           <div class="service-row row">
                @foreach($post as $posts)

                <div class="col-md-4">

                    <div class="servic-col">
                        <form method="POST" action="{{route('approfond',[app()->getLocale(),$posts->id])}}">
                     {{ csrf_field() }}


<input type="submit" value="{{ $posts->title }}" name="id" class="btn btn-outline-info" >

                           </form>



                          <h4>{{ $posts->title }}</h4>
                           <p>{{ $posts->excerpt }} </p>
                    </div>
               </div>
              @endforeach
           </div>
          </div>
    </section>



     <!-- ******************** Services Starts Here ******************* -->
     <?php
     $tot=DB::table("Mores")
     ->select("Mores.*")
     ->where('id','2')
     ->get();
     ?>
  <?php
  $tit=DB::table("Mores")
  ->select("Mores.*")
  ->where('id','1')
  ->get();
  ?>
<?php
$tat=DB::table("Mores")
->select("Mores.*")
->where('id','3')
->get();
?>
     <section class="container-fluid causes">
        <div class="container">
            <div class="session-title row">
            <p>{{ __("un peu plus?") }}</p>
            <h2>{{ __("suivez nous") }}</h2>
        </div>
        <div class="cuses-row row" style="max-width:auto;">
            @foreach($tot as $past)

            <div class="col-md-4">
                 <div class="causen-ccover">


                <div class="caus-img">
                    <img src="{{ asset('/storage/'.$past->image) }}" alt="">
                </div>

                <div class="caus-detail">
                    <h4>{{ $past->title }}</h4>
                    <p>{{ $past->detail }}</p>
                </div>

                <div class="donat-btn">
                    <a href="{{route('moelle',app()->getLocale())}}"class="btn btn-danger">voire</a>
                </div>


            </div>

            </div>
            @endforeach



               @foreach($tit as $past)

               <div class="col-md-4">
                    <div class="causen-ccover">


                   <div class="caus-img">
                       <img src="{{ asset('/storage/'.$past->image) }}" alt="">
                   </div>

                   <div class="caus-detail">
                       <h4>{{ $past->title }}</h4>
                       <p>{{ $past->detail }}</p>
                   </div>

                   <div class="donat-btn">
                       <a href="{{route('vivredrepa',app()->getLocale())}}"class="btn btn-danger">voire</a>
                   </div>


               </div>

               </div>
               @endforeach

                  @foreach($tat as $past)

                  <div class="col-md-4">
                       <div class="causen-ccover">


                      <div class="caus-img">
                          <img src="{{ asset('/storage/'.$past->image) }}" alt="">
                      </div>

                      <div class="caus-detail">
                          <h4>{{ $past->title }}</h4>
                          <p>{{ $past->detail }}</p>
                      </div>

                      <div class="donat-btn">
                          <a href="{{route('recherche',app()->getLocale())}}"class="btn btn-danger">voire</a>
                      </div>


                  </div>

                  </div>
                  @endforeach
              </div>

        </div>

     </section>

@endsection



