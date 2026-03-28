<?php

// La variable no está definida
// Devuelve true y lanza un aviso tipo Notice: undefined variable
var_dump(is_null($var));

//Se asigna la constante NULL
$var = NULL;
var_dump(is_null($var));

//Se declara la variable pero no se le asigna ningún valor
$var;
var_dump(is_null($var));

echo '-----';
$var1 = 'valor';
$var2 = NULL;
var_dump(isset($var1)); // Devuelve true ya que la variable esta definida y tiene un v
unset($var1);           // Destruye la variable
var_dump(isset($var1)); // Devuelve false ya que la variable esta definida pero ahora
var_dump(isset($var2)); // Devuelve false ya que la variable esta definida pero tiene
var_dump(isset($var3)); // Devuelve false ya que la variable no está definida

echo '-----';
// Todos estos ejemplos devuelven el valor true
$var10 = '';
$var20 = null;
$var30 = 0;
var_dump(empty($var10));
var_dump(empty($var20));
var_dump(empty($var30));
var_dump(empty($var3)); // no existe
