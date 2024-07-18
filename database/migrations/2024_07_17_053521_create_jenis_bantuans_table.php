<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_jenis_bantuans_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisBantuansTable extends Migration
{
    public function up()
    {
        Schema::create('jenis_bantuans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jenis_bantuans');
    }
}

