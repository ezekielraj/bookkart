<?php

use Phinx\Migration\AbstractMigration;

class CustomersMigration extends AbstractMigration
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
CREATE TABLE IF NOT EXISTS `Customers` ( `CustomerID` INT(50) NOT NULL AUTO_INCREMENT , `FirstName` VARCHAR(50) NOT NULL , `LastName` VARCHAR(50) NOT NULL , `Class` VARCHAR(50) NOT NULL , `Room` VARCHAR(50) NOT NULL , `Building` VARCHAR(50) NOT NULL , `Address1` VARCHAR(50) NOT NULL , `Address2` VARCHAR(50) NOT NULL , `City` VARCHAR(50) NOT NULL , `State` VARCHAR(50) NOT NULL , `PostalCode` VARCHAR(50) NOT NULL , `Country` VARCHAR(50) NOT NULL , `Phone` VARCHAR(50) NOT NULL , `Email` VARCHAR(50) NOT NULL , `VoiceMail` VARCHAR(50) NOT NULL , `Password` VARCHAR(50) NOT NULL , `CreditCard` INT(50) NOT NULL , `CreditCardTypeID` VARCHAR(20) NOT NULL , `CardExpMo` INT NOT NULL , `CardExpYr` YEAR NOT NULL , `BillingAddress` VARCHAR(50) NOT NULL , `BillingCity` VARCHAR(20) NOT NULL , `BillingRegion` VARCHAR(20) NOT NULL , `BillingPostalCode` VARCHAR(10) NOT NULL , `BillingCountry` VARCHAR(20) NOT NULL , `ShipAddress` VARCHAR(50) NOT NULL , `ShipCity` VARCHAR(20) NOT NULL , `ShipRegion` VARCHAR(20) NOT NULL , `ShipPostalCode` VARCHAR(10) NOT NULL , `ShipCountry` VARCHAR(20) NOT NULL , `DateEntered` DATETIME NOT NULL , `Created` DATETIME NOT NULL , `Updated` DATETIME NOT NULL , INDEX `CustomerID` (`CustomerID`(50))) ENGINE = InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
      	");
    }
}
