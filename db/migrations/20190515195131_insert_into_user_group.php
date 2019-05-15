<?php

use Phinx\Migration\AbstractMigration;

class InsertIntoUserGroup extends AbstractMigration
{

    public function up()
    {
        $builder = $this->getQueryBuilder();
        $builder
            ->insert([
                'name',
                'insert_time'
            ])
            ->into('user_group')
            ->values(
                [
                    'name' => 'Developer',
                    'insert_time' => $builder->func()->now()
                ]
            )
            ->values(
                [
                    'name' => 'User',
                    'insert_time' => $builder->func()->now()
                ]
            )
            ->execute();
    }

    public function down()
    {
        $this->execute('DELETE FROM user_group');
    }
}
