<?php
require 'config.php';



global $action;
$action= get_request('a');
switch ($action)
{
  case "login":
    Login();
    break;
  case "logout":
    Logout();
    break;
  case "err":
    Main(SITE_ADDR, true);
    break;
  default:
   Main(SITE_ADDR, false);
    break;
}

//*******************************************************
function Main($addr, $error){
?>
<!DOCTYPE html>
<html>
   <head>
      <title>iPlan</title>
      <meta charset="utf-8">
      <meta content="ie=edge" http-equiv="x-ua-compatible">
      <meta content="template language" name="keywords">
      <meta content="Admin" name="author">
      <meta content="Admin dashboard html template" name="description">
      <meta content="width=device-width, initial-scale=1" name="viewport">
      <link href="favicon.png" rel="shortcut icon">
      <link href="apple-touch-icon.png" rel="apple-touch-icon"> 
      <link href="css/vendor/bootstrap/bootstrap.css" rel="stylesheet">   
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body class="auth-wrapper">
      <div class="all-wrapper with-pattern">
         <div class="auth-box-w">
            <div class="logo-w"><img alt="" src="img/logo-big.png"></div>
            <h4 class="auth-header">Авторизация</h4>
            <form action="?a=login" method="post" id="loginForm">
               <?php if ($error) {?>
				<div class="form-group">
                  <span style="color:red;">Ошибка</span>       
               </div>
			   <?php }?>
			   <div class="form-group">
                  <label for="">Имя пользователя</label>
                  <input class="form-control" name="username">
                  <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                     <g id="user">
                        <g>
                           <path class="st0" d="M12,14c-5.6,0-8.2,4.6-8.8,10h2c0.5-4.3,2.3-8,6.8-8c4.5,0,6.3,3.7,6.8,8h2C20.2,18.6,17.6,14,12,14z M12,12
                              c3.3,0,6-2.7,6-6c0-3.3-2.7-6-6-6C8.7,0,6,2.7,6,6C6,9.3,8.7,12,12,12z M12,2c2.2,0,4,1.8,4,4c0,2.2-1.8,4-4,4c-2.2,0-4-1.8-4-4
                              C8,3.8,9.8,2,12,2z"/>
                        </g>
                     </g>
                  </svg>               
               </div>
               <div class="form-group">
                  <label for="">Пароль</label>
                  <input class="form-control" type="password" name="password">
                  <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                     <g id="key">
                        <g>
                           <path class="st0" d="M23,11H9.9C9.4,8.7,7.4,7,5,7c-2.8,0-5,2.2-5,5c0,2.8,2.2,5,5,5c2.4,0,4.4-1.7,4.9-4H18v1c0,0.6,0.4,1,1,1
                              c0.6,0,1-0.4,1-1v-1h2v2c0,0.6,0.4,1,1,1c0.6,0,1-0.4,1-1v-3C24,11.4,23.6,11,23,11z M5,15c-1.7,0-3-1.3-3-3c0-1.7,1.3-3,3-3
                              c1.7,0,3,1.3,3,3C8,13.7,6.7,15,5,15z"/>
                        </g>
                     </g>
                  </svg>
               </div>
               <div class="buttons-w">
                  <button class="btn btn-primary">Войти</button>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>
<?php


}

//*********************************************************

function Logout()
{
	$_SESSION['auth'] = "";
	$_SESSION['name'] = "";
	$_SESSION['user_access'] = '';
	session_destroy();

	if(isset($_SERVER['HTTP_REFERER']))
	{
		//header("location: ".$_SERVER['HTTP_REFERER']);
                redirect($_SERVER['HTTP_REFERER'],"header");
	}
	else
	{
		//header("location: index.php");
                redirect("login.php","header");
	}
}

//********************************************************
function Login(){
	global $session;
	global $db;
	$_SESSION['user_access'] = Null;
        try {
			$username = trim(getpost('username'));
			$password = trim(getpost('password'));

			//die(md5($password));
			
			/* Verify the login details are correct and redirect to secure.php */
			$session->isLogin($username, $password);
                        if($session->verifyAccess()){
							
							$user_id = $_SESSION['user_id'];
							$ip = getRealIpAddr();
							$action = "Вход пользователя";
							$ins = array("user"=>$user_id, "ip"=>$ip, "action"=>$action);
							$db->insert("log", $ins);
							
							$_SESSION['user_access'] =  $db->select("user_module", "user='".$user_id."'");
							
							
							$pos = strpos($_SERVER['HTTP_REFERER'], "login.php");
							if(isset($_SERVER['HTTP_REFERER']) && ($pos === false)){
								redirect($_SERVER['HTTP_REFERER'],"header");
							} else {
								redirect("index.php","header");
							}
                        }
	}
	catch(Exception $error) {
		print $error->getMessage();
	}


}
//*******************************************
function LoginErr() {
	global $userdata;

	//if(iMEMBER) goBack("index.php");
	//$backURL=$_SERVER['HTTP_REFERER'];
	$backURL="login.php?loginerror=1";
	if (!isset($_GET['error'])){ $error = "";}else{$error = $_GET['error'];}
	if ($error == 1) {
		die("1");
        echo GotoURLMsg($backURL,2,"Error");
	} elseif ($error == 2) {
		echo GotoURLMsg($backURL,0,"Администрацияга кирүүдө ката кетти.");
	} elseif ($error == 3) {
		echo GotoURLMsg($backURL,0,"Администрацияга кирүүдө ката кетти.");
	} elseif ($error == 4) {   
		echo GotoURLMsg($backURL,0,"Администрацияга кирүүдө ката кетти.");
	}



	//if(isset($_SERVER['HTTP_REFERER'])){
    //header("location: ".$_SERVER['HTTP_REFERER']);
    //}else{
    //header("location: index.php");
    //}
}

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
?>