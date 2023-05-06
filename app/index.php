<?php

require_once('Veterinaria.php');
require_once('Mascota.php');
require_once('Persona.php');


//DATA VETERINARIA
try {

    //Conexión por PDO (HOST/DB/U/P)
        $mbd = new PDO('mysql:host=localhost;dbname=enyoi-mod2', "root", "");

    //Solicitando los registros de la veterinaria
        foreach($mbd->query('SELECT * from veterinaria') as $fila) {

    //Creando el Objeto Veterinaria
        $Veterinaria = new Veterinaria($fila[0],$fila[1],$fila[2]);
    }
        $mbd = null;
} catch (PDOException $e) {

        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
}


//DATA MASCOTA - PROPIETARIO
try {
    //Conexión por PDO (HOST/DB/U/P)
    $mbd = new PDO('mysql:host=localhost;dbname=enyoi-mod2', "root", "");

    $listaPersona = array();
    $listaMascota = array();

    //Solicitando los registros de la mascota y el propietario
    foreach($mbd->query('SELECT persona.cedula, 
                                persona.nombre, 
                                persona.apellido, 
                                persona.edad, 
                                mascota.nombre, 
                                mascota.genero, 
                                mascota.raza
                                FROM persona INNER JOIN mascota
                                ON mascota.propietarioId=persona.cedula;') as $fila) {

        //Instanciando las personas (nombre, apellido, edad, cedula)
        $Persona = new Persona( $fila[1] , $fila[2], (int) $fila[3] , (int) $fila[0] );
        
        array_push($listaPersona, $Persona);
        
        //Instanciando las mascotas (nombre, genero, raza, propietarioId)
        $Mascota = new Mascota( $fila[4] , $fila[5] , $fila[6] , (int) $fila[0] );
        
        array_push($listaMascota, $Mascota);
        
    }
        $mbd = null;
} catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
}


//IMPRIMIENDO EL OBJETO VETERINARIA:
echo('<div style="background: #000;color: #fff;padding: 50; text-align:center;">' .
    '<h1 style="text-transform:uppercase;">' . $Veterinaria->getNombre() . '</h1>' .
    '<h2> Dirección: ' . $Veterinaria->getDireccion() . '</h2>' .
    '<h2> Teléfono: ' . $Veterinaria->getTelefono() . '</h2>' .
    '</div>' 
    );

//IMPRIMIENDO OBJETOS PERSONA:
echo('<div style="display:flex;"><div style="background: #525252;color: #fff;padding: 50; width: 50%;"> 
    <h2>CLIENTES</h2>' );
    echo('<pre>');
    var_dump($listaPersona);
    echo('</pre> </div>');

//IMPRIMIENDO OBJETOS MASCOTA:
echo('<div style="background: #7c7c7c;color: #fff;padding: 50; width: 50%;"> 
    <h2>MASCOTAS</h2>' );
    echo('<pre>');
    var_dump($listaMascota);
    echo('</pre> </div>');


?>