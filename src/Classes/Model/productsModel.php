<?php

namespace App\Model;

class productsModel extends Mapper {
    
	public function getProducts(){
		// select a collection (analogous to a relational database's table)
/*$collection = $this->mongodb->foo;
$cursor = $collection->find();
$result = "";
// iterate through the results
foreach ($cursor as $document) {
    $result.=$document["title"] . "\n";
}

		return $result;	
*/

//$rows = $this->mongodb->executeQuery('bookkartdb.foo');
//return $rows;
$m = new \MongoDB\Driver\Manager("mongodb://bookkartuser:bookkartpass@localhost:27017/bookkartdb");
$filter = [];
//$options = [ 'projection' => ['_id' => 1] ];
$query = new \MongoDB\Driver\Query($filter);//, $options);
$rows = $m->executeQuery('bookkartdb.foo',$query);
return var_dump($rows);
/*$db = $m->bookkartdb;
$collection = $db->foo;
$cursor = $collection->find();
return $cursor;
*/	}

}
