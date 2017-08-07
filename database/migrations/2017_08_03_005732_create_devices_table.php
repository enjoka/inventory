<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->increments('dvid')->change();
	    $table->string('description',255)->change();
	    $table->string('type')->change();
            $table->string('serial',50);
	    $table->integer('cid')->unsigned();
	    $table->integer('eid')->unsigned();
            $table->integer('sid')->unsigned();
	    /*$table->foreign('cid')->references('cid')->on('companies')->change();
	    $table->foreign('eid')->references('eid')->on('employees')->change();
	    $table->foreign('sid')->references('sid')->on('suppliers')->change();*/
	    $table->date('dateOfPurchase')->change();
	    $table->date('replacementDate')->change();
	    $table->float('purchaseamount',20,2)->change();
	    $table->integer('status')->change();
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
        Schema::dropIfExists('devices');
    }
}
