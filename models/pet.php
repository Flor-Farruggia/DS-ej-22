<?php
/**Declarar una clase “Mascota” con las siguientes propiedades (Básicas): Id,  Nombre, Raza, 
Declarar una clase "DueñoMascota" con las siguientes propiedades (Básicas): Id, Nombre, Apellido, Documento, Celular, Dirección.
A la clase Mascota, se le debe agregar la clase DueñoMascota como propiedad (Dueño). Además agregarle un método que imprima sus propiedades y todas las propiedades del dueño.
Luego en un archivo llamado index.php instanciar la clase Mascota, completar sus propiedades.
Instanciar la clase DueñoMascota, completar sus propiedades, y asignar el dueño a la mascota. Finalmente llamar al método que imprime las propiedades de la clase Mascota.
 */

class Pet
{
    public $id;
    public $name;
    public $race;
    Public $owner;

    public function ShowPetData ()
    {
        echo 'this pet data is: '.'<br>';
        echo 'Id: '.$this->id.'<br>';
        echo 'Name: '.$this->name.'<br>';
        echo 'Race: '.$this->race.'<br>';
        echo 'The owner data is: '.'<br>';
        echo 'Owner Id: '.$this->owner->id.'<br>';
        echo 'Owner name: '.$this->owner->name.'<br>';
        echo 'Owner last name: '.$this->owner->lastName.'<br>';
        echo 'Owner document: '.$this->owner->doc.'<br>';
        echo 'Owner telephone: '.$this->owner->phone.'<br>';
        echo 'Owner address: '.$this->owner->address.'<br>';
    }
}