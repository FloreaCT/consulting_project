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
        Schema::create('ezepost_block_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ezepost_tracking_uid');

            // Add foreign key constraint
            $table->foreign('ezepost_tracking_uid')
                ->references('UID')
                ->on('ezepost_tracking')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('ezepost_block_list', function (Blueprint $table) {
            $table->dropForeign(['ezepost_tracking_uid']);
            $table->dropColumn('ezepost_tracking_uid');
        });

        Schema::dropIfExists('ezepost_block_list');
    }
};
