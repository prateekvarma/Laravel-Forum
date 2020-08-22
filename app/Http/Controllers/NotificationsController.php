<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function show()
    {
        //mark all notifications as read
        auth()->user()->unreadNotifications->markAsRead();

        //display all notifications
        return view('user.notifications', ['notifications' => auth()->user()->notifications]);
    }
}
