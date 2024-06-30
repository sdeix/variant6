<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Debt;

class SubscriberController extends Controller
{
    public function index()
    {
        return redirect('/subscribers');
    }

    public function subscribers()
    {
        $subscribers = Subscriber::all();
        return view('subscribers', compact('subscribers'));
    }

    public function debts()
    {
        $debts = Debt::with('subscriber')->get();
        return view('debts', compact('debts'));
    }

    public function addDebt(Request $request)
    {
        if ($request->isMethod('get')) {
            $subscribers = Subscriber::all();
            return view('add_debt', compact('subscribers'));
        }

        $request->validate([
            'subscriber_id' => 'required|exists:subscribers,id',
            'subscription_fee' => 'required|numeric',
            'per_minute_fee' => 'required|numeric'
        ]);

        Debt::create([
            'subscriber_id' => $request->subscriber_id,
            'subscription_fee' => $request->subscription_fee,
            'per_minute_fee' => $request->per_minute_fee
        ]);

        return redirect('/debts')->with('message', 'Задолженность успешно добавлена!');
    }
    public function addSub(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('add_subscriber');
        }


        Subscriber::create([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);

        return redirect('/subscribers')->with('message', 'Абонент успешно добавлен!');
    }

    public function deleteSubscriber($id)
    {
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();
        return redirect()->back()->with('message', 'Абонент успешно удалён!');
    }

    public function deleteDebt($id)
    {
        $debt = Debt::findOrFail($id);
        $debt->delete();
        return redirect()->back()->with('message', 'Задолженности успешно удалены!');
    }
}