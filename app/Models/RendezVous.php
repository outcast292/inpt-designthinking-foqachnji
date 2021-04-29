<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model {
    use HasFactory;

    protected $fillable = [
        'service_user_id',
        'user_id',
        'date_rendezvous',
    ];

    public function user() {
        return $this->belongsTo("\App\Models\User");
    }

    public function serviceUser() {
        return $this->belongsTo("\App\Models\ServiceUser");
    }
}
