<?php

use yii\db\Migration;

class m161001_204009_emp_activ extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%empleado}}', [
            'idempleado' => $this->primaryKey(),
            'nombre'     => $this->string()->notNull(),
            'cargo'      => $this->string()->notNull(),
            'email'      => $this->string()->notNull(),
            'estado'     => $this->string()->notNull(),
        ], $tableOptions);
        
        $this->createTable('{{%actividad}}', [
            'idactividad'      => $this->primaryKey(),
            'idempleado'       => $this->integer()->notNull(),
            'fecha_registro'   => $this->date()->notNull(),
            'comentarios'      => $this->string()->notNull(),
            'estado_actividad' => $this->string()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_act_emp', 'actividad', 'idempleado', 'empleado', 'idempleado');
    }

    public function down()
    {
        $this->dropForeignKey('fk_act_emp', 't_actividad');
        $this->dropTable('{{%actividad}}');
        $this->dropTable('{{%empleado}}');
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
