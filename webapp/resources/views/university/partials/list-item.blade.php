@php
    /** @var \App\Models\University $university */
@endphp
<a href="{{$university->url}}" class="box">
    <div class="columns level mb-2">
        <div class="column">
            <figure class="has-text-centered-mobile">
                <img src="{{ $university->profile_photo_url }}">
            </figure>
        </div>
        <div class="column is-two-thirds">
            <h3 class="has-text-weight-bold">{{ $university->name }}</h3>
            <p class="has-text-grey">{{ $university->city }}</p>
            <div>
                <span class="tag is-primary is-medium mb-2 mt-2 mr-2">Программирование</span>
                <span class="tag is-primary is-medium mb-2 mt-2 mr-2">Дизайн</span>
                <span class="tag is-primary is-medium mb-2 mt-2 mr-2">IT</span>
            </div>
        </div>
    </div>
</a>
