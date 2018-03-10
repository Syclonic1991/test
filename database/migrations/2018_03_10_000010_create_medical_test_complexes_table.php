<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalTestComplexesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'medical_test_complexes';

    /**
     * Run the migrations.
     * @table medical_test_complexes
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('code', 45);
            $table->string('name', 250);
            $table->double('price');
            $table->double('price_with_discount');
            $table->unsignedInteger('created_by_user_id')->nullable();
            $table->unsignedInteger('updated_by_user_id')->nullable();
            $table->tinyInteger('is_promoted');

            $table->index(["updated_by_user_id"], 'medical_test_complexes_fk_updated_by_admin_id_idx');

            $table->index(["created_by_user_id"], 'medical_test_complexes_fk_created_by_admin_id_idx');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('created_by_user_id', 'medical_test_complexes_fk_created_by_admin_id_idx')
                ->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('no action');

            $table->foreign('updated_by_user_id', 'medical_test_complexes_fk_updated_by_admin_id_idx')
                ->references('id')->on('users')
                ->onDelete('set null')
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
