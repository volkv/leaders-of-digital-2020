@php
    /** @var \App\Models\Application $application */
@endphp

<div class="box">
    <div>
        <h3 class="has-text-weight-bold has-text-centered-mobile">{{ $application->vacancy->name }}<span class="tag is-info is-medium ml-2">{{ $application->vacancy->jobType->name }}</span></h3>
    </div>
    <div class="columns level">
        <div class="column is-two-thirds has-text-centered-mobile">
            <h3 class="has-text-weight-bold">{{ $application->student->name }}, {{ $application->student->age }} лет</h3>
            <p class="has-text-grey">{{ $application->student->university->name }}, {{ $application->student->course }} курс</p>
            <div class="tags">
                @each('work-area-tag',$application->student->workAreas ,'workArea' )
            </div>
        </div>
        <div class="column has-text-centered">
            <div class="mb-2">
                <p class="is-light">Рейтинг</p>
                <p class="has-text-weight-bold">{{ $application->student->rating }}</p>
            </div>
        </div>
    </div>
</div>