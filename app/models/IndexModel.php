<?php
require_once "Connection.php";
class IndexModel extends ModelPDO{

    public function get($id=''){
        $query = '';
        if($id==''){
            $query="SELECT * FROM users;";
        }
        else{
            $query= "SELECT * FROM users WHERE codigo_usuario =:codigo_usuario";
            return $this->get_query($query,[":codigo_usuario"=>$id]);
        }
        return $this->get_query($query);
    }
   
    public function create($arreglo=array()){
        $query="INSERT INTO users (username, name, email, password, creation_date) VALUES (:username, :name, :email, :password, :creation_date)";
        return $this->set_query($query,$arreglo);
    }
    public function delete($id=''){
        $query = "DELETE FROM usuario WHERE codigo_usuario =:codigo_usuario ";
        return $this->set_query($query,[":codigo_usuario"=>$id]);
    }
    public function  update($arreglo=array()){
        extract($arreglo);
        $query = "UPDATE usuario SET nombre=:nombre, clave=:clave, correo=:correo, telefono=:telefono WHERE codigo_usuario=:codigo_usuario";
        return $this->set_query($query,$arreglo);
    }
}