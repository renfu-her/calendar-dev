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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->commit('姓名');
            $table->string('email')->unique()->commit('電子郵件');
            $table->string('password')->commit('密碼');
            $table->string('phone')->nullable()->commit('電話');
            $table->string('address')->nullable()->commit('地址');
            $table->string('avatar')->nullable()->commit('頭像');
            $table->string('google_id')->nullable()->commit('Google ID');
            $table->string('facebook_id')->nullable()->commit('Facebook ID');
            $table->string('remember_token')->nullable()->commit('記住我');
            $table->timestamp('email_verified_at')->nullable()->commit('電子郵件驗證時間');
            $table->timestamp('last_login_at')->nullable()->commit('最後登入時間');
            $table->integer('is_active')->default(1)->commit('是否啟用');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
