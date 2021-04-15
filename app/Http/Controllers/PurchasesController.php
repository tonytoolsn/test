<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
    $pattern=$request->pattern;
    $email=$request->email;
    return $newebpay->payment(
    Carbon::now()->timestamp,                       // 訂單編號
    $deposit,                    // 交易金額
    $pattern,                   // 商品名稱
    $email                       // 付款人信箱
    )->submit();
  }

  public function successRedirect(){
    return redirect('purchases/success');
  }

  public function success(){
    return view('purchases.success');
  }

  public function orderSuccess(Request $request){
    //Log::info('app.requests',['request' => $request->all()]); 藍星金流回傳的資料
    return view('purchases.index');
  }

  public function back(){
    return view('purchases.back');
  }
}
