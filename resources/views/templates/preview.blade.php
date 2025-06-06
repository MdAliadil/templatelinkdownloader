@extends('layouts.app')

@section('content')
    <h1>Live Preview: {{ $template->name }}</h1>
    <div class="preview-content">
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <div>{!! $template->content !!}</div> 
    </div>
@endsection
