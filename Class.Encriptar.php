
<?php

 class Encryptar
 {
    private static $llave= "RolandoArriazaWildosft";
 
    public static function encrypt ($cadena_entrada) {
        $cadena_encryp = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,
		md5(Encryptar::$llave), 
		$cadena_entrada, MCRYPT_MODE_CBC, 
		md5(md5(Encryptar::$llave))));
        return $cadena_encryp;
    }
 
    public static function decrypt ($cadena_encryptada) {
        $cadena_desencryp = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, 
		md5(Encryptar::$llave),
		base64_decode($cadena_encryptada),
		MCRYPT_MODE_CBC, 
		md5(md5(Encryptar::$llave))), "\0");
        return $cadena_desencryp ;
    }
 }
 
?>





