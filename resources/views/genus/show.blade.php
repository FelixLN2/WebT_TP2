@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h1>{{ $genus->nom }}</h1>
            <p class="lead">{{ $genus->description }}</p>

            <div class="buttons">
                <a href="{{ url('genus/'. $genus->id .'/edit') }}" class="btn btn-info">Modifier</a>
                <form action="{{ url('genus/'. $genus->id) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            
            </div>

            <h2>Animals</h2>
            @include('animal.index');
        </div>
    </div>
</div>
</div>


@endsection