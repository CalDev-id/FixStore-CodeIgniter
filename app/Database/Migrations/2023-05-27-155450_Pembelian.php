<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembelian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'item_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'price' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'item_image' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'qty' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('pembelian');
    }

    public function down()
    {
        $this->forge->dropTable('pembelian');
    }
}
