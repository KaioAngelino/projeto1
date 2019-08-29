<?php 
namespace App\Controller;
class Usu_usuarioModel 
{ 
	private $usu_id;
	private $usu_nome;
	private $usu_email;
	private $usu_whatsapp;
	private $usu_token;
	private $usu_status;
	private $usu_data;
	private $usu_data_atlz;
	public function get_usu_id()
	{
		return $this->usu_id;
	}
	public function set_usu_id($usu_id)
	{
		return $this->usu_id = $usu_id;
	}
	public function get_usu_nome()
	{
		return $this->usu_nome;
	}
	public function set_usu_nome($usu_nome)
	{
		return $this->usu_nome = $usu_nome;
	}
	public function get_usu_email()
	{
		return $this->usu_email;
	}
	public function set_usu_email($usu_email)
	{
		return $this->usu_email = $usu_email;
	}
	public function get_usu_whatsapp()
	{
		return $this->usu_whatsapp;
	}
	public function set_usu_whatsapp($usu_whatsapp)
	{
		return $this->usu_whatsapp = $usu_whatsapp;
	}
	public function get_usu_token()
	{
		return $this->usu_token;
	}
	public function set_usu_token($usu_token)
	{
		return $this->usu_token = $usu_token;
	}
	public function get_usu_status()
	{
		return $this->usu_status;
	}
	public function set_usu_status($usu_status)
	{
		return $this->usu_status = $usu_status;
	}
	public function get_usu_data()
	{
		return $this->usu_data;
	}
	public function set_usu_data($usu_data)
	{
		return $this->usu_data = $usu_data;
	}
	public function get_usu_data_atlz()
	{
		return $this->usu_data_atlz;
	}
	public function set_usu_data_atlz($usu_data_atlz)
	{
		return $this->usu_data_atlz = $usu_data_atlz;
	}
} 
