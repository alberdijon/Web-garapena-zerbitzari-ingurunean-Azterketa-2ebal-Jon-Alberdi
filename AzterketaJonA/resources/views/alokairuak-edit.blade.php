@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h1>{{ __('Alokairua eguneratu') }}</h1>
        <form action="{{ url('alokairuak/update/' . $alokairua->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="id"> ID </label>
                <input type="text" class="form-control" id="id" name="id" value="{{ $alokairua->id }}" disabled>
            </div>

            <div class="form-group">
                <label for="helbidea">Izena</label>
                <input type="text" class="form-control" id="izena" name="izena" value="{{ $alokairua->izena }}">
            </div>

            <div class="form-group">
                <label for="etxea_id">Etxearen id</label>
                <select class="form-control" id="etxea_id" name="etxea_id">
                    @foreach($etxeak as $etxea)
                    <option value="{{ $etxea->id }}" {{ $alokairua->etxea_id == $etxea->id ? 'selected' : '' }}>
                        {{ $etxea->id }}
                    </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Eguneratu</button>
        </form>
    </div>
</div>
@endsection