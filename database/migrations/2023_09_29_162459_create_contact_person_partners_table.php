<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactPersonPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_person_partners', function (Blueprint $table) {
            $table->id();
            $table->string('client_id', 20);
            $table->string('contactpeople_id', 20);
            $table->string('shareholder', 45);
            $table->string('shareholding', 45);
            $table->string('share_percent', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_person_partners');
    }
}
