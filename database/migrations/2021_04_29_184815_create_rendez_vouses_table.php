<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendezVousesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('rendez_vouses', function (Blueprint $table) {
            $table->id();
            $table->integer("service_user_id");
            $table->integer("user_id");
            $table->dateTime("date_rendezvous");
            $table->timestamps();
            $table->index("service_user_id");
            $table->index("user_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('rendez_vouses');
    }
}
