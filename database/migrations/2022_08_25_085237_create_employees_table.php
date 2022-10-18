<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('degrees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('intervel')->nullable();
            $table->timestamps();

        });

          Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('fcnt_code');
            $table->string('name');
            $table->timestamps();

        });
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();

        });

        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empl_id')->unique();
            $table->integer('dept_code')->nullable();;
            $table->unsignedBigInteger('degree')->nullable();
            $table->unsignedBigInteger('address')->nullable();
            $table->unsignedBigInteger('section')->nullable();
            $table->text('name');
            $table->date('commdate')->format("YYYY-MM-DD")->nullable();
            $table->date('adddate')->format("YYYY-MM-DD")->nullable();
            $table->date('duedate')->format("YYYY-MM-DD")->nullable();
            $table->string('state')->nullable();
            $table->integer('locality')->nullable();
            $table->integer('ally')->nullable();
            $table->integer('house')->nullable();
            $table->integer('phone')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();

            $table->foreign('degree')->references('id')->on('degrees');
            $table->foreign('address')->references('id')->on('addresses');
            $table->foreign('section')->references('id')->on('sections');
        });

        Schema::create('books',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->integer('type');
            // $table->unsignedBigInteger('employee')->nullable();
            $table->timestamps();
            // $table->foreign('employee')->references('empl_id')->on('employees');
      });

      Schema::create('empls_books',function(Blueprint $table){
            $table->increments('id');
            $table->date('date');
            $table->unsignedBigInteger('employee')->nullable();
            $table->unsignedBigInteger('book')->nullable();
            $table->timestamps();
            $table->foreign('employee')->references('empl_id')->on('employees');
            $table->foreign('book')->references('id')->on('books');
      });


      Schema::create('countries',function(Blueprint $table){
            $table->id();
            $table->integer('ctry_code');
            $table->string('ctry_b_desc');
            $table->string('ctry_s_desc')->nullable();
            $table->string('crty_iso')->nullable();
            $table->timestamps();
      });

      Schema::create('empls_efads',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedBigInteger('employee')->nullable();
            $table->unsignedBigInteger('country')->nullable();
            $table->string('emp_prov')->nullable();;
            $table->date('emp_date_from');
            $table->date('emp_date_to');
            $table->timestamps();
            $table->foreign('employee')->references('empl_id')->on('employees');
            $table->foreign('country')->references('id')->on('countries');
      });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
        Schema::dropIfExists('employees');
        Schema::dropIfExists('degrees');
        Schema::dropIfExists('addresses');
    }
};
