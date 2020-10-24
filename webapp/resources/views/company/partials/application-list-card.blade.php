<div class="box">
    <div>
        <h3 class="has-text-weight-bold has-text-centered-mobile">{{ $application->vacancy->name }}<span class="tag is-info is-medium ml-2">{{ $application->vacancy->jobType->name }}</span></h3>
    </div>
    <div class="columns level">
        <div class="column is-two-thirds has-text-centered-mobile">
            <h3 class="has-text-weight-bold">{{ $application->student->name }}, {{ $application->student->age }} лет</h3>
            <p class="has-text-grey">{{ $application->student->university->name }}, {{ $application->student->course }} курс</p>
            <div>
                <span class="tag is-primary is-medium mb-2 mt-2 mr-2">Программирование</span>
                <span class="tag is-primary is-medium mb-2 mt-2 mr-2">Дизайн</span>
                <span class="tag is-primary is-medium mb-2 mt-2 mr-2">Laravel</span>
                <span class="tag is-primary is-medium mb-2 mt-2 mr-2">JS</span>
                <span class="tag is-primary is-medium mb-2 mt-2 mr-2">Vue.js</span>
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