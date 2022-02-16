<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Musonza\Chat\Models\Message;
use Musonza\Chat\Models\Conversation;
use Musonza\Chat\Models\Participation;
use Musonza\Chat\Chat;
use Musonza\Chat\Eventing\MessageWasSent;

class NewMessage extends Message
{
    /**
     * Adds a message to a conversation.
     *
     * @param Conversation  $conversation
     * @param string        $body
     * @param Participation $participant
     * @param string        $type
     *
     * @return Model
     */
    public function send(Conversation $conversation, string $body, Participation $participant, string $type = 'text'): Model
    {
        $message = $conversation->messages()->create([
            'body'             => $body,
            'participation_id' => $participant->getKey(),
            'type'             => $type,
        ]);

        if (Chat::broadcasts()) {
            // broadcast(new MessageWasSent($message))->toOthers();
            dd($message);
        } else {
            // event(new MessageWasSent($message));
        }

        $this->createNotifications($message);

        return $message;
    }
}
