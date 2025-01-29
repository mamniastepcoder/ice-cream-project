@extends('admin.layouts.app')

@section('content')

<div class="container mt-5">
    <h1>Add Company Info</h1>

    <form action="{{ route('company-info.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
         @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
   @endif
   @if (session('error'))
    <div>{{ session('error') }}</div>
@endif
        <div class="mb-3">
            <label for="company_name" class="form-label">Company Name</label>
            <input type="text" class="form-control"  name="company_name" placeholder="Enter Company Name" >
        </div>
        <div class="mb-3">
            <label for="logo" class="form-label">Company Logo</label>
            <input type="file" class="form-control"  name="logo_path" >
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

@endsection
