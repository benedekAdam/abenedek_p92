<?php

use Phinx\Migration\AbstractMigration;

class InsertIntoUserAddAdmin extends AbstractMigration
{

    public function up()
    {
        $builder = $this->getQueryBuilder();

        $developerUserGroupId = $builder
            ->select('id')
            ->from('user_group')
            ->where(function ($exp) {
                return $exp->eq('name', 'Developer');
            })
            ->execute()
            ->fetch('assoc');

        $builder
            ->insert([
                'user_group_id',
                'name',
                'username',
                'password',
                'birthday',
                'insert_time'
            ])
            ->into('user')
            ->values([
                'user_group_id' => $developerUserGroupId['id'],
                'name' => 'Developer',
                'username' => 'developer',
                'password' => password_hash('p92_admin_password', PASSWORD_BCRYPT, ['cost' => 13]),
                'birthday' => $builder->func()->now('date'),
                'insert_time' => $builder->func()->now()
            ])
            ->execute();
    }

    public function down()
    {
        $this->execute('DELETE FROM `user` WHERE `username` = "developer"');
    }
}
