@extends('layouts.app')

@section('content')



<div class="container d-flex justify-content-center my-5">
    <div>
        @if(session()->has('upload_not_successful_message'))
        <div class="alert alert-danger">
            {{ session('upload_not_successful_message') }}
        </div>
        @elseif(session()->has('upload_successful_message'))
        <div class="alert alert-success">
            {{ session('upload_successful_message') }}
        </div>
        @endif
        <form action="{{ url('/websites/upload') }}" method="POST" enctype="multipart/form-data" class="p-4 border rounded shadow-sm bg-light">
            @csrf
            <div class="mb-3">
                <div class="mb-3">
                    <label for="siteName" class="form-label">What Should We Call Your Website?</label>
                    <input class="form-control" type="text" name="site_name" id="siteName">
                </div>
                <div class="mb-3">
                    <label for="siteFiles" class="form-label">Upload Your Website (ZIP File)</label>
                    <input class="form-control" type="file" name="site_zip" id="siteFiles" accept=".zip" aria-describedby="fileHelp">
                    <div id="fileHelp" class="form-text">Upload a ZIP file containing your entire website.</div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Upload Website</button>
            </div>
        </form>
    </div>
</div>
@endsection