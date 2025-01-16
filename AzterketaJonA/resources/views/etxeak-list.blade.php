@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Eraikitako etxeen lista</div>
                <table class="table">
                    <tr>
                        <th>Helbidea</th>
                        <th>Logela Kopurua</th>
                        <th>Eraikuntza Urtea</th>
                    </tr>
                    @foreach($etxeak as $etxea)
                    <tr>
                        <td>{{ $etxea->helbidea }}</td>
                        <td>{{ $etxea->logelaKopurua }}</td><td>{{ $etxea->eraikuntzaUrtea }}</td>
                        <td><a href="{{ url('/edit/' . $etxea->id) }}" class="btn btn-warning">
                                {{ __('Eguneratu') }}
                        </a></td>
                    </tr>
                    @endforeach
                </table>
                <a href="{{ url('/alokairuak') }}" class="btn btn-warning">
                                alokairuak ikusi
                        </a>
            </div>
        </div>
    </div>
</div>
@endsection