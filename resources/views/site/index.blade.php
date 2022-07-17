@extends('site.layouts.master')

@section('body')


<div class="bg-base-200 hero min-h-screen">
    <div class="container mx-auto">
        <div>
            @livewire('buy-box')
        </div>
        <div class="text-center lg:text-left">
            <h1 class="text-5xl font-bold">Login now!</h1>
            <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
        </div>
    </div>
</div>

@endsection
