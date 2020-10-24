@php
    /** @var \App\Models\University $university */
@endphp
<div class="box">
    <div class="columns level mb-2">

        <div class="column">
            <a href="{{$university->url}}">
            <figure class="has-text-centered-mobile">
                <img src="{{ $university->profile_photo_url }}">
            </figure>
            </a>
        </div>
        <div class="column is-two-thirds">
            <h3 class="has-text-weight-bold"><a href="{{$university->url}}"> {{ $university->name }}</a></h3>
            <p class="has-text-grey">{{ $university->address }}</p>
            <div class="tags">
                @foreach($university->workAreas as $workArea)
                <a href="{{$workArea->url}}" class="tag is-primary is-medium mb-2 mt-2 mr-2">{{$workArea->name}}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
