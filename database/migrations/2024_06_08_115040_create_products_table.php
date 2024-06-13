<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Membuat kolom id sebagai primary key
            $table->string('nama_produk'); // Membuat kolom nama_produk dengan tipe string
            $table->string('deskripsi_produk'); // Membuat kolom nama_produk dengan tipe string
            $table->decimal('harga', 10, 2); // Membuat kolom harga dengan tipe decimal (total 10 digit, 2 di belakang koma)
            $table->timestamps(); // Membuat kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products'); // Menghapus tabel products jika migrasi di-rollback
    }
}
