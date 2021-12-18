<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Musonza\Chat\Facades\ChatFacade as Chat;

class ChatController extends Controller
{
    //

    public function index()
    {
        # code...
        $orders = Order::all();

        return view("admin.chat.index", compact("orders"));
    }

    /**
     * 
     */
    public function show(Request $request)
    {
        $order = Order::whereOrderUuid($request->order_uuid)->first();

        $conversationId = $order->chat_id;
        $conversation = Chat::conversations()->getById($order->chat_id);
        $participants = $conversation->getParticipants();


        return view("admin.chat.show", compact('order', "conversation", "participants", "conversationId"));
    }
}
