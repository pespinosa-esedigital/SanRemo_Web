<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once __DIR__.'/Entities/Categoria.php';
include_once __DIR__.'/Entities/Marca.php';
include_once __DIR__.'/Entities/Evento.php';
include_once __DIR__.'/Entities/Microsite.php';
include_once __DIR__.'/Entities/Oferta.php';
include_once __DIR__.'/Entities/User.php';
class Modelcategoria extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->bd = $this->doctrine->em->getRepository('Categoria');
		$this->em = $this->doctrine->em;
	}
	public function get($id){
		$r = $this->bd->findOneBy(array('idcategoria'=>$id));
		return $r;
	}
	public function getAll(){
		$categoria = $this->bd->findAll();
		return $categoria;
	}
	public function getHijos($idPadre){
		$hijos = $this->bd->findBy(array('parent'=>$idPadre));
		$res = array();
		foreach ($hijos as $key => $value) {
			$res[] = array(
				'id'=>$value->getIdcategoria(),
				'label'=>$value->getNombre()
				);
		}
		return $res;
	}
	public function getPadresHijos(){
		$padres = $this->bd->findBy(array('parent'=>null));
		$res = array();
		foreach ($padres as $key => $value) {
			$res[]= array(
				'nombre'=>$value->getNombre(),
				'hijos'=>$this->bd->findBy(array('parent'=>$value->getIdcategoria())));
		}
		// print_r($res);
		// $hijos = $this->em->createQueryBuilder()->select(array('c'))->from('Categoria','c')->where('c.parent IS NOT NULL')->getQuery()->execute();
		return $res;
	}
	public function getPadres(){
		$padres = $this->bd->findBy(array('parent'=>null));
		$res = array();
		foreach ($padres as $key => $value) {
			$res[$value->getIdcategoria()] = $value->getNombre();

		}
		return $res;
	}
	public function getCategoria($id){
		$categoria = $this->bd->findOneBy(array("idcategoria" => $id));
		return $categoria;
	}
	public function getPadre($id){
		$categoria = $this->getCategoria($id);
		$padre = $this->bd->findOneBy(array('idcategoria'=>$categoria->getParent()));
		return $padre->getNombre();
	}
	public function delete($id){
		$exp = $this->bd->findOneBy(array('idcategoria'=>$id));
		$this->em->remove($exp);
    	$this->em->flush();
    	return true;
	}
	public function save($data){
		// print_r($data);
		if($data['nombre'] == '' || $data['parent'] == '')
			return false;

		$cat = new Categoria();
		if(isset($data['idcategoria'])){
			$cat = $this->bd->findOneBy(array('idcategoria'=>$data['idcategoria']));
			$cat->setNombre($data['nombre']);
			$this->em->merge($cat);
			$this->em->flush();
		}else{
			$cat->setNombre($data['nombre']);
			$cat->setParent($data['parent']);
			$cat->setCreado(Date('Y-m-d H:i:s'));
			$this->em->persist($cat);
			$this->em->flush();
		}
		return true;
	}
	

}

