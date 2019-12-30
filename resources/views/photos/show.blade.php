@extends('layouts.app')

@section('title','show')
@section('content')

{{--   Image title and description --}}
    <h3 class="display-5">{{$photo->title}}</h3>


{{--Back to gallery button--}}
<div class="row mt-3 my-2">
    <div class="col-sm-4 col-md-4">
        <a href="/albums/{{$photo->album_id}}" class="btn btn-info" >Back  to Gallery</a>
    </div>
</div>
<hr>
{{--   Image --}}
<img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}" class="img-thumbnail rounded"><br>

<br>

{{-- Delete button--}}
    {!! Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST']) !!}
    {{Form::token()}}
    {{Form::hidden('_method','DELETE')}}
    {{Form::bsSubmit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}


<hr>
{{--Image Size--}}
<small class="text-justify">Size: {{$photo->size}} mb</small>

{{--@end of section--}}
@endsection
