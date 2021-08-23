@extends('layouts.plantilla')

@section('contenido')
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    </form>
@endsection
