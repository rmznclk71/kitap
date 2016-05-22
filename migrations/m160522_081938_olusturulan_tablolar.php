<?php

use yii\db\Migration;

class m160522_081938_olusturulan_tablolar extends Migration
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
        if (!in_array('kategori', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%kategori}}', [
                'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'isim' => 'VARCHAR(100) NOT NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('kitaplar', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%kitaplar}}', [
                'kitap_id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`kitap_id`)',
                'yazar_adi' => 'VARCHAR(100) NOT NULL',
                'kitap_adi' => 'VARCHAR(100) NOT NULL',
                'yayinevi' => 'VARCHAR(100) NOT NULL',
                'kategori_id' => 'INT(11) NOT NULL',
                'sayfa_sayisi' => 'DOUBLE NOT NULL',
                'kullanci_id' => 'INT(11) NOT NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('favori_kitap', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%favori_kitap}}', [
                'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'user_id' => 'INT(11) NOT NULL',
                'kitap_id' => 'INT(11) NOT NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('kitap_oneri', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%kitap_oneri}}', [
                'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'kitap_id' => 'INT(11) NOT NULL',
                'user_id' => 'INT(11) NOT NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('okunan_kitap', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%okunan_kitap}}', [
                'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'user_id' => 'INT(11) NOT NULL',
                'kitap_id' => 'INT(11) NOT NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('okuyacak_kitap', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%okuyacak_kitap}}', [
                'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'kitap_id' => 'INT(11) NOT NULL',
                'user_id' => 'INT(11) NOT NULL',
            ], $tableOptions_mysql);
        }
        }
         
         
        $this->createIndex('idx_UNIQUE_kitap_adi_6061_00','kitaplar','kitap_adi',1);
        $this->createIndex('idx_kullanci_id_6062_01','kitaplar','kullanci_id',0);
        $this->createIndex('idx_kategori_id_6062_02','kitaplar','kategori_id',0);
        $this->createIndex('idx_user_id_6137_03','favori_kitap','user_id',0);
        $this->createIndex('idx_kitap_id_6137_04','favori_kitap','kitap_id',0);
        $this->createIndex('idx_UNIQUE_kitap_id_6211_05','kitap_oneri','kitap_id',1);
        $this->createIndex('idx_kitap_id_6211_06','kitap_oneri','kitap_id',0);
        $this->createIndex('idx_user_id_6211_07','kitap_oneri','user_id',0);
        $this->createIndex('idx_user_id_6281_08','okunan_kitap','user_id',0);
        $this->createIndex('idx_kitap_id_6281_09','okunan_kitap','kitap_id',0);
        $this->createIndex('idx_kitap_id_6352_10','okuyacak_kitap','kitap_id',0);
        $this->createIndex('idx_user_id_6352_11','okuyacak_kitap','user_id',0);
         
        $this->execute('SET foreign_key_checks = 0');
        $this->addForeignKey('fk_user_6056_00','{{%kitaplar}}', 'kullanci_id', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION' );
        $this->addForeignKey('fk_kategori_6056_01','{{%kitaplar}}', 'kategori_id', '{{%kategori}}', 'id', 'NO ACTION', 'NO ACTION' );
        $this->addForeignKey('fk_user_6132_02','{{%favori_kitap}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION' );
        $this->addForeignKey('fk_kitaplar_6132_03','{{%favori_kitap}}', 'kitap_id', '{{%kitaplar}}', 'kitap_id', 'NO ACTION', 'NO ACTION' );
        $this->addForeignKey('fk_kitaplar_6205_04','{{%kitap_oneri}}', 'kitap_id', '{{%kitaplar}}', 'kitap_id', 'NO ACTION', 'NO ACTION' );
        $this->addForeignKey('fk_user_6205_05','{{%kitap_oneri}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION' );
        $this->addForeignKey('fk_kitaplar_6276_06','{{%okunan_kitap}}', 'kitap_id', '{{%kitaplar}}', 'kitap_id', 'NO ACTION', 'NO ACTION' );
        $this->addForeignKey('fk_user_6276_07','{{%okunan_kitap}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION' );
        $this->addForeignKey('fk_kitaplar_6345_08','{{%okuyacak_kitap}}', 'kitap_id', '{{%kitaplar}}', 'kitap_id', 'NO ACTION', 'NO ACTION' );
        $this->addForeignKey('fk_user_6345_09','{{%okuyacak_kitap}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION' );
        $this->execute('SET foreign_key_checks = 1;');

    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `kategori`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `kitaplar`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `favori_kitap`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `kitap_oneri`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `okunan_kitap`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `okuyacak_kitap`');
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
