@extends('layouts.app')

@section('content')


<?php
$topics=DB::table("users")
->join('topics','user_id','=','users.id')
->select('*')
->get();
?>
<div class="container">


    <div class="list-group">
        <div >
            <ul>
              <li>
                <a >{{__("creer un topic")}} </a>
              </li>
              </ul>
              </div>
        @foreach($topics as $topic)
        <div><h4><a href="{{route('topics',app()->getLocale())}}">
            {{ $topic->title }}</a></h4>
            <p>{{ $topic->content }}</p>
            <div class="d-flex justify-content-between">
                <small>Poste le {{ $topic->created_at}}</small>

                <span class="badge badge-primary">{{ $topic->name }}</span>



            </div>
        </div>



        @endforeach
    </div>
</div>

@endsection
