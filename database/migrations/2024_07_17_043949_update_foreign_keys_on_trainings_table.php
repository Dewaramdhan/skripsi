<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignKeysOnTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trainings', function (Blueprint $table) {
            // Drop foreign key constraint
            $table->dropForeign(['penduduk_id']);
            
            // Add foreign key constraint with ON DELETE CASCADE
            $table->foreign('penduduk_id')
                ->references('id')
                ->on('penduduks')
                ->onDelete('cascade');

            // Optionally, if you want to also cascade on updates, you can add:
            // ->onUpdate('cascade');
        });

        // Optional: Do the same for the reverse relation if needed
        Schema::table('penduduks', function (Blueprint $table) {
            // If there's a foreign key in penduduks referencing trainings
            // $table->dropForeign(['training_id']);
            
            // Add foreign key constraint with ON DELETE CASCADE
            // $table->foreign('training_id')
            //     ->references('id')
            //     ->on('trainings')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trainings', function (Blueprint $table) {
            // Drop foreign key constraint with ON DELETE CASCADE
            $table->dropForeign(['penduduk_id']);

            // Add the original foreign key constraint back
            $table->foreign('penduduk_id')
                ->references('id')
                ->on('penduduks');
        });

        // Optional: Reverse the same for the reverse relation if needed
        Schema::table('penduduks', function (Blueprint $table) {
            // Drop foreign key constraint with ON DELETE CASCADE
            // $table->dropForeign(['training_id']);

            // Add the original foreign key constraint back
            // $table->foreign('training_id')
            //     ->references('id')
            //     ->on('trainings');
        });
    }
}
