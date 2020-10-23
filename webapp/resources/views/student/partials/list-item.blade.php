@php
    /** @var \App\Models\Student $student */
@endphp
<div class="columns level is-mobile mt-2">
    <div class="column">
        <figure class="profile-photo">
            <img src="{{$student->profile_photo_url}}">
        </figure>
    </div>
    <div class="column is-two-thirds">
        <p>{{$student->name}}</p>
        <p class="is-size-7">{{$student->university->short_name}}</p>
        <p class="is-size-7">{{$student->specialty}}</p>
    </div>
</div>