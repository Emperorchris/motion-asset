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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('role')->default('0')->comment('0 is user, 1 is admin');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('balance')->default('0')->nullable();
            $table->string('total_deposit')->default('0')->nullable();
            $table->string('total_withdrawals')->default('0')->nullable();
            $table->string('bonus')->default('0')->nullable();
            $table->string('btc_address')->nullable();
            $table->string('eth_address')->nullable();
            $table->string('tron_address')->nullable();
            $table->string('bnb_address')->nullable();
            $table->string('usdt_address')->nullable();
            $table->string('account_type');
            $table->string('password')->nullable();
            $table->string('user_ref_id');
            $table->string('referral_id')->nullable();
            $table->string('pv')->nullable();
            $table->string('google_id')->nullable();
            $table->string('total_earnings')->default('0')->nullable();
            $table->string('today_earnings')->default('0')->nullable();
            $table->string('promo')->default('0')->comment('0=off and 1=on')->nullable();
            $table->boolean('google_auth')->default(false);
            $table->string('profile_pic')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
