<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'promotions';

    /**
     * Run the migrations.
     * @table promotions
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('started_date')->nullable();
            $table->date('end_date')->nullable();
            $table->enum('status', ['Черновик', 'Активна', 'Неактивна'])->nullable();
            $table->string('name', 85)->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('created_by_user_id')->nullable();
            $table->unsignedInteger('updated_by_user_id')->nullable();
            $table->string('img_preview')->nullable();
            $table->string('img_banner')->nullable();
            $table->text('meta_title')->nullable();
            $table->string('meta_description', 180)->nullable();
            $table->string('meta_keyword')->nullable();

            $table->index(["updated_by_user_id"], 'promotions_fk_updated_by_admin_id_idx');

            $table->index(["created_by_user_id"], 'promotions_fk_created_by_admin_id_idx');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('created_by_user_id', 'promotions_fk_created_by_admin_id_idx')
                ->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('no action');

            $table->foreign('updated_by_user_id', 'promotions_fk_updated_by_admin_id_idx')
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
