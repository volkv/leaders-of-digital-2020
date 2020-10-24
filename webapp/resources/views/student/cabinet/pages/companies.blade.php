
@extends('student.cabinet.layout')

@section('content')
    <div class="content">
        <h2>Рекомендованные компании</h2>
    </div>
    @each('company.partials.card', $companies, 'company')

@endsection