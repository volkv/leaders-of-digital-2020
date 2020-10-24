@php
    /** @var \App\Models\Student $student */
@endphp

<div class="box">
    <div class="columns level">
        <div class="column">
            <figure class="profile-photo">
                <img src="{{$student->profile_photo_url}}">
            </figure>
        </div>
        <div class="column is-two-thirds has-text-centered-mobile">
            <h3 class="has-text-weight-bold">{{$student->name}}</h3>
            <p class="has-text-grey">{{$student->course}} курс "{{$student->specialty}}"</p>
            <div>
                @foreach($student->skills as  $skill)
                    <span class="tag is-primary is-medium mb-2 mt-2 mr-2">{{$skill}}</span>
                @endforeach

            </div>
        </div>
        <div class="column has-text-centered">
            <div class="mb-2">
                <p class="is-light">Успеваемость</p>
                <p class="has-text-weight-bold">{{$student->rating}}</p>
            </div>
            <div class="mb-2">
                <p class="is-light">Рейтинг</p>
                <p class="has-text-weight-bold">{{$student->rating}}</p>
            </div>
            @include('job-type-tag', ['jobType'=>$student->jobType])
        </div>
    </div>
</div>