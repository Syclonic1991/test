<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalTestsInComplexTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'medical_tests_in_complex';

    /**
     * Run the migrations.
     * @table medical_tests_in_complex
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('medical_test_complex_id');
            $table->unsignedInteger('medical_test_id');

            $table->index(["medical_test_complex_id"], 'fk_medical_test_complex_id_idx');

            $table->index(["medical_test_id"], 'fk_medical_test_id_idx');


            $table->foreign('medical_test_complex_id', 'fk_medical_test_complex_id_idx')
                ->references('id')->on('medical_test_complexes')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('medical_test_id', 'fk_medical_test_id_idx')
                ->references('id')->on('medical_tests')
                ->onDelete('cascade')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
