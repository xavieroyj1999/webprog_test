<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStockTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'stockName' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'noShares' => [
                'type' => 'INT',
                'null' => true,
            ],
            'items' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'types' => [
                'type' => 'TEXT',
                'null' => true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('stocks');
    }

    public function down()
    {
        $this->forge->dropTable('stocks');
    }
}
