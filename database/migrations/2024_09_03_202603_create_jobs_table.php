<?php

use App\Models\Employer;
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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id(); // Primary key for the jobs table
            $table->foreignIdFor(Employer::class);
            $table->string('title'); // Title of the job
            $table->text('description'); // Description of the job
            $table->string('location'); // Location of the job
            $table->string('url');
            $table->string('type'); // Type of job (e.g., full-time, part-time, remote)
            $table->decimal('salary', 10, 2)->nullable(); // Salary offered for the job, with 2 decimal places
            $table->boolean('featured')->default(false);
            $table->boolean('is_active')->default(true); // Indicates if the job is currently active
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
