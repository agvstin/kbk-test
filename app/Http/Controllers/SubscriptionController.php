<?php

namespace App\Http\Controllers;

use App\State;
use App\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
   public function form()
   {
      $states = State::orderBy('name', 'asc')->get();

      return view('subscription/form', ['states' => $states]);
   }
   public function subscribe(Request $request)
   {
      // perform some validation on input
      $this->validate($request, [
         'email' => 'required|email|unique:subscriptions|max:255',
         'state' => 'required|exists:states,id',
      ]);

      // create subscription model
      Subscription::create([
         'email' => $request->get('email'),
         'state_id' => $request->get('state')
      ]);

      return redirect('/')->with('success', 'Thanks for subscribing!');
   }
}
