<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php
    //require_once('../engine/init.php'); 
    $title="Регистрация";
    $h1="Зарегистрироваться";
    $year=date("Y");
    
?>
	<title><?=$title;?></title>
	<link rel="stylesheet" media="screen" href="./css/styles.css" >
</head>
<body>
<form class="contact_form" action="../engine/registration.php" method="post" >
    <ul>
        <li>
             <h1><?=$h1?></h1>
        
        </li>
        <li>
            <label >Login:</label>
            <input type="email" name="login" placeholder="Логин" required />
        
        </li>
        <li>
            <label >Password</label>
            <input type="password" name="password"   placeholder="Пароль" required />
        </li>
      
        <li>
            <label >Имя:</label>
            <input type="text" name="name" placeholder="Имя" required />
       
        </li>
        <li>
            <label>Телефон:</label>
            <input type="number" name="u_call" placeholder="Телефон" required />
       
        </li>
   
        <li>
             <button class="submit" type="submit" >Отправить</button>
        </li>
   
    </ul>
</form>
</body>
</html>