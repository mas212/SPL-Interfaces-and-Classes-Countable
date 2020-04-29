<?php
class Collection implements Countable
{
	protected $items = [];

	public function __construct(array $items){
		$this->items 	= $items;
	}

	public function count(){
		return count($this->items);
	}
}

$collection 		= new Collection(['one', 'two', 'three']);
echo count($collection);