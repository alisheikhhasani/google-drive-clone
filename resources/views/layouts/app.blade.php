@extends('document')
@section('body')
    <div class="h-svh flex justify-center items-center">
        <div class="w-full container">
            {{ $slot }}
        </div>
    </div>
@endsection
