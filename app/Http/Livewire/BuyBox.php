<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use AshAllenDesign\LaravelExchangeRates\Facades\ExchangeRate;
use Validator;


class BuyBox extends Component
{

    public $USDT_amount;

    public $USDT_live_price;

    public $IRR_live_price;

    public $TotalPrice;



    protected $rules = [
        'USDT_amount' => 'required|integer|min:0',
    ];


    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }



    public function mount(){

        $this->TotalPrice=0;

        $this->getIRR();
        $this->getUSDT();


    }

    public function submit(){
        $this->validate();

    }




    public function getIRR(){
        // $IRR_response=Http::withHeaders([
        //     "Content-Type" => "text/plain",
        //     "apikey" => "MI1LQuTO403BjFRBxTjPJLJwbSYncQTT",
        // ])->get("https://api.apilayer.com/exchangerates_data/convert?to=IRR&from=USD&amount=1")->collect()['info']['rate'];
        // $this->IRR_live_price=$IRR_response;

        $this->IRR_live_price=35000;
    }


    public function getUSDT(){
        // $USDT_response=Http::get('https://api.blockchain.com/v3/exchange/tickers/USDT-USD');
        // dd($USDT_response);
        // $this->USDT_live_price=$USDT_response;
        $this->USDT_live_price=1;
    }

    public function getTotalPrice(){
        // sleep(1);
        $total=$this->USDT_amount * $this->USDT_live_price * $this->IRR_live_price;
        $total=$total + (($total*2.5)/100);
        $this->TotalPrice = $total;
    }


    public function updatedUSDTAmount(){

        try {
            $this->USDT_amount=intval( $this->USDT_amount );
            $this->validate();
            $this->getIRR();
            // $this->getUSDT();
            $this->getTotalPrice();
        } catch (\Throwable $th) {
           $this->USDT_amount=0;
           $this->TotalPrice=0;
        }
        }








    public function render()
    {


        return view('livewire.buy-box');
    }
}
