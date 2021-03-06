<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PaymentReceived;

class PaymentsController extends Controller
{
  public function show()
  {
    return view('payments.create');
  }

  public function store()
  {
    Notification::send(request()->user(), new PaymentReceived(900));

    // ProductPurchased::dispatch('toy') is the same as below
    event(new ProductPurchased('toy'));

    // return redirect('/payments/create');
  }
}
