<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_table', function (Blueprint $table) {
            $table->string('leader_name');
            $table->string('Group_id');
            $table->boolean('test_taken')->default(0);

            // Change Q1 to Q20 to integer type and nullable
            $table->integer('Q1')->nullable();
            $table->integer('Q2')->nullable();
            $table->integer('Q3')->nullable();
            $table->integer('Q4')->nullable();
            $table->integer('Q5')->nullable();
            $table->integer('Q6')->nullable();
            $table->integer('Q7')->nullable();
            $table->integer('Q8')->nullable();
            $table->integer('Q9')->nullable();
            $table->integer('Q10')->nullable();
            $table->integer('Q11')->nullable();
            $table->integer('Q12')->nullable();
            $table->integer('Q13')->nullable();
            $table->integer('Q14')->nullable();
            $table->integer('Q15')->nullable();
            $table->integer('Q16')->nullable();
            $table->integer('Q17')->nullable();
            $table->integer('Q18')->nullable();
            $table->integer('Q19')->nullable();
            $table->integer('Q20')->nullable();

            // Change total to integer
            $table->integer('total')->nullable();
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
        Schema::dropIfExists('test_table');
    }
};
