<?php

use Phinx\Migration\AbstractMigration;

class CreateTableUserEmail extends AbstractMigration
{

    public function change()
    {
        $table = $this->table('user_email');
        $table
            ->addColumn('user_id', 'integer', ['null' => false])
            ->addColumn('email', 'string', ['null' => false])
            ->addColumn('primary', 'binary', ['default' => 0])
            ->addColumn('insert_time', 'datetime')
            ->addColumn('insert_user_id', 'integer')
            ->addColumn('update_time', 'datetime')
            ->addColumn('update_user_id', 'integer')
            ->addColumn('delete_time', 'datetime')
            ->addColumn('delete_user_id', 'integer')
            ->addForeignKey('user_id', 'user', 'id', ['delete' => 'CASCADE'])
            ->create();
    }
}
