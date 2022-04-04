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
        Schema::table('detail_peminjaman', function (Blueprint $table) {
            $table->foreign('id_barang')->references('id')->on('barang')->onDelete('cascade');
            $table->foreign('id_peminjaman')->references('id')->on('peminjaman')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_peminjaman', function (Blueprint $table) {
            $table->dropForeign(['id_barang']);
            $table->dropForeign(['id_peminjaman']);

            $table->dropIndex('detail_peminjaman_id_barang_foreign');
            $table->dropIndex('detail_peminjaman_id_peminjaman_foreign');
        });
    }
};
