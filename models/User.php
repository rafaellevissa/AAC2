<?php 
class User extends Model
{
	protected $table = "pessoa";

	public function teste()
	{
		return "Funcionou pow";
	}

	public function pessoas()
	{
		return $this->query("SELECT * FROM pessoa limit 4");
	}
}