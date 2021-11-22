<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailResepNonRaciksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_resep_non_raciks', function (Blueprint $table) {
            $table->id();
            $table->integer('id_resepNonRacik');
            $table->integer('id_obat');
            $table->integer('id_signa');
            $table->integer('qty');
        
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
        Schema::dropIfExists('detail_resep_non_raciks');
    }
}
