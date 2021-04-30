<?php

namespace App\Http\Controllers;

use App\Models\ServiceUser;
use App\Notifications\RendezvousNotification;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller {
    public function show(ServiceUser $serviceUser) {
        //$serviceUser = ServiceUser::findOrFail($id);
        $rdv = $serviceUser->rendezVous; //->whereBetween('date_rendezvous', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        return view("service.show", ["service" => $serviceUser, "rdv" => $rdv]);
    }

    public function notify() {
        $user = Auth::user();
        $user->notify(new RendezvousNotification());
    }
}
