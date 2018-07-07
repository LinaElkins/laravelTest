@extends('layout')

@section('title')
About
@stop

@section('content')
<div class="container">
            <div class="content">
                <div class="title">About</div>
                <h1>{{$first}} {{$last}}</h1>
            </div>
        </div>

@stop