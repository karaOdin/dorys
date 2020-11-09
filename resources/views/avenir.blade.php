
<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DORYS drepanocytose</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link rel="shortcut icon" href="/images/fav.jpg">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
    <header>
        <div class="container-fluid header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 logo-dv">

                        <a href="/"><img src="/storage/{{setting('site.logo')}}" alt=""></a>

                </div>
            </div>
        </div>

     <!-- ******************** Nav Starts Here ******************* -->



@foreach ($event as $item)
<?php
if( isset( $_POST['id'] ) ){
$tit=$_POST['id'];
if($title=$item ){
$tt=DB::table("Events")
  ->select("Events.*")
  ->where("title","=","$tit")
  ->get();
}}


?>
@endforeach

@foreach ($tt as $ite)
<div class="session-title">

    <h2>{{ $ite->title}}</h2>
</div>

<div class="we-are-making container-fluid">
    <div class="col-lg-12 text-part center">
       <h3> {{ $ite->theme }}</h3>
    </div>
    <div class="row row-cols-1 row-cols-md-2">
        <?php $bigImages = json_decode($ite->gallery);

        ?>
        @foreach($bigImages as $bigImage)
        <div class="col mb-4">
          <div class="card">
            <ul id="content-slider" class="content-slider">

                <li>
                    <img src="/storage/{{ $bigImage }}">
                </li>
                </ul>


          </div>
        </div>
        @endforeach
    </div>
    <div class="card text-white bg-info mb-3" style="margin-left:auto;margin-right:auto;padding:2px ;width:50rem;">
        <div class="card-header">resumer de notre congre</div>
        <div class="card-body">
          <h5 class="card-title">la date :{{ $ite->date }} <address>{{ $ite->place }}</address></h5>
          <p class="card-text">{{ $ite->resumer }}</p>
        </div>
      </div>
    </div>

<object>
    <?php $broch= json_decode($ite->brochure);

    ?>
     @foreach($broch as $broch)

   <a href="/storage/{{$broch->download_link }}" download=""> {{ $broch->original_name }}</a> </object> </div>
   @endforeach
</div>

@endforeach
<div class="footer-ablove">

</div>
<div class="footer-ablove">

</div>
<footer class="container-fluid footer-cont">
    <div class="container">
        <div class="footer-top row">
            <div class="col-md-6 foot-logo">
                <h1>{{ __(" DORYS ") }}</h1>
                <p>{{ __(" association de lutte contre la drépanocytose") }}</p>
            </div>
            <div class="col-md-6 foot-addr">

                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> 1a place des Orprhelins
                        67000 Strasbourg France</li>
                    <li><i class="fas fa-mobile-alt"></i>  00 33 (0) 6 68 51 90 68  </li>
                    <li><i class="far fa-envelope"></i> dorys.asso@gmail.com</li>
                </ul>
            </div>
        </div>



    </div>
</footer>

 <div class="copy">
    <div class="container">
        <a href="">2020 &copy; All Rights Reserved | Designed and Developed by LYNDA ALGANI</a>

        <span>
            <a href=""><i class="fab fa-github"></i></a>
            <a href=""><i class="fab fa-google-plus-g"></i>
                <span>dorys.asso@gmail.com</span></a>
           <a href=""><i class="fab fa-pinterest-p"></i></a>
            <a href="https://twitter.com/DORYS_Drepano"><i class="fab fa-twitter"></i></a>
            <a href="https://www.facebook.com/dorys.asso"><i class="fab fa-facebook-f"></i></a>
    </span>
    </div>

</div>

</body>

<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="/plugins/slider/js/owl.carousel.min.js"></script>
<script src="/js/script.js"></script>
{{--
<script src="{{asset('js/app.js')}}" defer></script> --}}
</html>
