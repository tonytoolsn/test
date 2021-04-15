<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NewebPay;

class PurchasesController extends Controller
{

public function index(){
    return view('purchases.index');
}

public function purchases(){
    $newebpay = new NewebPay();  //使用此物件要級的use
    return $newebpay->payment(
    '123',                       // 訂單編號
    10,                          // 交易金額
    '測試訂單',                   // 交易描述
    'tonytest@gmail.com'         // 付款人信箱
    )->submit();
}
}
