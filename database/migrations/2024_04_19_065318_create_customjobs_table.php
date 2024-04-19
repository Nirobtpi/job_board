<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customjobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('admin_id');
            $table->string('job_title');
            $table->string('job_region');
            $table->string('job_type');
            $table->integer('vancacy');
            $table->integer('experience');
            $table->bigInteger('salary');
            $table->string('gander');
            $table->date('application_deadline');
            $table->text('job_description');
            $table->text('responsibilities');
            $table->text('education_experience');
            $table->text('other_benifits');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customjobs');
    }
};
