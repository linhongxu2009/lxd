<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style>
 *{
  outline: none;
  user-select: none;
}

body{
  margin: 0;
  padding: 0;
  background: url(s.JPG);
  background-size: cover;
  background-attachment: fixed;
}
#footleft{
	font-size: 20px;
	position: fixed;
	left: 20px;
	bottom: 20px;
	color: rgba(0, 0, 0, .2);
	text-shadow: 2px 2px 3px rgba(255, 255, 255, .1);
}

form{
  background-color: rgba(255, 255, 255, .1);
  width: 20px;
  height: 10px;
  border-radius: 30px;
  position: absolute;
  top: 50%;
  left: 50%;
  overflow: hidden;
  transform: translate(-50%, -50%);
-webkit-backdrop-filter: blur(3px);
  backdrop-filter: blur(3px);
  border-left: 2px solid rgba(255, 255, 255, .3);
  border-top: 2px solid rgba(255, 255, 255, .3);
  box-shadow: 2px 2px 10px rgba(0, 0, 0, .2);
  text-align: center;
  animation: 3s open forwards;
  vertical-align: center;
}

h1{
  margin: 20px;
  font-weight: 200;
  font-size: 50px;
}
.tt{
  color: rgba(0, 0, 0, .2);
  text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
  opacity: 0.9;
}

input{
  border: none;
  width: 70%;
  font-size: 22px;
  padding: 10px;
  margin-bottom: 32px;
  border-radius: 16px;
  background-color: transparent;
  backdrop-filter: blur(3px);
  border-left: 2px solid rgba(255, 255, 255, .3);
  border-top: 2px solid rgba(255, 255, 255, .3);
  box-shadow: 2px 2px 2px rgba(0, 0, 0, .2);
  text-shadow: 2px 2px 2px rgba(0, 0, 0, .2);
  color: rgba(0, 0, 0, .2);
}
::placeholder{
  color: rgba(0, 0, 0, .2);
  opacity: 0.8;
}

.btn{
  width: 40%;
  font-size: 34px;
  font-weight: bold;
  margin-top: 10px;
  cursor: pointer;
}

input:focus{
  border: none;
  background-color: rgba(255, 255, 255, .1);
  text-shadow: 1px 1px 2px rgba(0, 0, 0, .2);
  border-right: 2px solid rgba(255, 255, 255, .3);
  border-bottom: 2px solid rgba(255, 255, 255, .3);
  box-shadow:inset 2px 2px 2px rgba(0, 0, 0, .2);
}

@keyframes open{
     0%{
		 width: 20px;
	 }
     45%{
		 width: 350px;
	 }
	 55%{
		 width: 350px;
		 height: 1px;
	 }
     100%{
		 width: 350px;
		 height: 350px;
	 }
}
</style>
  <title>登录界面</title>
</head>
<body>
  <form method="post" action="login验证.php">
    <h1 class="tt">登录</h1>
    <input name="mm" type="password" placeholder="密码">
    <input type="submit" class="btn tt" value="登 录" ><br>
  </form>
  
</body>
</html>
