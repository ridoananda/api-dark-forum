<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Http\Resources\NotificationResource;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
  public function index()
  {
    return NotificationResource::collection(Notification::orderByDesc('id')->get());
  }

  public function destroy(Notification $notification)
  {
    //Notification::where('user_id', $notification->user->id)->delete();
    Notification::where('id', $notification->id)->delete();
    return response()->json(['message' => 'Notifications was deleted.'], 200);
  }
}
