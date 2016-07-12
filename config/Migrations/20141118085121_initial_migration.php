<?php

use Phinx\Migration\AbstractMigration;

class InitialMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
        $eventsTable = $this->table('events');
        $eventsTable
                ->addColumn('title', 'string', ['length' => 300])
                ->addColumn('description', 'text')
                ->addColumn('start', 'datetime')
                ->addColumn('end', 'datetime')
                ->addColumn('all_day', 'boolean')
                ->addColumn('created', 'datetime')
                ->addColumn('modified', 'datetime')
                ->create();    
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('events');
    }
}
