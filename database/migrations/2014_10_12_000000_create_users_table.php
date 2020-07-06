<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateUsersTable extends Migration{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::create('users', function (Blueprint $table){
                $table->bigIncrements('id_user');
                $table->string('email')->unique();
                $table->string('password');
                $table->string('name');
                $table->text('description');
                $table->string('phone');
                $table->text('location');
                $table->string('image');
                $table->unsignedInteger('id_rol');
                $table->string('slug');
                $table->rememberToken();
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down(){
            Schema::dropIfExists('users');
        }
    }