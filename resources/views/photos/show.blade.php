@extends('layouts.layout-bootstrap')

@section('content')

    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $photo->title }}" readonly>
    </div>

    <div class="form-group">
      <label for="title">Url</label>
      <input type="text" class="form-control" name="url" placeholder="Url" value="{{ $photo->url }}" readonly>
    </div>  

    <div class="form-group">
      <label for="title">Anteprima</label>
      <br>
      <img class="photo-preview" src="{{$photo->url}}" alt="" srcset="" style="width:100px;height:100px;object-fit:cover;">
    </div>      

@endsection