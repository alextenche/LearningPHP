<?php
// Managing the Code -- OOP: Adding Properties

class Model
{
	public $firstName = '';
	public $lastName = '';
	public $accountNumber = 0;
	public $balance = 0;
	public $isMember = FALSE;
	public $preferences = array();

	// properties can be assigned values in methods
	public function setUserInfo($data)
	{
		$this->firstName = $data[0];
		$this->lastName = $data[1];
		$this->accountNumber = $data[2];
		$this->balance = $data[3];
		$this->isMember = $data[4];
		$this->preferences = $data[5];
	}
	
	public function showFullName()
	{
		return $this->firstName . ' ' . $this->lastName;
	}
	
	public function showAccountInfo()
	{
		$info = '';
		$info .= sprintf('<br />Name: %s %s', $this->firstName, $this->lastName);
		$info .= sprintf('<br />Account Number: %d', $this->accountNumber);
		$info .= sprintf('<br />Balance: $%8.2f', $this->balance);
		$info .= sprintf('<br />Is Member: %s', var_export($this->isMember, TRUE));
		// NOTE: implode(glue_string, array) takes an array and produces a string
		$info .= sprintf('<br />Preferences: %s', implode(', ', $this->preferences));
		return $info;
	}

	// simulates pulling user information from a database
	public function getUserById($id)
	{
		if ($id == 1) {
			$userInfo = array('Amelia', 'Earhart', 887766, 234567.89, TRUE, array('Airplanes', 'GP', 'Flying'));
		} else {
			$userInfo = array('Winston', 'Churchill', 998877, 1230467.88, TRUE, array('Cigars', 'Conservative Party', 'Polo'));
		}
		return $userInfo;
	}
}
