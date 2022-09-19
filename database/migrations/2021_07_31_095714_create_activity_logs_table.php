<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try{
            Schema::create('activity_logs', function (Blueprint $table) {
                $table->id();
                $table->string('uri');
                $table->unsignedBigInteger('user_id')->nullable();
                $table->timestamp('created_at');
                $table->json('json_request')->nullable();
                $table->json('json_response')->nullable();
                $table->ipAddress('ip');
                $table->foreignId('device_id')->nullable()->constrained()->cascadeOnDelete();
                $table->foreignId('platform_version_id')->nullable()->constrained()->cascadeOnDelete();
                $table->foreignId('browser_version_id')->nullable()->constrained()->cascadeOnDelete();
            });
        }catch (\Exception $e){
                $this->down();
                throw $e;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_logs');
    }
};
