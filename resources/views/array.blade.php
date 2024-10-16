@extends('layouts.main')

@section('content')
<div class="grid-container">
    @foreach ($array as $item)
    <div class="grid-item">
        <div class="card">
            <img src="{{ $item['path'] }}" alt="{{ $item['title'] }}" class="card-image">
            <div class="card-content">
                <h3 class="card-title">{{ $item['title'] }}</h3>
                <p class="card-price">{{ $item['price'] }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection