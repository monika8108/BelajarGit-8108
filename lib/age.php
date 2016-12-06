		<?php 

class Age{
	
	public $age;
	
	public function Age($age) {
		$date_ob = new DateTime($age);
		$today = new DateTime();
		
		$diff = $today->diff($date_ob);
		return $diff;
	}
}

?>