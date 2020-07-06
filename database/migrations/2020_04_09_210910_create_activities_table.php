<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateActivitiesTable extends Migration{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::create('activities', function (Blueprint $table){
                $table->bigIncrements('id_activity');
                $table->string('name');
                $table->text('description');
                $table->text('location');
                $table->string('folder');
                $table->string('logo');
                $table->unsignedInteger('id_owner');
                $table->string('phone');
                $table->string('email');
                $table->string('slug');
                $table->unsignedInteger('id_user');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down(){
            Schema::dropIfExists('activities');
        }
    }