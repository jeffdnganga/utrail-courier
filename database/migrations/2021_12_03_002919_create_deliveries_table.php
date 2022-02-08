<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('luggage_name');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('route_id');
            $table->unsignedBigInteger('user_id');
            $table->date('date');
            $table->string('period');
            $table->string('pick_up_location');
            $table->string('drop_off_location');
            $table->string('featured_image')->default('default.png');
            $table->text('desc')->nullable();
            $table->string('status')->comment('1 for active and open for bids 2 cancelled 3 closed')->default('1');
            $table->string('dimenstions');
            $table->foreign('service_id')->references('id')->on('services')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('route_id')->references('id')->on('routes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('deliveries');
    }
}
