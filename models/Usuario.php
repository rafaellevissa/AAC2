<?php 
class Usuario extends Model
{
	protected $table = "usuario";

	public function usuarios()
	{
		return $this->select()->getAll();
	}
}