<?php 
class Categoria extends Model
{
	protected $table = "categoria";

	public function categorias()
	{
		return $this->select()->getAll();
	}

	public function cadastrar($data)
	{
		return $this->save($data);
	}
}