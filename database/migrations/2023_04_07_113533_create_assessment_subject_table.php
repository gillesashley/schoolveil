<?php

use App\Models\Assessment;
use App\Models\Subject;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('assessment_subject', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Assessment::class);
            $table->foreignIdFor(Subject::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessment_subject');
    }
};
