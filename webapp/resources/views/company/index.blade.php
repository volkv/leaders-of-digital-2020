@extends('layouts.left-menu')

@section('content')
    <h2>Компании</h2>
    @foreach($companies as $company)
        <a href="{{ route('companies.single', ['company' => $company]) }}" class="mb-2 is-block">
            @include('company.partials.card', ['company' => $company])
        </a>
    @endforeach
@endsection