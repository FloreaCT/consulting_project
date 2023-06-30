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
        Schema::create('ezepost_tracking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('UID')->nullable();
            $table->string('mpID');
            $table->string('sender_username')->nullable();
            $table->string('sender_vepost_addr')->nullable();
            $table->string('sender_displayname')->nullable();
            $table->string('sender_pub_ip')->nullable();
            $table->integer('sender_pub_port')->nullable();
            $table->string('sender_prv_ip')->nullable();
            $table->integer('sender_prv_port')->nullable();
            $table->string('sender_mac_addr')->nullable();
            $table->string('sender_OS')->nullable();
            $table->string('sender_OS_version')->nullable();
            $table->string('sender_device_name')->nullable();
            $table->string('sender_device_username')->nullable();
            $table->string('receiver_username')->nullable();
            $table->string('receiver_vepost_addr')->nullable();
            $table->string('receiver_displayname')->nullable();
            $table->string('receiver_pub_ip')->nullable();
            $table->integer('receiver_pub_port')->nullable();
            $table->string('receiver_prv_ip')->nullable();
            $table->integer('receiver_prv_port')->nullable();
            $table->string('receiver_mac_addr')->nullable();
            $table->string('receiver_OS')->nullable();
            $table->string('receiver_OS_version')->nullable();
            $table->string('receiver_device_name')->nullable();
            $table->string('receiver_device_username')->nullable();
            $table->string('file_name')->nullable();
            $table->string('file_size_original')->nullable();
            $table->string('file_size_transfer')->nullable();
            $table->tinyInteger('send_option')->nullable();
            $table->dateTime('time_send_start')->nullable();
            $table->dateTime('ltime_send_start')->nullable();
            $table->dateTime('time_send_end')->nullable();
            $table->dateTime('ltime_send_end')->nullable();
            $table->dateTime('time_recv_end')->nullable();
            $table->dateTime('ltime_recv_end')->nullable();
            $table->string('auto_recv')->nullable();
            $table->string('PUCode')->nullable();
            $table->string('subject_ref')->nullable();
            $table->dateTime('s_abort')->nullable();
            $table->dateTime('r_abort')->nullable();
            $table->string('decrypt_status')->nullable();
            $table->dateTime('time_post_opened')->nullable();
            $table->string('view_once')->nullable();
            $table->dateTime('deleted_without_open')->nullable();
            $table->string('s_spare')->nullable();
            $table->dateTime('s_req_del_ltime')->nullable();
            $table->dateTime('s_req_del_time')->nullable();
            $table->dateTime('s_req_del_done')->nullable();
            $table->dateTime('r_ltime_delete')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
            $table->index('UID');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ezepost_tracking');
    }
};
