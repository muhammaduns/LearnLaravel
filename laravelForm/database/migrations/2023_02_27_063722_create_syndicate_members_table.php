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
        Schema::create('syndicate_members', function (Blueprint $table) {
            $table->id();
            $table->string('member_name');
            $table->string('designation');
            $table->string('grade');
            $table->string('member_title');
            $table->date('member_since');
            $table->date('tenure_upto');
            $table->text('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('syndicate_members');
    }
};
