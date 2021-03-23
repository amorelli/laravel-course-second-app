<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
  public function show()
  {
    // Fetch notifications on page load
    $notifications = auth()->user()->unreadNotifications;

    // Mark as read, because the page has loaded
    $notifications->markAsRead();

    return view('notifications.show', ['notifications' => $notifications]);
  }
}
