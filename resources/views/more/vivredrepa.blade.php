@extends('layouts.app')

@section('content')
@php
$tat=DB::table("Mores")
 ->select("Mores.*")
 ->where('id','1')
->get();
@endphp
@foreach ($tat as $tat)

<div class="we-are-making container-fluid">
    <div class="col mb-4">
        <div class="card">

          <img src="{{ asset('/storage/'.$tat->image) }}"class="card-img" alt="...">
          <div class="card-body">
            <h5 class="card-title center">{{ $tat->title }}</h5>
            <p class="card-text">{{ $tat->body }}</p>
          </div>
        </div>
      </div>
<div class="row row-cols- row-cols-md-2">
@isset($tat->pls_image)



<?php $bigImages = json_decode($tat->pls_image);
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
        @endisset
</div>
  </div>



</div>

</div>
@endforeach




@endsection

