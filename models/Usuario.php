<?php 
class Usuario extends Model
{
	protected $table = "usuario";

	public function usuarios()
	{
		return $this->select()->getAll();
	}

	public function cadastrar($data)
	{
		return $this->save($data);
	}
}