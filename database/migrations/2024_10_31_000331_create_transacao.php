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
        Schema::create('transacao', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->decimal('valor',8,2);
            $table->date('data');
            $table->string('descricao', 500)->nullable();
            $table->foreignId('fk_funcionario')->nullable()->constrained('funcionario');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacao');
    }
};
