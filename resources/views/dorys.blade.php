@extends('layouts.app')

@section('content')


@if(Session()->has('success'))


<div class="alert-alert-success">
   {{Session::get('succes') }}
</div>
@endif
@if(Session()->has('error'))



<div class="alert-alert-danger">
    {{Session::get('error') }}
</div>
@endif

    <div class="about-us">
        <div class="container">
            <div class="session-title">
                <h2>presentation de dorys</h2>
            </div>
            <div class="about-row row">
                <div class="col-md-8">
                    <div class="abut-detail">
                         <h3>{{ __("notre association") }}</h3>
                        <p>{{ __("DORYS est une association de lutte contre la drépanocytose. Elle a été enregistrée par le Tribunal d’Instance de Strasbourg au Registre des associations le 23/02/04, au volume 82 folio n° 45.Elle est gérée par ses statuts") }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="assets/images/about_img.png" alt="">
                </div>
            </div>
            <div class="about-row row">
                <div class="col-md-8">
                    <div class="abut-detail">
                         <h3>{{ __("Objectifs de l’association DORYS") }}</h3>
                        <p><li>
                            <ul class="col-sm-12" >
                                    <li style="list-style-type: circle">{{ __('Formation, Sensibilisation,') }}</li>
                                    <li style="list-style-type: circle">{{ __('par renforcement du dépistage dans les populations à risque et une meilleure prise en charge des malades,') }}</li>
                                    <li style="list-style-type: circle">{{ __('aide à la mise en place sécurité transfusionnelle,') }}</li>
                                    <li style="list-style-type: circle">{{ __('aide à l’amélioration de la qualité de l’eau : l’hydratation est très importante chez les drépanocytaires') }}</li>


                                </ul>
                         </li></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="assets/images/about_img.png" alt="">
                </div>
            </div>
        </div>
        <div class="about-row row">
            <div class="col-md-8">
                <div class="abut-detail">
                     <h4>{{ __("Les membres de son bureau sont :") }}</h4>
                     <p><strong>{{ __("Présidente ")}}</strong> {{ __("Constant VODOUHE, Recherche Biomédicale") }}</p>
                     <p><strong>{{ __("Vice-Présidente ")}}</strong> {{ __(":Laurence LUTZ, Médecin référent de la drépanocytose en Alsace. Service de Pédiatrie Spécialisée aux Hôpitaux Universitaires de Strasbourg") }}</p>
                     <p><strong>{{ __("Secrétaire")}}</strong> {{ __("Lydia LEHR, Pharmacien Biologiste à l’Institut de Chimie Biologique des Hôpitaux Universitaires de Strasbourg") }}</p>
                     <p><strong>{{ __("Trésorier")}}</strong> {{ __(":Salomon LEVY, Biochimiste Retraité aux Hôpitaux Universitaires de Strasbourg, ancien Maître de Conférence à l’Université de Strasbourg") }}</p>

                    <img src="assets/images/count.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <img src="assets/images/about_img.png" alt="">
            </div>
        </div>
    </div>

     <!-- ******************** Services Starts Here ******************* -->

     <?php
     $pap=DB::table("activites")
     ->select("activites.*")
     ->where('categorie','france')
     ->get();
     ?>
     <section class="services container-fluid">
         <div class="container">
            <div class="session-title">

                <h2>{{ __("les activites de dorys") }}</h2>
                @foreach($pap as $past)
                <h3>{{ __("les activites de dorys en") }} {{ $past->categorie }}</h3>
                <div class="cuses-row row">

                    <div class="col-md-4">
                         <div class="causen-ccover">



                        <div class="caus-img">
                         <img src="{{ asset('/storage/'.$past->image) }}" alt="">
                        </div>

                        <div class="caus-detail">
                         <h4 class="card-title center">{{ $past->title }}</h4>
                         <p>{{ $past->body }}</p><br>
                         <object >
                            <?php $broch= json_decode($past->brochure);

                            ?>
                             @foreach($broch as $broch)
                            <p><a href="/storage/{{$broch->download_link }}" download="" class="btn btn-danger">telechargement</a></p>
                            @endforeach
                         </object>


                        </div>




                    </div>

                    </div>
                    @endforeach
                </div>
                </div>


<?php
$pip=DB::table("activites")
->select("activites.*")
->where('categorie','international')
->get();
?>

    <div class="container">
       <div class="session-title">
           @foreach($pip as $past)
           <h3>{{ __("les activites de dorys en") }}{{ $past->categorie }}</h3>
           <div class="cuses-row row">

               <div class="col-md-4">
                    <div class="causen-ccover">



                   <div class="caus-img">
                    <img src="{{ asset('/storage/'.$past->image) }}" alt="">
                   </div>

                   <div class="caus-detail">
                    <h4 class="card-title center">{{ $past->title }}</h4>
                    <p>{{ $past->body }}</p><br>
                    <object >
                        <?php $broch= json_decode($past->brochure);

                        ?>
                         @foreach($broch as $broch)
                        <p><a href="/storage/{{$broch->download_link }}" download="" class="btn btn-danger">telechargement</a></p>
                        @endforeach
                    </object>
                   </div>




               </div>

               </div>
               @endforeach
           </div>
           </div>

</section>

<section id="newsletter-1" class="section-padding back-size newsletter">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h2>{{ __("INSCRIVEZ-VOUS A NOTRE NEWSLETTER") }}</h2>
                <p>{{ __("Abonnez-vous pour recevoir nos mises à jour intéressantes") }}</p>
                <form method="post" action="{{route('newsletter.store',app()->getLocale())}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" name="email" class="form-control input-lg" placeholder="Entrez votre adresse email" required/>
                            <span class="input-group-btn"><button type="submit" class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                        </div>
                    </div>
                </form>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end newsletter-1 --s

@endsection
