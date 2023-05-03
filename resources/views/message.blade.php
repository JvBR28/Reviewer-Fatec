@extends('root')
@extends('navbar')

@section('main')
    <main>
        <h1>{{ $message }}</h1>
        <a href="{{ $continue_link }}">Continuar</a>
    </main>
@endsection
