<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Site;
class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('street_add');
            $table->string('telephone');
            $table->string('city');
            $table->string('email');
            $table->string('state');
            $table->string('website');
            $table->string('pin');
            $table->string('yesno');
            $table->string('name')->nullable();
            $table->string('s_add')->nullable();
            $table->string('tel')->nullable();
            $table->string('e_city')->nullable();
            $table->string('o_email')->nullable();
            $table->string('e_website')->nullable();
            $table->string('e_state')->nullable();
            $table->string('e_pin')->nullable();
            $table->string('qstn')->nullable();
            $table->string('reg_no')->nullable();
            $table->string('upload')->nullable();
            $table->string('nop');
            $table->string('desig');




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
        Schema::dropIfExists('sites');
    }
}
