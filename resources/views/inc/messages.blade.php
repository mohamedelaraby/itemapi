  {{-- Show errors --}}
  @if(count($errors) > 0)
  @foreach ($errors->all() as $error )
  <div class="alert alert-danger">
    {{$error}}
  </div>
  @endforeach
@endif
 

{{-- check for session success --}}
@if(session('success'))
  <div class="alert alert-success">
    {{session('success')}}
  </div>
@endif

