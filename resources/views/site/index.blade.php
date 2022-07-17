@extends('site.layouts.master')

@section('body')


<div class="bg-slate-800 hero min-h-screen"
style="background-image: url('{{asset('assets/svg/bg1.svg')}}'); background-size: contain;
background-repeat-y: no-repeat;
background-position-x: 0px;
animation: mymove 80s infinite;">
    <div class="container mx-auto md:px-60">

        <div class="flex gap-3 justify-between bg-slate-900 p-8 rounded-xl items-center">
            <div class=" w-3/5">
                <h1 class="text-6xl text-gray-300">DIGI USDT </h1>
                <div class="text-3xl text-gray-300">
                    دیجی یو اس دی تی (تتر)
                </div>
                <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
            </div>
            <div class="w-2/5">
                @livewire('buy-box')
            </div>
        </div>
    </div>
</div>

@endsection
