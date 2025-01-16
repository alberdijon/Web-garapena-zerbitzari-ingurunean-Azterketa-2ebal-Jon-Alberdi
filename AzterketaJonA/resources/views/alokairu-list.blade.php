@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Alokairuen lista</div>
                <table class="table">
                    <tr>
                        <th>Izena</th>
                        <th>Etxearen ida</th>
                    </tr>
                    @foreach($alokairuak as $alokairua)
                    <tr>
                        <td>{{ $alokairua->izena }}</td>
                        <td>{{ $alokairua->etxea_id }}</td>
                        <td><a href="{{ url('alokairuak/edit/' . $alokairua->id) }}" class="btn btn-warning">
                                {{ __('Eguneratu') }}
                        </a></td>
                        <td>
                            
                                <form action="{{ url('alokairuak/delete/' . $alokairua->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('delete confirmed');">
                                    Ezabatu
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <a href="{{ url('/') }}" class="btn btn-warning">
                                Etxeak ikusi
                        </a>
            </div>
        </div>
    </div>
</div>
@endsection