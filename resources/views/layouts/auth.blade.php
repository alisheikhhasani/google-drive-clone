@extends('document')
@section('body')
    <div class="h-svh flex justify-center items-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col items-center gap-8">
                <h1 class="font-bold text-2xl text-center">{{ $title }}</h1>
                <div class="w-full">
                    <div class="card bg-base-200">
                        <div class="card-body">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
