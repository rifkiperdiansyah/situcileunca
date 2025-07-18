<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Models\Tiket;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;


class TransactionController extends Controller

{
    function  index(){
        return view('transaction.index',[
            'title' => 'Transaction'
        ]);
}
}