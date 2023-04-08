<?php

 function validaLogin($login,$senha){

 $loginBD="rafael@hotmail.com";
 $senhaBD="1234";

 if ($login==$loginBD && $senha==$senhaBD ){
   return true;
 }else{
   return false;
 }
 }
 ?>