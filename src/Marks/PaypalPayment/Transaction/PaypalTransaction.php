<?php

namespace Marks\PaypalPayment\Transaction;

class PaypalTransaction{

	public $total;
	public $currency;
	public $subtotal;
	public $tax;
	public $shipping;
	public $description;
	public $items = array();
	
	public function addItem($item = array()){
		array_push($this->items, $item);
	}
	
	public function formated(){
		return array(
			"amount"=>array(
				"total"=>$this->total,
				"currency"=>$this->currency,
				"details"=>array(
					"subtotal"=>$this->subtotal,
					"tax"=>$this->tax,
					"shipping"=>$this->shipping,
				)
			),
			"description"=>$this->description,
			"item_list"=>array(
				"items"=>$this->items
			)
		);
	}
	
}