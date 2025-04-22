<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Ticket;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('ticket')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $tickets = Ticket::all();
        return view('orders.create', compact('tickets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'buyer_name' => 'required',
            'ticket_id' => 'required|exists:tickets,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $ticket = Ticket::findOrFail($request->ticket_id);
        $totalPrice = $ticket->price * $request->quantity;

        Order::create([
            'buyer_name' => $request->buyer_name,
            'ticket_id' => $ticket->id,
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
        ]);

        return redirect('/orders')->with('success', 'Order berhasil dibuat!');
    }
}
