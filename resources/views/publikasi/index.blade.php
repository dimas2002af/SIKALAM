<!-- resources/views/publikasi/index.blade.php -->

@extends('layouts.app')

@section('title', 'Halaman Publikasi')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Dokumen Publikasi</h2>
        <div class="row">
            @foreach($documents as $document)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $document->title }}</h5>
                            <a href="{{ asset('storage/' . $document->file_path) }}" class="btn btn-primary" target="_blank">Unduh</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
