@extends('layouts.main')

@section('content')
    <div class="grid">
        <ul class="list-group" style="width: 500px;">
            @foreach ($reports as $report)
                <li class="list-group-item d-flex justify-content-between">
                    <div class="align-self-center">
                        {{ $report->id }}
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
    <h5>Инструменты</h5>
    <ul class="list-group" style="width: 500px;">
        <form class="list-group-item d-flex justify-content-between" action="{{ route('reports.store') }}" method="POST">
            @csrf
            <div class="align-self-center">
                <select name="id" class="form-select" disabled>
                    <option value="ID">ID</option>
                </select>
            </div>
            <div class="align-self-center">
                <input name="description" class="form-control" placeholder="Описание" maxlength="20">
            </div>
            <div class="align-self-center">
                <button type="submit" class="btn btn-outline-primary">Добавить запись</button>
            </div>
        </form>
        <form class="list-group-item d-flex justify-content-between" action="{{ route('reports.update') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="align-self-center">
                <select name="id" class="form-select">
                    @foreach ($reports as $report)
                        <option value="{{ $report->id }}">{{ $report->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="align-self-center">
                <input name="description" class="form-control" placeholder="Описание" maxlength="20">
            </div>
            <div class="align-self-center">
                <button type="submit" class="btn btn-outline-primary">Изменить запись</button>
            </div>
        </form>
    </ul>
@endsection