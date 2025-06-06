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
        Schema::create(table: 'users', callback: function(Blueprint $table): void{
            $table->id();
            $table->string(column: 'name');
            $table->string(column: 'email')->unique();
            $table->string(column: 'password');
            $table->enum('status', ['pending', 'active', 'banned', 'deleted'])->default(value: 'pending');
            $table->string(column: 'phone_number')->nullable();
            $table->string(column: 'avatar')->nullable();
            $table->text(column: 'address')->nullable();
            $table->foreignId(column: 'role_id')->constrained(table: 'roles')->onDelete(action: 'cascade');
            $table->string('activation_token')->nullable();
            $table->string('google_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'users');
    }
};
