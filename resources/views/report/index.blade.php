@extends('layouts.main')

@section('content')
    <div class="grid">
        <ul class="list-group" style="width: 500px;">
            @foreach ($reports as $report)
                <li class="list-group-item d-flex justify-content-between">
                    <div>
                        {{ $report->number }}
                    </div>
                    <div>
                        {{ $report->description }}
                    </div>
                    <div>
                        ({{ $report->created_at }})
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection