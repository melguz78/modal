<?php
class Usuarios{
//campos de la clase
private $usuarioid;
private $nombreuser;
private $pass;
private $nivel;

//definir construcctor

function Usuarios()
{
//code

}

// funciones get 
public function getUsuarioid(){

    return $this->usuarioid;
}
public function getNombreuser(){

    return $this->nombreuser;
}

public function getPass(){
    return $this->pass;
}

public function getNivel(){
    return $this->nivel;
}
 // funciones set de los campos

public function setUsuarioid($user){
    $this->usuarioid = $user;
}
    public function setNombreuser($nombre){
        $this->nombreuser=$nombre;
    }

    public function setPass($contra){
        $this->pass=$contra;
    }
    public function setNivel($nivel){
        $this->nivel=$nivel;
    }

    //acciones del usuario

    public function validar(){

        $nivel="";
        $con =new mysqli('localhost', 'root', '', 'sisv11');
        $sql= "SELECT nivel FROM usuarios WHERE nombreuser='".$this->getNombreuser()."' AND pass='".$this->getPass()."'";
        if($resultado=$con->query($sql)){
            $usuarios=$resultado-> fetch_assoc();
            $nivel= $usuarios["nivel"];
        
            return $nivel;


        }else{
            echo "No se pudo conectar";
            return $nivel;
            exit;
        }
    }


}


?>

