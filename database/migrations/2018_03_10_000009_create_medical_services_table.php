<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalServicesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'medical_services';

    /**
     * Run the migrations.
     * @table medical_services
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->double('price');
            $table->double('price_with_discount');
            $table->unsignedInteger('medical_service_group_id')->nullable();
            $table->unsignedInteger('created_by_user_id')->nullable();
            $table->unsignedInteger('updated_by_user_id')->nullable();
            $table->unsignedInteger('subgroup_id')->nullable();
            $table->tinyInteger('is_promoted');
            $table->text('test_list')->nullable();
            $table->text('doctors_list')->nullable();
            $table->integer('period')->nullable();

            $table->index(["medical_service_group_id"], 'fk_medical_service_group_id_idx');

            $table->index(["created_by_user_id"], 'medical_services_fk_created_by_admin_id_idx');

            $table->index(["subgroup_id"], 'medical_services_subgroup_id_idx');

            $table->index(["updated_by_user_id"], 'medical_services_fk_updated_by_admin_id_idx');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('medical_service_group_id', 'fk_medical_service_group_id_idx')
                ->references('id')->on('medical_service_groups')
                ->onDelete('set null')
                ->onUpdate('no action');

            $table->foreign('created_by_user_id', 'medical_services_fk_created_by_admin_id_idx')
                ->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('no action');

            $table->foreign('updated_by_user_id', 'medical_services_fk_updated_by_admin_id_idx')
                ->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('no action');

            $table->foreign('subgroup_id', 'medical_services_subgroup_id_idx')
                ->references('id')->on('medical_service_subgroups')
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
