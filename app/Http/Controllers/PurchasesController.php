<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NewebPay;
use Carbon\Carbon;
class PurchasesController extends Controller
{

public function index(){
    return view('purchases.index');
}

public function purchases(Request $request){
    $newebpay = new NewebPay();  //使用此物件要級的use
    $deposit=$request->deposit;
    $email=$request->email;
    return $newebpay->payment(
    Carbon::now()->timestamp,                       // 訂單編號
    $deposit,                    // 交易金額
    '測試訂單',                   // 交易描述
    $email                       // 付款人信箱
    )->submit();
  }
}
