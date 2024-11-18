@extends('layouts.main')

@section('content')
    <div class="grid">
        @foreach ($array as $item)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset($item['path']) }}"  class="card-img-top" alt="Товар">
                <div class="card-body">
                    <h5 class="card-title"> {{ ($item['title']) }} </h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> {{ ($item['price']) }} рублей </li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection