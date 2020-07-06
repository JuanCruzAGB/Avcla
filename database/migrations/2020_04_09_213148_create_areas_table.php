<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateAreasTable extends Migration{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::create('areas', function (Blueprint $table){
                $table->bigIncrements('id_area');
                $table->unsignedInteger('id_parent');
                $table->string('name');
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
            Schema::dropIfExists('areas');
        }
    }