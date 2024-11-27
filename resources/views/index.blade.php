@extends('layouts.app')

@section('content')
    @foreach ($vacancies as $item)
        {{$item->id}}
    @endforeach
@endsection