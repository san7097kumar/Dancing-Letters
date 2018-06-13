
<!DOCTYPE html>
<?php
session_start();
if(isset($_POST["submit"]))
{
 $name='';
 if(!empty($_POST['name']))
 {
 $name=strtoupper($_POST["name"]);
 }
$length=strlen($name);
if($length==1)
{
$a=$name[0];
}
if($length==2)
{
  $a=$name[0];
  $b=$name[1];
}
if($length==3)
{
  $a=$name[0];
  $b=$name[1];
  $c=$name[2];
}
if($length==4)
{
  $a=$name[0];
  $b=$name[1];
  $c=$name[2];
  $d=$name[3];
}
if($length==5)
{
  $a=$name[0];
  $b=$name[1];
  $c=$name[2];
  $d=$name[3];
  $e=$name[4];
}
if($length==6)
{
  $a=$name[0];
  $b=$name[1];
  $c=$name[2];
  $d=$name[3];
  $e=$name[4];
  $f=$name[5];
}
if($length==7)
{
  $a=$name[0];
  $b=$name[1];
  $c=$name[2];
  $d=$name[3];
  $e=$name[4];
  $f=$name[5];
  $g=$name[6];
}
if($length==8)
{
  $a=$name[0];
  $b=$name[1];
  $c=$name[2];
  $d=$name[3];
  $e=$name[4];
  $f=$name[5];
  $g=$name[6];
  $h=$name[7];
}
if($length==9)
{
  $a=$name[0];
  $b=$name[1];
  $c=$name[2];
  $d=$name[3];
  $e=$name[4];
  $f=$name[5];
  $g=$name[6];
  $h=$name[7];
  $i=$name[8];
}
$_SESSION['usr']=$name;
}

 ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scal=1">
    <title>jumping letters</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   </head>
      <link rel="stylesheet" href="css/jump.css">

  </head>
  <body>
    <center>

    <section id="total">
        <div class="container">
      <div class="hero">
        <div class="row ">
          <div class="col-md-12">
         <h2> JUMPINT LETTERS</h2>
<?php
switch($length)
{
  case 0:
  echo
  "<p>
  <span>T</span>
  <span>E</span>
  <span>X</span>
  <span>T</span>
  <span>P</span>
  <span>L</span>
  <span>Z</span></p>";
  break;
case 1:
echo "<p>
<span>".$a."</span></p>";
break;
case 2:
echo "<p>
<span>".$a."</span>
<span>".$b."</span></p>";
break;
case 3:
echo "<p>
<span>".$a."</span>
<span>".$b."</span>
<span>".$c."</span></p>";
break;
case 4:
echo "<p>
<span>".$a."</span>
<span>".$b."</span>
<span>".$c."</span>
<span>".$d."</span></p>";
break;
case 5:
echo "<p>
<span>".$a."</span>
<span>".$b."</span>
<span>".$c."</span>
<span>".$d."</span>
<span>".$e."</span>
</p>";
break;
case 6:
echo "<p>
<span>".$a."</span>
<span>".$b."</span>
<span>".$c."</span>
<span>".$d."</span>
<span>".$e."</span>
<span>".$f."</span>
</p>";
break;
case 7:
echo "<p>
<span>".$a."</span>
<span>".$b."</span>
<span>".$c."</span>
<span>".$d."</span>
<span>".$e."</span>
<span>".$f."</span>
<span>".$g."</span>
</p>";
break;

 // case 8:
 // echo "<p>
 // <span>".$a."</span>
 // <span>".$b."</span>
 // <span>".$c."</span>
 // <span>".$d."</span>
 // <span>".$e."</span>
 // <span>".$f."</span>
 // <span>".$g."</span>
 // <span>".$h."</span>
 // </p>";
 // break;

default:
echo
"<p>
<span>T</span>
<span>E</span>
<span>X</span>
<span>T</span>
<span>P</span>
<span>L</span>
<span>Z</span></p>";
}
?>
</div>

</div>
</div>
</div>

     <div class="container">


  <form action="" method="post">
             <div class="form-group">
               <input type="text" id="input1"class="form-control form-control-lg" placeholder="Enter Any Text..." name="name" required>
             </div>

               <input type="submit" value="submit" name="submit" class="btn btn-outline-light btn-block ">

             </form>
             </div>
           </center>
</section>

  </body>
  </html>
