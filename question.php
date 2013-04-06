<html>
<head>
     <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
<style type="text/css">
    //only few stuff to power the design
body{font-family:arial}
  input[type=text]{height:40px}
    .qtalk{height:300}
    .answer{height:200px;background-color:lightblue;border-radius:15px;padding:8px;width:60%;height:30px}
</style>
</head>
<body>
    
<?php
include"Header.php";
?>
 
    </div>
  </div>
</div>

<div style="padding:20px" class="pw-widget pw-size-medium pw-counter-show">  		
	<a class="pw-button-facebook"></a>			
	<a class="pw-button-twitter"></a>			
	<a class="pw-button-email"></a>			
	<a class="pw-button-post"></a>		
</div>
<script src="http://i.po.st/share/script/post-widget.js#publisherKey=kppnc0gumi3kavgbp51i" type="text/javascript"></script>
        <?php
$id=$_REQUEST["id"];
$check=array(isset($_REQUEST["type"]),"hi");

if($_REQUEST["type"]=="edit"){
    //make a connection but this thing will be changed and we're going to get 
    // a function that is written only once
    mysql_connect("localhost","root");
    mysql_select_db("arabic");
    $q=mysql_query("SELECT * 
FROM  `questions` 
WHERE  `id` =".$id."
LIMIT 0 , 30");
    $some=mysql_fetch_array($q);
    echo"<form  action='submit.php' style='padding:15px' method='post' name=\"f\">";
    echo"<h4>Edit the  question</h4>";
    echo "<textarea  rows='4' cols='18' style='width:100%' >".$some["qt"]."' </textarea>";
    echo "<br><input style='width:100%' id='note' name='note' type='text' placeholder='Notes for Asker ' />";
    $a="what is the bna2";
    echo"<br>";
    echo"<br><input class='btn btn-large btn-primary' type='submit'  value='submit' />";
    echo"</form>";
    die();
}else{
};
?>

    <div style="padding:20px">
    <?php
$id=$_REQUEST["id"];
//rating of this questions
$a="Grammar";
$b=" Basics";
$c=" meaning of some workds";
echo $a.">>".$b.">>".$c;
mysql_connect("localhost","root");
mysql_select_db("arabic");
$q=mysql_query("SELECT * 
FROM  `questions` 
WHERE  `id` =".$id."
LIMIT 0 , 30");
$thearray=mysql_fetch_array($q);
echo "<br><hr><h2>";
echo $thearray["qt"];
echo"</h2>";
echo"</button>";

//tags
echo"<br><br><small>3 views</small>";
echo'         <a href="?id='.$id.'&type=edit"> <button  class="btn btn-danger">Suggest edits</button></a>
<button class="btn btn-primary">Embed</button>
<a href="javascript:print();">Print </a>

';






echo"</span>";

echo"<h3>You should also read</h3>";
echo"<div style='padding;100px;position:relative'><ul>";
$query=mysql_query("SELECT * 
FROM  `questions` 
WHERE  `tag1` LIKE  'a' 
");
while($r=mysql_fetch_array($query)){
extract($r);
echo"<li>";
//mysql query that gets the question that has the same tags 

echo"<a href='http://localhost/arabicsteps/question.php.php?id=";
echo $r["id"];
echo "&type";
echo "'>".$r["qt"];

    echo"</a>";
    echo"<br>";
};
echo"</div>";

?>
        

        
  </div>
    
    </textarea>
    </body>
</html>
