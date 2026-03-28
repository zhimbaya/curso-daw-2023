<?php
if ($_SERVER['PHP_AUTH_USER']!='gestor' || $_SERVER['PHP_AUTH_PW']!='secreto') {
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Usuario no reconocido!";
    exit;
}
/*

 * 
-- 1.- Seleccionamos la base de datos Proyecto 
 use proyecto;
-- 2.- Creamos la tabla usuarios 
 create table usuarios(usuario varchar (20) primary key,pass varchar (64) not null);
-- 3.- Creamos un usuario de prueba, vamos a utilizar sha256
-- Para guardar las contraseñas, en realidad guardamos el hash. 
 insert into usuarios select 'admin', sha2('secreto', 256);
 insert into usuarios select 'gestor', sha2('pass', 256);
 * 
 *  */
?>