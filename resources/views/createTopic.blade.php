@extends('layouts.app')

@section('content')
<div class="container">
<h1>nouveau sujet</h1>
<hr>
<form method="POST" action= "{{ route('Topic.store', app()->getLocale())}}">
    {{ csrf_field() }}
    <div>
        <label for="title">Titre</label>
        <input name ='title'class="form-control" type="text" placeholder="Titre">
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Sujet</label>
      <textarea name='content'class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <input class="btn btn-primary" type="submit" value="publier">
  </form>




</div>


@endsection
