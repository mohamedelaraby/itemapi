@extends('layouts.app')

@section('title','create')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card card-body mt-5 p-2 text-dark mx-auto">
            <h3 class="text-center">Upload Photo</h3>
            {!! Form::open(['action' => 'PhotosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {{Form::token()}}
             {{Form::bsText('title','', 'Enter photo title')}}
             {{Form::bsTextArea('description','', 'Enter Photo description')}}
            {{Form::hidden('album_id',$album_id)}}
             {{Form::bsFile('photo')}}
             {{Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
</div>

 

    {{-- // @End of content section --}}
@endsection 
