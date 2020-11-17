<?php 
include_once('database.php');
function registerUser($name,$email,$password){
    $sql="insert into admin(name, email, password) 
    values ('$name','$email',MD5('$password'))";
    execute($sql);
}
function login($email,$password){
    $sql="select * from nguoidung
    where userName='$email' and passWord='$password'";
    return query($sql);

}

?>