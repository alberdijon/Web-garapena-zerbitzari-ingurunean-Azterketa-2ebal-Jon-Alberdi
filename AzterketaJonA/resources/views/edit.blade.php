@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h1>{{ __('Etxea eguneratu') }}</h1>
        <form action="{{ url('/update/' . $etxea->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="id"> ID </label>
                <input type="text" class="form-control" id="id" name="id" value="{{ $etxea->id }}" disabled>
            </div>

            <div class="form-group">
                <label for="helbidea">Helbidea</label>
                <input type="text" class="form-control" id="helbidea" name="helbidea" value="{{ $etxea->helbidea }}">
            </div>

            <div class="form-group">
                <label for="logelaKopurua">Logela Kopurua</label>
                <input type="number" class="form-control" id="logelaKopurua" name="logelaKopurua" value="{{ $etxea->logelaKopurua }}">
            </div>

            <div class="form-group">
                <label for="eraikuntzaUrtea"> Eraikuntza Urtea</label>
                <input type="date" class="form-control" id="eraikuntzaUrtea" name="eraikuntzaUrtea" value="{{ $etxea->eraikuntzaUrtea }}">
            </div>

            <button type="submit" class="btn btn-primary">Eguneratu</button>
        </form>
    </div>
</div>
@endsection