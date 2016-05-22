<?php

use yii\db\Migration;

class m160522_083317_yetki_olustur extends Migration
{
    public function up()
    {

         $tables = Yii::$app->db->schema->getTableNames();
        $dbType = $this->db->driverName;
        $tableOptions_mysql = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        $tableOptions_mssql = "";
        $tableOptions_pgsql = "";
        $tableOptions_sqlite = "";
        /* MYSQL */
        if (!in_array('auth_item', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%auth_item}}', [
                'name' => 'VARCHAR(64) NOT NULL',
                0 => 'PRIMARY KEY (`name`)',
                'type' => 'INT(11) NOT NULL',
                'description' => 'TEXT NULL',
                'rule_name' => 'VARCHAR(64) NULL',
                'data' => 'TEXT NULL',
                'created_at' => 'INT(11) NULL',
                'updated_at' => 'INT(11) NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('auth_item_child', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%auth_item_child}}', [
                'parent' => 'VARCHAR(64) NOT NULL',
                0 => 'PRIMARY KEY (`parent`)',
                'child' => 'VARCHAR(64) NOT NULL',
                1 => 'KEY (`child`)',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('auth_assignment', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%auth_assignment}}', [
                    'item_name' => 'VARCHAR(64) NOT NULL',
                    'user_id' => 'VARCHAR(64) NOT NULL',
                    'created_at' => 'INT(11) NULL',
                        ], $tableOptions_mysql);
                $this->addPrimaryKey(
                                     'auth_assignment_pk',
                                    'auth_assignment',
                                    ['item_name','user_id']
                          );
            }
        }
         
        /* MYSQL */
        if (!in_array('auth_rule', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%auth_rule}}', [
                'name' => 'VARCHAR(64) NOT NULL',
                0 => 'PRIMARY KEY (`name`)',
                'data' => 'TEXT NULL',
                'created_at' => 'INT(11) NULL',
                'updated_at' => 'INT(11) NULL',
            ], $tableOptions_mysql);
        }
        }
         
         
        $this->createIndex('idx_rule_name_0381_00','auth_item','rule_name',0);
        $this->createIndex('idx_type_0381_01','auth_item','type',0);
        $this->createIndex('idx_child_0431_02','auth_item_child','child',0);
         
        $this->execute('SET foreign_key_checks = 0');
        $this->addForeignKey('fk_auth_rule_0371_00','{{%auth_item}}', 'rule_name', '{{%auth_rule}}', 'name', 'CASCADE', 'CASCADE' );
        $this->addForeignKey('fk_auth_item_0421_01','{{%auth_item_child}}', 'parent', '{{%auth_item}}', 'name', 'CASCADE', 'CASCADE' );
        $this->addForeignKey('fk_auth_item_0431_02','{{%auth_item_child}}', 'child', '{{%auth_item}}', 'name', 'CASCADE', 'CASCADE' );
        $this->addForeignKey('fk_auth_item_0471_03','{{%auth_assignment}}', 'item_name', '{{%auth_item}}', 'name', 'CASCADE', 'CASCADE' );
        $this->execute('SET foreign_key_checks = 1;');
         
        $this->execute('SET foreign_key_checks = 0');
        $this->insert('{{%auth_item}}',['name'=>'admin','type'=>'1','description'=>'admins','rule_name'=>null,'data'=>null,'created_at'=>'','updated_at'=>'']);
        $this->insert('{{%auth_item}}',['name'=>'user','type'=>'2','description'=>'users','rule_name'=>null,'data'=>null,'created_at'=>'','updated_at'=>'']);
        $this->insert('{{%auth_assignment}}',['item_name'=>'admin','user_id'=>'1','created_at'=>'']);
        $this->insert('{{%auth_assignment}}',['item_name'=>'user','user_id'=>'2','created_at'=>'']);
        $this->execute('SET foreign_key_checks = 1;');

    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `auth_item`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `auth_item_child`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `auth_assignment`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `auth_rule`');
        $this->execute('SET foreign_key_checks = 1;');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
