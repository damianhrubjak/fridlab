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
        Schema::create('print_models_files', function (Blueprint $table) {
            $table->primary(['print_model_id', 'file_id']);
            $table->bigInteger('print_model_id', false, true);
            $table->bigInteger('file_id', false, true);
            $table->timestamps();

            $table->foreign("print_model_id")->references("id")->on("print_models")->onDelete("cascade");
            $table->foreign("file_id")->references("id")->on("files")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('print_models_files');
    }
};
