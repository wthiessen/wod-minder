<?php
/** 
 * Scale_model
 * 
 * @author Will THiessen
 *	
 */ 
class Score_Type_Model extends CI_Model {

	protected static $score_type_options = [
		'' => '- Select Score Type -',
		'T' => 'For Time', //Integer, stored in seconds, T tells UI to display minutes second
		'I' => 'Reps/Round Count', //Integer values stored
		'W' => 'Maximum Weight', //Decimal value stored (e.g. 105.5 lbs)
		'E' => 'EMOM',
		'O' => 'Other', //Unknown way to score...becomes free text field
	];

	// function __construct() {
	// 	parent::__construct();

	// 	$this->score_type_options = $score_type_options;
	// }

	public function get_score_type_options()
	{
		return static::$score_type_options;
	}
}
