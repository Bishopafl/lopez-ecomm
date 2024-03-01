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
        Schema::create('site_infos', function (Blueprint $table) {
            $table->id();
            $table->text('mission_statement');
            $table->text('vision_statement');
            $table->text('awards_section');
            $table->text('team_information');
            $table->text('purchase_policy');
            $table->text('privacy_policy');
            $table->text('refund_policy');
            $table->text('company_address');
            $table->string('android_app_link');
            $table->string('ios_app_link');
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->string('linkedin_link');
            $table->string('twitch_link');
            $table->string('copyright_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_infos');
    }
};
