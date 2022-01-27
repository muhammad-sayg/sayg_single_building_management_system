<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id');
            $table->decimal('rent_amount', 15);
            $table->decimal('received_amount', 15)->nullable();
            $table->decimal('due_amount', 15)->nullable();
            
            $table->dateTime('received_date')->nullable();
            $table->string('rent_month')->nullable();

            $table->string('rent_start_month')->nullable();
            $table->string('rent_end_month')->nullable();
            $table->string('receipt_no')->nullable();
            $table->string('invoice_no');

            $table->integer('rent_paid_status_code');

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
        Schema::dropIfExists('rents');
    }
}
