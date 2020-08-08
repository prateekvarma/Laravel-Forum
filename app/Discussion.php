<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{

    protected $fillable = ['title', 'content', 'slug', 'user_id', 'channel_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
