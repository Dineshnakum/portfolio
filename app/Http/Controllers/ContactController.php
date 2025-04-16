<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Notifications\ContactNotification;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function contact(ContactRequest $request)
    {
        $inputs = $request->validated();

        Notification::route('mail', [
            'dineshnakum579@gmail.com' => 'Portfolio',
        ])->notify(new ContactNotification($inputs));
        return response()->json(['success' => 'Your request accepted. I will contact you as soon as possible'], 200);
    }
}
