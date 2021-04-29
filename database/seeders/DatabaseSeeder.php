<?php

namespace Database\Seeders;

use App\Models\RendezVous;
use App\Models\ServiceUser;
use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        //User::factory(10)->create();
        //ServiceUser::factory(10)->create();
        RendezVous::factory(10)->forUser()->forServiceUser(["id" => 1])->create();
    }
}
