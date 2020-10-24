<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>СКФУ - Мой Старт</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    <link rel="preload" href="/fonts/ProximaNova-Regular.woff2" as="font" crossorigin="anonymous">
    <link rel="preload" href="/fonts/ProximaNova-Bold.woff2" as="font" crossorigin="anonymous">

</head>
{{--@dump(\App\Helpers\NCFU::auth())--}}

@php
    $args = [];

    if (isset($toastr)) {
    $args['toastr'] = [
    'type' => $toastr['type'],
    'message' => $toastr['message']
    ];
    }


@endphp


<script>


    window.NCFU = <?= json_encode($args) ?>;

</script>