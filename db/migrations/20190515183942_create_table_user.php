<?php

use Phinx\Migration\AbstractMigration;

class CreateTableUser extends AbstractMigration
{

    public function change()
    {
        $table = $this->table('user');
        $table
            ->addColumn('user_group_id', 'integer')
            ->addColumn('name', 'string')
            ->addColumn('username', 'string')
            ->addColumn('password', 'string')
            ->addColumn('birthday', 'date')
            ->addColumn('insert_time', 'datetime')
            ->addColumn('update_time', 'datetime', ['null' => true])
            ->addColumn('delete_time', 'datetime', ['null' => true])
            ->addIndex(['name', 'username'], ['unique' => true])
            ->addForeignKey('user_group_id', 'user_group', 'id')
            ->create();
    }
}
