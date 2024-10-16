@extends('layouts.layout-bootstrap')

@section('content')

    <form method="POST" action="{{route('photos.update', ['photo' => $photo->id])}}">

        @csrf
        @method('PUT')

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif 

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title', $photo->title) }}">
        </div>

        <div class="form-group">
            <label for="url">Url</label>
            <div style="display: flex">
                <input id="url" type="text" class="form-control" name="url" placeholder="Url" value="{{ old('url', $photo->url) }}" readonly>
                &nbsp;&nbsp;
                <button type="button" id="btn-change-url" class="btn btn-info">CHANGE&nbsp;URL</button>
            </div>
        </div> 

        <div class="form-group">
            <label for="title">Anteprima</label>
            <br>
            <img id="photo-preview" class="photo-preview" src="{{$photo->url}}" alt="" srcset="" style="width:100px;height:100px;object-fit:cover;">
        </div>     

        <button type="submit" class="btn btn-success">SUBMIT</button>

    </form>

    <script>

        document.getElementById('btn-change-url').addEventListener('click', function() {

            const photoUrl = prompt('Photo url');

            if (photoUrl != null && photoUrl.trim() != '') {

                document.getElementById('url').value = photoUrl;
                document.getElementById('photo-preview').src = photoUrl;
            }

        });

    </script>
@endsection