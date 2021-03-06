<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_solutions', function (Blueprint $table) {
            $table->bigIncrements('solution_id');
            $table->string('solution');
            $table->unsignedBigInteger('assignment_id')->references('assignment_id')->on('course_assignments')->onDelete('cascade');
            $table->unsignedBigInteger('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignment_solutions');
    }
}
