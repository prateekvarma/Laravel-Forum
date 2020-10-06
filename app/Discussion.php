<?php

namespace App;

use App\Reply;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\ReplyMarkedAsBestReply;

class Discussion extends Model
{

    protected $fillable = ['title', 'content', 'slug', 'user_id', 'channel_id', 'reply_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reply()
    {
        return $this->hasMany(Reply::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function markAsBestReply(Reply $reply)
    {
        $this->update([
            'reply_id' => $reply->id
        ]);
        
        //send notification when marked best reply
        //the 'user' below is a reference to the model relationship
        $reply->user->notify(new ReplyMarkedAsBestReply($reply->discussion));
    }

    public function hasBestReply()
    {
        return $this->belongsTo(Reply::class, 'reply_id'); 
    }
}
