@extends('layouts.main')

@section('content')
    <div class="grid">
        <ul class="list-group" style="width: 500px;">
            @foreach ($reports as $report)
                <li class="list-group-item d-flex justify-content-between">
                    <div class="align-self-center">
                        {{ $report->number }}
                    </div>
                    <div class="align-self-center">
                        {{ $report->description }}
                    </div>
                    <div class="align-self-center">
                        ({{ $report->created_at }})
                    </div>
                    <div class="align-self-center">
                        <form action="{{ route('reports.destroy', $report->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Удалить</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <br>
    <div class="grid">
        <form action="{{ route('reports.store') }}" method="POST"> <!-- class="d-flex justify-content-between" -->
            @csrf
            <div class="mb-3">
                <label class="form-label">Описание</label>
                <input type="description" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
@endsection