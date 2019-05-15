<?php

use Phinx\Migration\AbstractMigration;

class CreateTableUserGroup extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('user_group');
        $table
            ->addColumn('name', 'string')
            ->addColumn('insert_time', 'datetime')
            ->addColumn('delete_time', 'datetime')
            ->create();
    }
}
