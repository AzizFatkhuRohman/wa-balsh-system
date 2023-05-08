<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePesanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'judul'             => ['type' => 'varchar', 'constraint' => 255],
            'device'            => ['type' => 'varchar', 'constraint' => 30],
            'kategori'          => ['type' => 'varchar', 'constraint' => 30],
            'nomor_whatsapp'    => ['type' => 'varchar', 'constraint' => 30],
            'image'             => ['type' => 'varchar', 'constraint' => 100],
            'deskripsi'         => ['type' => 'varchar', 'constraint' => 500],
            'status'            => ['type' => 'varchar', 'constraint' => 30],
            'created_at'        => ['type' => 'datetime', 'null' => true],
            'updated_at'        => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pesan', true);
    }

    public function down()
    {
        //
    }
}
