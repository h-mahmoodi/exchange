<div>
    <form wire:submit.prevent="submit">
        <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <div class="card-body">
            <div class="form-control">
                <label class="label">
                <span class="label-text text-lg mb-2">مقدار تتر را مشحص کنید</span>
                </label>
                <input type="text" placeholder="USDT Amount" class=" text-lg bg-gray-100  border-2 rounded-lg text-gray-800 border-none p-3
                @error('USDT_amount')
                border-red-800
                @enderror
                " wire:model="USDT_amount" />
            </div>

            <div class="w-full flex justify-center items-center text-xl my-3" wire:loading.remove>
                {{number_format($TotalPrice)}} تومان
            </div>






            <div class="flex flex-col items-center gap-2 justify-between my-2">
                <div class="text-sm">
                    <span>کارمزد خرید  : </span>
                    <span>2.5 %</span>
                </div>
                <div class="text-sm">
                    <span>قیمت دلار : </span>
                    <span>{{$IRR_live_price}} تومان</span>
                </div>
                <div>

                </div>
            </div>



            <div class="form-control">
                <button class="btn btn-primary text-lg font-medium" wire:loading.attr="disabled" type="submit">سفارش و خرید  </button>
            </div>
            <progress class="progress w-full progress-primary h-4 bg-gray-600" wire:loading></progress>



            </div>
        </div>
    </form>

</div>
