<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-color: #03a9f4;
    }
        .msg {
	width: 90%;
	margin: auto;
	padding: 1rem;
	font-family: Helvetica;
	text-align: justify;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

.msg > .closed {
	font-size: 1.6rem;
	padding: 0;
}
.msg > .closed:hover { cursor: pointer;}

.msg-error {
	border: thin solid #ebccd1;
	color: #a94442;
	background-color: #f2dede;
	border-radius: 5px;
}

.msg-ok {
	border: thin solid #d6e9c6;
	color: #3c763d;
	background-color: #dff0d8;
	border-radius: 5px;
}

    </style>
</head>
<body>
    
<?php 

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Belyakov_db";

$conn=mysqli_connect($servername,$username,$password,$dbname);


$login=$_POST['login'];
$passwd=$_POST['password'];
$passwd2=$_POST['confirm_password'];

if($passwd==$passwd2){
    $query = "SELECT * FROM Victor_table WHERE login='$login'";

    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result)==0){
            $err="Пользователь с таким логином уже сущетвует.";
        
    $hash=password_hash($passwd, PASSWORD_BCRYPT );
           $query= "Insert Into Victor_table (login, password) Values ('$login','$hash')";
    
        if(mysqli_query($conn,$query)){
       
            echo <<<_OUT
            <div class="msg msg-ok">
                <div>Пользователь зарегистрирован</div>
                <div class="closed">&#10006;</div>
            </div>
        _OUT;
    
        }
    
    } else{
       

        echo <<<_OUT
        <div class="msg msg-error">
            <div>Пользаватель с данным логином уже существует</div>
            <div class="closed">&#10006;</div>
        </div>
    _OUT;
        
    } 
}
else{

    echo <<<_OUT
    <div class="msg msg-error">
        <div>Пароль не совпадает</div>
        <div class="closed">&#10006;</div>
    </div>
_OUT;
}

header("refresh:2; url=../index.html");
sleep(1); 
?>
</body>
</html>
