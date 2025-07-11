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
        Schema::table('comments', function (Blueprint $table) {
            $table->string('guest_name')->nullable()->after('user_id');
            // Mengubah user_id menjadi nullable untuk guest comments
            if (Schema::hasColumn('comments', 'user_id')) {
                $table->foreignId('user_id')->nullable()->change();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropColumn('guest_name');
            // Kembalikan user_id menjadi required
            if (Schema::hasColumn('comments', 'user_id')) {
                $table->foreignId('user_id')->nullable(false)->change();
            }
        });
    }
};
