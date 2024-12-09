<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // ID pengguna
            $table->string('name'); // Nama lengkap
            $table->string('email')->unique(); // Email
            $table->string('phone'); // Nomor telepon
            $table->text('address'); // Alamat
            $table->enum('role', ['penjual', 'pembeli']); // Role
            $table->string('password'); // Kata sandi
            $table->timestamps(); // Menyimpan waktu pembuatan dan update
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
