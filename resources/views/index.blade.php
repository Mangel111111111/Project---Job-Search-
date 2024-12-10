@extends('layouts.app')

@section('content')
    <div class="tableJournal">
        <table class="table table-striped table-bordered border-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Date Apply</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">Work Apply</th>
                    <th scope="col">Status</th>
                    <th scope="col">News</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vacancies as $vacancy)
                    <tr>
                        <td>{{ $vacancy->id }}</td>
                        <td>{{ $vacancy->created_at->format("d/m/y") }}</td>
                        <td>{{ $vacancy->updated_at->format("d/m/Y") }}</td>
                        <td><a href="http://127.0.0.1:8000/vacancies/{{$vacancy->id}}">{{ $vacancy->jobOffer }}</a></td>
                        <td>{{ $vacancy->jobVacancyStatus }}</td>
                        <td>
                            <ul>
                                @forelse ($vacancy->follows as $follow)
                                    <li>{{ $follow->id }} - {{ $follow->news }}</li>
                                @empty
                                    <li>❌ No news available ❌</li>
                                @endforelse
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
