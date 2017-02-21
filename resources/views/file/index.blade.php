@extends('layouts.master')

@section('title', 'Files list')

@section('sidebar')
@endsection

@section('content')
    <p><strong>File list:</strong></p>
    <p>
        @foreach($files as $file)
            File name is: {{$file->title}}<br />
        @endforeach
    </p>
@endsection
