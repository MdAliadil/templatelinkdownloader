@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">Your Card Preview</div>
                <div class="card-body">
                    @php
                        $template = $data['selected_template'] ?? '1';
                    @endphp
                    @if($template == '1')
                        {{-- Template 1 preview here --}}
                        <div class="alert alert-info">Template 1 Preview (fill with your template 1 HTML)</div>
                        <strong>Name:</strong> {{ $data['name'] ?? '' }}<br>
                        <strong>Company:</strong> {{ $data['company'] ?? '' }}<br>
                        <strong>Slogan:</strong> {{ $data['slogan'] ?? '' }}<br>
                        <strong>Email:</strong> {{ $data['email'] ?? '' }}<br>
                        <strong>Mobile:</strong> {{ $data['mobile'] ?? '' }}<br>
                        <strong>Address:</strong> {{ $data['address'] ?? '' }}<br>
                        <strong>Website:</strong> {{ $data['website'] ?? '' }}<br>
                        <strong>LinkedIn:</strong> {{ $data['linkedin'] ?? '' }}<br>
                        <strong>Twitter:</strong> {{ $data['twitter'] ?? '' }}<br>
                        <strong>Instagram:</strong> {{ $data['instagram'] ?? '' }}<br>
                        <strong>Facebook:</strong> {{ $data['facebook'] ?? '' }}<br>
                    @elseif($template == '2')
                        {{-- Template 2 preview here --}}
                        <div class="alert alert-info">Template 2 Preview (fill with your template 2 HTML)</div>
                        <strong>Name:</strong> {{ $data['name'] ?? '' }}<br>
                        <strong>Company:</strong> {{ $data['company'] ?? '' }}<br>
                        <strong>Slogan:</strong> {{ $data['slogan'] ?? '' }}<br>
                        <strong>Email:</strong> {{ $data['email'] ?? '' }}<br>
                        <strong>Mobile:</strong> {{ $data['mobile'] ?? '' }}<br>
                        <strong>Address:</strong> {{ $data['address'] ?? '' }}<br>
                        <strong>Website:</strong> {{ $data['website'] ?? '' }}<br>
                        <strong>LinkedIn:</strong> {{ $data['linkedin'] ?? '' }}<br>
                        <strong>Twitter:</strong> {{ $data['twitter'] ?? '' }}<br>
                        <strong>Instagram:</strong> {{ $data['instagram'] ?? '' }}<br>
                        <strong>Facebook:</strong> {{ $data['facebook'] ?? '' }}<br>
                    @elseif($template == '3')
                        {{-- Template 3 preview here --}}
                        <div class="alert alert-info">Template 3 Preview (fill with your template 3 HTML)</div>
                        <strong>Name:</strong> {{ $data['name'] ?? '' }}<br>
                        <strong>Company:</strong> {{ $data['company'] ?? '' }}<br>
                        <strong>Slogan:</strong> {{ $data['slogan'] ?? '' }}<br>
                        <strong>Email:</strong> {{ $data['email'] ?? '' }}<br>
                        <strong>Mobile:</strong> {{ $data['mobile'] ?? '' }}<br>
                        <strong>Address:</strong> {{ $data['address'] ?? '' }}<br>
                        <strong>Website:</strong> {{ $data['website'] ?? '' }}<br>
                        <strong>LinkedIn:</strong> {{ $data['linkedin'] ?? '' }}<br>
                        <strong>Twitter:</strong> {{ $data['twitter'] ?? '' }}<br>
                        <strong>Instagram:</strong> {{ $data['instagram'] ?? '' }}<br>
                        <strong>Facebook:</strong> {{ $data['facebook'] ?? '' }}<br>
                    @elseif($template == '4')
                        {{-- Template 4 preview here --}}
                        <div class="alert alert-info">Template 4 Preview (fill with your template 4 HTML)</div>
                        <strong>Name:</strong> {{ $data['name'] ?? '' }}<br>
                        <strong>Company:</strong> {{ $data['company'] ?? '' }}<br>
                        <strong>Slogan:</strong> {{ $data['slogan'] ?? '' }}<br>
                        <strong>Email:</strong> {{ $data['email'] ?? '' }}<br>
                        <strong>Mobile:</strong> {{ $data['mobile'] ?? '' }}<br>
                        <strong>Address:</strong> {{ $data['address'] ?? '' }}<br>
                        <strong>Website:</strong> {{ $data['website'] ?? '' }}<br>
                        <strong>LinkedIn:</strong> {{ $data['linkedin'] ?? '' }}<br>
                        <strong>Twitter:</strong> {{ $data['twitter'] ?? '' }}<br>
                        <strong>Instagram:</strong> {{ $data['instagram'] ?? '' }}<br>
                        <strong>Facebook:</strong> {{ $data['facebook'] ?? '' }}<br>
                    @elseif($template == '5')
                        {{-- Template 5 preview here --}}
                        <div class="alert alert-info">Template 5 Preview (fill with your template 5 HTML)</div>
                        <strong>Name:</strong> {{ $data['name'] ?? '' }}<br>
                        <strong>Company:</strong> {{ $data['company'] ?? '' }}<br>
                        <strong>Slogan:</strong> {{ $data['slogan'] ?? '' }}<br>
                        <strong>Email:</strong> {{ $data['email'] ?? '' }}<br>
                        <strong>Mobile:</strong> {{ $data['mobile'] ?? '' }}<br>
                        <strong>Address:</strong> {{ $data['address'] ?? '' }}<br>
                        <strong>Website:</strong> {{ $data['website'] ?? '' }}<br>
                        <strong>LinkedIn:</strong> {{ $data['linkedin'] ?? '' }}<br>
                        <strong>Twitter:</strong> {{ $data['twitter'] ?? '' }}<br>
                        <strong>Instagram:</strong> {{ $data['instagram'] ?? '' }}<br>
                        <strong>Facebook:</strong> {{ $data['facebook'] ?? '' }}<br>
                    @endif
                    <form method="POST" action="{{ route('pdf') }}">
                        @csrf
                        @foreach($data as $key => $value)
                            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                        @endforeach
                        <button type="submit" class="btn btn-primary">Download as PDF</button>
                    </form>
                    <div class="mt-3">
                        <label>Shareable Link:</label>
                        <input type="text" class="form-control" value="{{ url()->current() }}" readonly onclick="this.select();">
                        <button class="btn btn-secondary mt-2" onclick="navigator.clipboard.writeText('{{ url()->current() }}')">Copy Link</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
