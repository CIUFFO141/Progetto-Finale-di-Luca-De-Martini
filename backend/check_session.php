<?php 

session_start();

if( $_SESSION['log'] && !isset( $_COOKIE['session_id'] )){

    $id = $_SESSION['id'];
    $email = $_SESSION['email'];

    $unique_id = $id . "---" . $email;

    $encryption_iv = '1234567891011121';
    include("key.php");
    $session_id = openssl_encrypt( $unique_id , "AES-128-CTR", $secret_key, 0 , $encryption_iv);
    
    setcookie( "session_id", $session_id , time()+60 * 60 * 24 * 30 , "/");


}elseif( isset( $_COOKIE['session_id'] ) ){

    $session_id = $_COOKIE['session_id'];
    $encryption_iv = '1234567891011121';
    include("key.php");
    $unique_id = openssl_decrypt( $session_id , "AES-128-CTR", $secret_key, 0 , $encryption_iv);
    
    $_SESSION['log'] = true;
    $_SESSION['id'] = explode("---", $unique_id )[0];
    $_SESSION['email'] = explode("---", $unique_id )[1];

}else{
    unset( $_COOKIE['session_id'] ); 
    setcookie('session_id', '', -1, '/');
    session_destroy();
}

?>