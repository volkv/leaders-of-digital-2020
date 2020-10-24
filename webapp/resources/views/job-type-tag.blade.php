@php
    /** @var \App\Models\JobType $jobType */
@endphp
<span class="tag {{$jobType->id == 1 ? 'is-info' : 'is-warning'}} is-medium mb-2 mt-2 mr-2">{{$jobType->name}}</span>