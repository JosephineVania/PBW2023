@extends('layouts.main')
@section('title', 'eMaha - Home')
@section('content')
    <div class="card mt-4">
        <div class="card-body">
            <h1>{{ Auth::user()->nama ?? ''}}</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident est atque fuga corrupti maxime aliquid, laborum veniam, culpa sunt ut deleniti obcaecati qui odio velit iure tempore nulla aperiam, quasi reiciendis laudantium ea! Blanditiis laudantium, ratione, amet maxime harum, quod error aspernatur ea sequi optio ab rerum quaerat deserunt eos!</p>
        </div>
    </div>
@endsection