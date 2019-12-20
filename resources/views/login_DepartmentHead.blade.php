<html>
<head>
<br>
<title> Login</title>
<style>
.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
</style>
</head>
<body>
        
<div>
<form method="Get" action="{{ url('index') }}"   style="background-image: url(save1.jpg); height:550px; width:500px; 
text-align:center; margin-left:400px">
@csrf

<div style="text-align:center;color:blue" > <h1> Login  </h1> </div>
<img src="https://img.icons8.com/color/40/000000/person-male.png">
<div style="text-align:center;color:peru" > <h1> Login For Department Head  </h1> </div><hr>
<div style="text-align:center"  ><img src="https://img.icons8.com/ios-glyphs/30/000000/person-male.png">
   <label><h4>Enter name </h4></label><input maxlength="25"  type="text" name="name"> 
</div><hr>

<div style="text-align:center" style="background-color:#d3d3d3; height:300px; width:500px; 
text-align:center; margin-left:400px"><label> <img src="https://img.icons8.com/ios-glyphs/30/000000/person-male.png">
 <h4>Enter Password</h4> </label> <input maxlength="200"type="password" name="pass" /> 
 </div><hr><br><br>

 <button type="submit" style="background-color:darkcyan;" href="index" >Submit</button>     
</form>

</div>
</body>
</html>