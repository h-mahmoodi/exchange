<div>
    <form wire:submit.prevent="submit">
        <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-slate-800">
            <div class="card-body">
                <div class="text-xl">
                    خرید تتر USDT
                </div>
                <hr>
            <div class="form-control">
                <label class="label flex">
                <span class="label-text text-sm text-gray-400">مقدار تتر را مشحص کنید</span>
                </label>
                <input type="text" placeholder="USDT Amount" class=" text-lg bg-gray-100  border-2 rounded-lg text-gray-800 border-none p-3
                @error('USDT_amount')
                border-red-800
                @enderror
                " wire:model="USDT_amount" />
            </div>




            <div>

            </div>


            <div class="w-full flex justify-center items-center text-2xl my-2 text-primary" wire:loading.remove>
                {{number_format($TotalPrice)}} تومان
            </div>

            <div class="flex w-full justify-between text-gray-400 text-xs">


                <div class="">
                    <span>کارمزد خرید  : </span>
                    <span>2.5 %</span>
                </div>
                <div class="">
                    <span>قیمت دلار : </span>
                    <span>{{$IRR_live_price}} تومان</span>
                </div>
            </div>



            <div class="form-control">
                <button class="btn btn-primary text-base font-medium flex justify-center items-center" wire:loading.attr="disabled" type="submit">
                    <span>ادامه مراحل خرید USDT</span>
                    {{-- <img class="w-10" src="{{asset('assets/svg/next.svg')}}" alt=""> --}}
                </button>
            </div>
            <progress class="progress w-full progress-primary h-4 bg-gray-600 rounded-lg" wire:loading></progress>



            </div>
        </div>
    </form>

</div>
