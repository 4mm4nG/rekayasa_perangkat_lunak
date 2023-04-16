@extends('layouts.app')
@section('title')
Selamat Datang
@endsection
@section('content')
<div class="position-absolute top-50 start-50 translate-middle">
    <div id="loading" class="spinner-grow text-primary" style="width: 5rem; height: 5rem;" role="status">
        <span class="visually-hidden">
            <h1>Loading...</h1>
        </span>
    </div>
</div>
@endsection
@section('scripts')
<script>
    setTimeout(() => {
            window.location.href = "{{ route('login.index') }}"
        }, 2500);
</script>
@endsection