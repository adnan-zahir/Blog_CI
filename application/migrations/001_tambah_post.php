<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Tambah_Post extends CI_Migration
{
  public function up()
  {
    $this->dbforge->add_field([
      'post_id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ],
      'judul' => [
        'type' => 'VARCHAR',
        'constraint' => '100'
      ],
      'deskripsi' => [
        'type' => 'TEXT',
        'null' => TRUE
      ]
    ]);

    $this->dbforge->add_key('post_id', TRUE);
    $this->dbforge->create_table('post');
  }

  public function down()
  {
    $this->dbforge->drop_table('post');
  }
}
