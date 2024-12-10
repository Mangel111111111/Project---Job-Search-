
@extends('layouts.app')

@section('content')
    <div class="vacancy-details">
        <h1>{{ $vacancy->jobOffer }}</h1>
        <p><strong>ID:</strong> {{ $vacancy->id }}</p>
        <p><strong>Date Apply:</strong> {{ $vacancy->created_at->format("d/m/y") }}</p>
        <p><strong>Last Update:</strong> {{ $vacancy->updated_at->format("d/m/Y") }}</p>
        <p><strong>Status:</strong> {{ $vacancy->jobVacancyStatus }}</p>
        
        <h3>News:</h3>
        <ul>
            @foreach ($vacancy->follows as $follow)
                <li>{{ $follow->id }} - {{ $follow->news }}</li>
            @endforeach
        </ul>
    </div>
@endsection
