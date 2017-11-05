<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;

class PostBookmark extends Notification
{
    use Queueable;

    public $user, $post;

    public function __construct($user, $post)
    {
        $this->user = $user;
        $this->post = $post;
    }

    
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'user' => $this->user,
            'post' => $this->post,
            'type' => 'PostBookmark'
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'user' => $this->user,
            'post' => $this->post,
            'type' => 'PostBookmark'
        ]);
    }
    
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
