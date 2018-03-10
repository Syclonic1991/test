<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'articles';

    /**
     * Run the migrations.
     * @table articles
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->enum('status', ['draft', 'active', 'not_active']);
            $table->string('name', 250);
            $table->string('img', 250);
            $table->text('description');
            $table->string('slug', 250)->nullable();
            $table->unsignedInteger('created_by_user_id')->nullable();
            $table->unsignedInteger('updated_by_user_id')->nullable();
            $table->string('meta_title', 250)->nullable();
            $table->string('meta_keyword', 250)->nullable();
            $table->string('meta_description', 250)->nullable();

            $table->index(["updated_by_user_id"], 'articles_fk_updated_by_admin_id_idx');

            $table->index(["created_by_user_id"], 'articles_fk_created_by_admin_id_idx');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('created_by_user_id', 'articles_fk_created_by_admin_id_idx')
                ->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('no action');

            $table->foreign('updated_by_user_id', 'articles_fk_updated_by_admin_id_idx')
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
