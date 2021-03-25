<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class ConversationsBestReplyController extends Controller
{
  public function store(Reply $reply)
  {
    // Authorize that the current user has permission to set the best reply
    // for the conversation

    $this->authorize('update', $reply->conversation);

    $reply->conversation->setBestReply($reply);

    return back();
  }
}
