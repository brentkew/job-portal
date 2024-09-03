<?php

use App\Models\User;
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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('name'); // Employer's name
            $table->string('email')->unique(); // Employer's email, must be unique
            $table->string('phone')->nullable(); // Employer's phone number, optional
            $table->string('address')->nullable(); // Employer's address, optional
            $table->string('company_name')->nullable(); // Company name associated with the employer
            $table->string('website')->nullable(); // Company website, optional
            $table->boolean('is_active')->default(true); // Indicates if the employer is active
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employer');
    }
};
