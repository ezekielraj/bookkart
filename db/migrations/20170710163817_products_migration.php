<?php

use Phinx\Migration\AbstractMigration;

class ProductsMigration extends AbstractMigration
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
CREATE TABLE IF NOT EXISTS `Products` ( `ProductID` INT(50) NOT NULL AUTO_INCREMENT , `SKU` INT(100) NOT NULL , `IDSKU` INT(100) NOT NULL , `VendorProductID` INT(100) NOT NULL , `ProductName` VARCHAR(100) NOT NULL , `ProductDescription` VARCHAR(100) NOT NULL , `SupplierID` INT(50) NOT NULL , `CategoryID` INT(50) NOT NULL , `QuantityPerUnit` INT NOT NULL , `UnitPrice` INT NOT NULL , `MSRP` INT NOT NULL , `AvailableSize` INT NOT NULL , `AvailableColors` INT NOT NULL , `Size` INT NOT NULL , `Color` INT NOT NULL , `Discount` INT NOT NULL , `UnitWeight` INT NOT NULL , `UnitsInStock` INT NOT NULL , `UnitsOnOrder` INT NOT NULL , `ReorderLevel` INT NOT NULL , `ProductAvailable` INT NOT NULL , `DiscountAvailable` INT NOT NULL , `CurrentOrder` INT NOT NULL , `Picture` INT NOT NULL , `Ranking` INT NOT NULL , `Note` INT NOT NULL , `Created` DATETIME NOT NULL , `Updated` DATETIME NOT NULL , INDEX `ProductID` (`ProductID`(50))) ENGINE = InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
      	");
    }
}
