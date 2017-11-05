<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;

class PostComment extends Notification
{
    use Queueable;

    public $user, $post, $comment;

    public function __construct($user, $post, $comment)
    {
        $this->user = $user;
        $this->post = $post;
        $this->comment = $comment;
    }

    
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'user' => $this->user,
            'post' => $this->post,
            'comment' => $this->comment,
            'type' => 'PostComment'
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'user' => $this->user,
            'post' => $this->post,
            'comment' => $this->comment,
            'type' => 'PostComment'
        ]);
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
