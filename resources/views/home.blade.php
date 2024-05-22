@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="row d-flex">
        @foreach ($trains as $train)
            @if ($train->is_cancelled) 
                <div class="col-3 my-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->company }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Partenza: {{ $train->departure_station }}</h6>
                            <p class="card-text">Orario: {{ $train->departure_time }}</p>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Arrivo: {{ $train->arrival_station }}</h6>
                            <p class="card-text">Orario: {{ $train->arrival_time }}</p>
                        </div>
                    </div>
                </div>
            @endif
         @endforeach
    </div>
</div>
    
@endsection