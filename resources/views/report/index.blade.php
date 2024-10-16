@extends('layouts.main')

@section('content')

@foreach ($reports as $report)
<div class="report">
    <div class="report-content">
        <p class="report-number">{{ $report['number'] }}</p>
        <p class="report-descr">{{ $report['description'] }}</p>
        <p class="report-date">{{ $report['created_at'] }}</p>
    </div>
</div>
@endforeach

@endsection