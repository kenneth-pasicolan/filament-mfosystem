<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositionforms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dispositiontype_id')->constrained()->cascadeOnDelete();
            $table->foreignId('chargeabilitytype_id')->constrained()->cascadeOnDelete();
            $table->foreignId('chargeability_id')->constrained()->cascadeOnDelete();
            $table->foreignId('unit_id')->constrained()->cascadeOnDelete();
            $table->foreignId('quarter_id')->constrained()->cascadeOnDelete();
            $table->date('dated');
            $table->string('subject');
            $table->string('particular');
            $table->string('amount');
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
        Schema::dropIfExists('dispositionforms');
    }
};
