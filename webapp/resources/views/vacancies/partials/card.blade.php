@php
    /** @var \App\Models\Vacancy $vacancy */
@endphp

<div class="box">
    <div class="columns">
        <div class="column is-three-quarters">
            <div>
                <span class="tag is-info is-medium mb-2 mt-2 mr-2">{{$vacancy->name}}</span>
            </div>
            <h3 class="has-text-weight-bold">Junior Web-Developer</h3>
            <p class="has-text-grey">ООО "Ромашка"</p>
            <p>Отдел сопровождения крупной логистической компании ищет
                студента</p>
        </div>
        @if(\App\Helpers\NCFU::auth() == 'student')
            <div class="column has-text-right">
                <a>Откликнуться</a>
            </div>
        @endif
    </div>
    @if(isset($showComments))
        <div class="ml-4 is-size-7">
            <p><a><strong>Мехтиев Руслан Самирович:</strong></a> Крутая компания, и стажировка была классной!</p>
            <p><a><strong>Волков Павел:</strong></a>  А помоему неоч(</p>
            <a>Показать больше</a>
        </div>
    @endif
</div>