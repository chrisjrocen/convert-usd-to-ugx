<!DOCTYPE html>
<html>

<body>

	<?php
	/**
	 * Script to convert USD to UGX and calculate tax
	 *
	 * @package currencyconverter
	 */

	$customers = array(
		"John"   => 100,
		"Mark"   => 150,
		"Sylvia" => 1100,
		"Juma"   => 3500,
		"Mike"   => 600,
		"Sana"   => 50,
		"Linda"  => 8000,
	);

	echo "<h2>Currency Converter</h2>";

	foreach ( $customers as $customer => $usd ) {
		
		convertCurrency( $customer, $usd );

	}

	/**
	 * Converts USD to UGX
	 *
	 * @param int $customer
	 * @param int $usd
	 * @return void
	 */
	function convertCurrency( $customer, $usd ) {

		$rate = 3650;
		$tax  = 0;
		$ugx  = $rate * $usd;

		// Check if $ugx is greater than 1,000,000 and caluclate tax
		if ( $ugx > 1000000 ) {
		
			$tax       = 0.02 * $ugx; //0.02 = 2%
			$final_ugx = $ugx - $tax;

		} else {
		
			$final_ugx = $ugx;
		
		}

		echo " " . $customer . ": Tax => " . $tax . "/=. Final amount in UGX =>" . $final_ugx . "/=. <br> ";
	
	}

	?>

</body>
</html>
