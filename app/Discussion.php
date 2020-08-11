<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reply;

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
    }

    public function hasBestReply()
    {
        return $this->belongsTo(Reply::class, 'reply_id'); 
    }
}
