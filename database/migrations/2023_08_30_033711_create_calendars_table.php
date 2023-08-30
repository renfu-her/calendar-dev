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
        Schema::create('calendars', function (Blueprint $table) {
            $table->id();
            $table->string('title')->commit('標題');
            $table->string('description')->nullable()->commit('描述');
            $table->date('start_date')->commit('開始日期');
            $table->time('start_time')->nullable()->commit('開始時間');
            $table->integer('days')->commit('行程天數');
            $table->integer('full_day')->default(0)->commit('是否全天');
            $table->string('color')->nullable()->commit('顏色');
            $table->text('memo')->nullable()->commit('備註');
            $table->string('attached')->nullable()->commit('附件');
            $table->integer('is_repeat')->default(0)->commit('是否重複：1：重複， 0：不重複');
            $table->integer('is_active')->default(1)->commit('是否啟用: 1: 啟用, 2: 已經完成');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendars');
    }
};
