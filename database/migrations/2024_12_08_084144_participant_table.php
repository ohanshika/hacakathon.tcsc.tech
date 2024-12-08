<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Participant', function (Blueprint $table) {
            $table->id('Group_id'); // Auto-increment primary key
            $table->string('college_name');
            $table->string('leader_name');
            $table->string('leader_class');
            $table->string('leader_rollno');
            $table->string('leader_phoneno');
            $table->string('leader_email');
            $table->string('member1_name')->nullable();
            $table->string('member1_class')->nullable();
            $table->string('member1_rollno')->nullable();
            $table->string('member1_phoneno')->nullable();
            $table->string('member1_email')->nullable();
            $table->string('member2_name')->nullable();
            $table->string('member2_class')->nullable();
            $table->string('member2_rollno')->nullable();
            $table->string('member2_phoneno')->nullable();
            $table->string('member2_email')->nullable();
            $table->string('member3_name')->nullable();
            $table->string('member3_class')->nullable();
            $table->string('member3_rollno')->nullable();
            $table->string('member3_phoneno')->nullable();
            $table->string('member3_email')->nullable();
            $table->string('transaction_id');
            $table->timestamps();
        });

        // Set the starting value for the auto-increment column
        DB::statement("ALTER TABLE Participant AUTO_INCREMENT = 202401;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Participant');
    }
};
