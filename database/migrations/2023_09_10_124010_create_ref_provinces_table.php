<?php

use App\Models\RefRegion;
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
        Schema::create('ref_provinces', function (Blueprint $table) {
            $table->id();
            $table->string('psgcCode')->nullable();
            $table->string('provDesc')->nullable();
            $table->string('regCode')->nullable();
            $table->string('provCode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_provinces');
    }
};
