<html>
<head>
<br>
<title> Login</title>
<style>
.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(67, 201, 123, 0.2);
}
</style>
</head>
<body>
        
<div>
<form method="Get" action="{{ url('index') }}"  style="background-image: url(save.jpg); height:570px; width:500px; 
text-align:center; margin-left:400px">
@csrf
<div style="text-align:center;color:black" > <h1> Login  </h1> </div>
<img src="https://img.icons8.com/dusk/64/000000/conference-call.png" >
<div style="text-align:center;color:yellow" > <h1> Login For Section Head  </h1> </div><hr>
<div style="text-align:center"  ><img src="https://img.icons8.com/ios-filled/50/000000/conference-call.png">
   <label><h4>Enter name </h4></label><input maxlength="25"  type="text" name="name"> 
</div><hr>

<div style="text-align:center" style="background-color:#d3d3d3; height:300px; width:500px; 
text-align:center; margin-left:400px"><label> <img src="https://img.icons8.com/ios-filled/50/000000/conference-call.png">
 <h4>Enter Password</h4> </label> <input maxlength="200"type="password" name="pass" /> 
 </div><hr><br><br>
 <button type="submit" >Submit</button> 
</form>

</div>
</body>
</html>