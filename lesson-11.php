<?php
if(empty($_GET['name'])){
header('Location:'.$_SERVER['PHP_SELF'].'?'.'name=CyberBullet');
}else{echo "";}
?>
<html>
<head>
<title>XSS Labs - CyberBullet</title>
<style>
a {
  text-decoration:none;
}
*{
                margin: 0;
                padding: 0;
            }
/* unvisited link */
a:link {
    color: yellow;
}

/* visited link */
a:visited {
    color: cyan;
}

/* mouse over link */
a:hover {
    color: white;
}

/* selected link */
a:active {
    color: green;
}
		
		.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
}
		
	body {
		background-image: url("bg.jpg"); 
		background-color: #000000;
		color: #FF0000;
		text-align: center;
		font-family: helvetica;
		font-size: 14px;
		margin: 10% auto auto auto;
	}
	
	#pesan {
		background-color: #000000;
		width: 40%;
		padding: 20px;
		border: 2px solid #f00;
		margin: 0px auto auto auto;
	}
		#menu {
		background-color: #000000;
		width: 100%;
		padding: 20px;
		border: 2px solid #f00;
		margin: 0px auto auto auto;
	}
	<!---Konten 1--->	
	</style>
<style>

            *{
                margin: 0;
                padding: 0;
            }

body {
font-family:monospace;

}
            canvas {display:block;}
h1 {
color:white;
}
.g {
color:green;
}
.h {
color:red;
}
.s {
color:blue;
}
.k {
color:skyblue;
}
.y {
color:yellow;
}
img {
  border-radius: 50%;
}
marquee {
color:white;
}
.body {
border:10px;
}
.o {
color:green;
}
</style>
</head>
<body>
<center>
  <div id="menu">
    <a href="lesson-1.php">Lesson-1</a>
    <a href="lesson-2.php">Lesson-2</a>
    <a href="lesson-3.php">Lesson-3</a>
    <a href="lesson-4.php">Lesson-4</a>
    <a href="lesson-5.php">Lesson-5</a>
    <a href="lesson-6.php">Lesson-6</a>
    <a href="lesson-7.php">Lesson-7</a>
    <a href="lesson-8.php">Lesson-8</a>
    <a href="lesson-9.php">Lesson-9</a>
    <a href="lesson-10.php">Lesson-10</a>
    <a href="lesson-11.php">Lesson-11</a>
    <a href="lesson-12.php">Lesson-12</a>
  </div>
<br><br><br>
<br><br><br>
<div id="pesan">
	<center><a href=><img src=logo.png height=300 width=350 alt="#" /></a></center>
	<br>

<h2 class='g'><b class='h'>Name : <?php
$name = $_GET['name'];
$ban = array('onAbort',
'onBlur','onChange','onClick','onDblClick','onDragDrop','onError','onFocus','onKeyDown','onKeyPress','onKeyUp','onLoad','onMouseDown','onMouseMove','onMouseOut','onMouseOver','onMouseUp','onMove','onReset','onResize','onSelect','onSubmit','onUnload','onscroll', 'onbort', '<script>', 'java', 'script', 'javascript');
foreach($ban as $banned){
while(preg_match( '/'.$banned.'/i', $name)){
$name = preg_replace('/'.$banned.'/i', '', $name);}}
 echo $name; ?>

</b></h2>
<marquee scrollamount='10'><h2><b class='y'>ဖိုးလမင်းလဲ</b> <b class='g'>သူ့အရွယ်နဲ့</b> <b class='h'>အစွယ်နဲ့</b> <b class='k'>ဖယောင်းတိုင်ငယ်လဲ</b><b class='y'>သူ့အရွယ်နဲ့</b> <b class='g'>အစွယ်နဲ့</b><h2></marquee><br><br><br>
<p style='color:skyblue; font-family:Cursive;width:500px;' scrollamount='5' direction='up'><h2>Let's Improve Your Skill With My Labs</h2>
</center>
</p>
</body>
</html>