<a href="{{ route('companies.single', ['company' => $company]) }}"  class="box">
    <div class="columns level">
        <div class="column">
            <figure class="has-text-centered-mobile">
                <img src="{{ $company->profile_photo_url }}">
            </figure>
        </div>
        <div class="column is-two-thirds">
            <h3 class="has-text-weight-bold">{{ $company->name }}</h3>
            <p class="has-text-grey">{{ $company->address }}</p>
        </div>
    </div>
    @if(\App\Helpers\NCFU::auth() == 'student')
        <div class="column has-text-right">
            <span onclick="event.preventDefault(); toastr.success('Компания добавлена в избранное')">Добавить в избранное</span>
        </div>
    @endif
</a>