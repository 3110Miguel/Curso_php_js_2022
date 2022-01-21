<?php

function saludar(){
    return 'Hola mudo';
}

function saludarme($nombre='Usuario'){
    return 'Hola '.$nombre;
}

//llamar la función
echo saludar();
echo '<br/>';  //Etiqueta html salto de línea
echo saludarme('Miguel');

?>