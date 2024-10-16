@extends('layouts.layout-bootstrap')

@section('content')

    @if (count($photos) == 0)
        <h1 class="text-center">You have 0 photos</h1>
    @else
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Url</th>
                    <th>Anteprima</th>
                    <th>*</th>
                    <th>*</th>
                    <th>*</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($photos as $photo)
                    <tr>
                        <td>{{ $photo->id }}</td>
                        <td>{{ $photo->title }}</td>
                        <td>{{ $photo->url }}</td>
                        <td><img class="photo-preview" src="{{ $photo->url }}" alt="" srcset=""
                                style="width:100px;height:100px;object-fit:cover;"></td>
                        <td>
                            <a class="btn btn-info" href="{{ route('photos.show', ['photo' => $photo->id]) }}">DETTAGLIO</a>
                        </td>
                        <td>
                            <a class="btn btn-success"
                                href="{{ route('photos.edit', ['photo' => $photo->id]) }}">MODIFICA</a>
                        </td>
                        <td>
                            <form method='POST' action="{{ route('photos.destroy', ['photo' => $photo->id]) }}">
                                @csrf
                                @method('DELETE')

                                <input class="btn btn-danger" type="submit" value="ELIMINA">
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    @endif

@endsection
