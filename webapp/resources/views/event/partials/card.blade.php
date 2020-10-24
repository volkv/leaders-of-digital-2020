@php
    /** @var \App\Models\Event $event */
@endphp

<a href="{{ route('events.single', ['event' => $event->slug]) }}"  class="box">
    <div class="columns level">

        <div class="column is-two-thirds">
            <h3 class="has-text-weight-bold">{{ $event->name }}</h3>
            <p class="has-text-grey">{{ $event->date_start->format('d.m.Y') }} - {{ $event->date_end->format('d.m.Y') }}</p>
        </div>
    </div>
</a>