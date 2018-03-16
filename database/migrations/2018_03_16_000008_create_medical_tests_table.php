<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalTestsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'medical_tests';

    /**
     * Run the migrations.
     * @table medical_tests
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
            $table->string('material', 250);
            $table->string('preparation', 250);
            $table->string('result', 45);
            $table->integer('term');
            $table->text('description');
            $table->double('price');
            $table->double('price_with_discount');
            $table->text('test_method');
            $table->unsignedInteger('medical_test_group_id')->nullable();
            $table->unsignedInteger('created_by_user_id')->nullable();
            $table->unsignedInteger('updated_by_user_id')->nullable();
            $table->tinyInteger('is_promoted');

            $table->index(["medical_test_group_id"], 'fk_medical_test_group_id_idx');

            $table->index(["created_by_user_id"], 'medical_tests_fk_created_by_admin_id_idx');

            $table->index(["updated_by_user_id"], 'medical_tests_fk_updated_by_admin_id_idx');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('medical_test_group_id', 'fk_medical_test_group_id_idx')
                ->references('id')->on('medical_test_groups')
                ->onDelete('set null')
                ->onUpdate('no action');

            $table->foreign('created_by_user_id', 'medical_tests_fk_created_by_admin_id_idx')
                ->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('no action');

            $table->foreign('updated_by_user_id', 'medical_tests_fk_updated_by_admin_id_idx')
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
