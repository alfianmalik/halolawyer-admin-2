<?php

namespace App\Http\Controllers\Admin;

use App\Events\StartTimeChat;
use App\Http\Controllers\Controller;
use App\Models\Administrator as AdminModel;
use App\Models\Order;
use Carbon\Carbon;
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

        $startTime = "00000000000000000";
        $endTime = \Carbon\Carbon::now()->addMinutes(30)->getPreciseTimestamp(3);
        $autoStart = "false";
        if ($order->start_chat_time) {
            $time = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s' , $order->start_chat_time,'Asia/Jakarta');
            $startTime = $time->getPreciseTimestamp(3);
            $endTime = $time->addMinutes(30)->getPreciseTimestamp(3);
            $autoStart = "true";
        }
        
        return view("admin.chat.show", compact('order', "conversation", "participants", "conversationId", "startTime", "endTime", "autoStart"));
    }

    public function startTime(Request $request)
    {
        $conversationId = $request->chat_id;    
        $order = Order::whereChatId($conversationId)->first();

        if (!$order->start_chat_time) {
            $order->update([
                "start_chat_time" => Carbon::now()
            ]);

            event(new StartTimeChat($conversationId));
        }
    }

    public function endTime(Request $request)
    {
        $conversationId = $request->chat_id;    
        $order = Order::whereChatId($conversationId)->first();

        $order->update([
            "is_finished" => 1
        ]);
    }

    public function endChat(Request $request)
    {
        $order = Order::whereOrderUuid($request->uuid)->first();
        $order->update([
            "is_finished" => 1
        ]);

        return redirect()->back();
    }
}
