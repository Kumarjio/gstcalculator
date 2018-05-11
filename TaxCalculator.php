<?php

	public function calculateTax($user_state,$product_gst,$retailer_price) {

		$base_state = '38';
		$tax_array = array();
		$cgst = 0;
		$sgst = 0;
		$igst = 0;
		
		$total_gst =  $retailer_price * $product_gst / 100;

		if($user_state == $base_state) {
			$cgst = $total_gst / 2;
			$sgst = $total_gst /2;
			$igst = 0;
		} else {
			$cgst = 0;
			$sgst = 0;
			$igst = $total_gst;
		}


		

		$tax_array = array(
				'igst' =>$igst,
				'cgst'=>$cgst,
				'sgst'=>$sgst
			);
		

		return $tax_array;

	}


?>