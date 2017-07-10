<?php

use Phinx\Migration\AbstractMigration;

class Suppliers extends AbstractMigration
{
    public function up(){
         $this->execute("
CREATE TABLE IF NOT EXISTS `Suppliers` ( `SupplierID` INT(50) UNSIGNED NOT NULL AUTO_INCREMENT , `CompanyName` VARCHAR(50) NOT NULL , `ContactFName` VARCHAR(50) NOT NULL , `ContactLName` VARCHAR(50) NOT NULL , `ContactTitle` VARCHAR(10) NOT NULL , `Address1` VARCHAR(100) NOT NULL , `Address2` VARCHAR(100) NOT NULL , `City` VARCHAR(20) NOT NULL , `State` VARCHAR(20) NOT NULL , `PostalCode` INT(10) NOT NULL , `Country` VARCHAR(20) NOT NULL , `Phone` VARCHAR(30) NOT NULL , `Fax` VARCHAR(30) NOT NULL , `Email` VARCHAR(30) NOT NULL , `URL` VARCHAR(50) NOT NULL , `PaymentMethods` INT NOT NULL , `DiscountType` INT NOT NULL , `TypeGoods` INT NOT NULL , `Notes` INT NOT NULL , `DiscountAvailable` INT NOT NULL , `CurrentOrder` INT NOT NULL , `Logo` INT NOT NULL , `CustomerID` INT NOT NULL , `SizeURL` INT NOT NULL , `Created` DATETIME NOT NULL , `Updated` DATETIME NOT NULL , INDEX `SupplierID` (`SupplierID`(50))) ENGINE = InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
        ");


    }
}
