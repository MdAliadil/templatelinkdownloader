@extends('layouts.app')

@section('content')
    <h1>Available Templates</h1>
    <div class="templates-list">
        @foreach($templates as $template)
            <div class="template-item">
                <h3>{{ $template->name }}</h3>
                <a href="{{ route('template.show', $template->id) }}">Preview Template</a>
            </div>
        @endforeach
    </div>
@endsection
