<?php

use Phinx\Migration\AbstractMigration;

class OrderDetailsMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
         $this->execute("
CREATE TABLE IF NOT EXISTS `OrderDetails` ( `OrderID` INT(50) NOT NULL , `ProductID` INT(50) NOT NULL , `OrderNumber` INT(50) NOT NULL , `Price` INT(50) NOT NULL , `Quantity` INT(50) NOT NULL , `Discount` INT(50) NOT NULL , `Total` INT NOT NULL , `IDSKU` INT NOT NULL , `Size` INT NOT NULL , `Color` INT NOT NULL , `Fulfilled` INT NOT NULL , `ShipDate` DATE NOT NULL , `OrderDetailID` INT(20) NOT NULL , `BillDate` DATE NOT NULL , `Created` DATETIME NOT NULL , `Updated` DATETIME NOT NULL ) ENGINE = InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
        ");
    }
}
