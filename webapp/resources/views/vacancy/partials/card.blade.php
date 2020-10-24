@php
    /** @var \App\Models\Vacancy $vacancy */
@endphp

<a href="{{$vacancy->url}}" class="box">
    <div class="columns">
        <div class="column is-three-quarters">
            <div>
                <span
                    class="tag {{$vacancy->job_type_id == 1 ? 'is-info' : 'is-warning'}} is-medium mb-2 mt-2 mr-2">{{$vacancy->jobType->name}}</span>
            </div>
            <h3 class="has-text-weight-bold">{{$vacancy->name}}</h3>
            <p class="has-text-grey">{{$vacancy->company->name}}</p>

            <div class="is-flex">  <i class="fas fa-map-marker"></i><p>{{$vacancy->city}}</p></div>


        </div>
        @if(\App\Helpers\NCFU::auth() == 'student')
            <div class="column has-text-right">
                <span onclick="event.preventDefault(); toastr.success('Вы откликнулись на вакансию')">Откликнуться</span>
            </div>
        @endif
    </div>
    @if(isset($showComments))
        <div class="ml-4 is-size-7">
            <p><strong>Мехтиев Руслан Самирович:</strong> Крутая компания, и стажировка была классной!</p>
            <p><strong>Волков Павел:</strong> А помоему неоч(</p>
            <a>Показать больше</a>
        </div>
    @endif
</a>