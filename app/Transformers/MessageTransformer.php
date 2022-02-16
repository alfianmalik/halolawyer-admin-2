<?php

namespace App\Transformers;

use Musonza\Chat\Transformers\Transformer;

class MessageTransformer extends Transformer
{

    public function transform($message)
    {
        // dd($message->participation);
        return [
            'body' => $message->body,
            'conversation_id' => $message->conversation_id,
            'type' => $message->type,
            'read_at' => $message->read_at,
            'created_at' => $message->created_at,
            'direct_message' => $message->direct_message,
            'sender' => $message->sender,
            // 'participant' => $message->participation,
            'messageable_id' => $message->participation->messageable_id,
            'messageable_type' => $message->participation->messageable_type,
            'is_sender' => $message->is_sender
        ];
    }
}
