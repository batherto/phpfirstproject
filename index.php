<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<?php echo '<p>Hello World I am PHP</p>'; ?> 

<?php  

include('user.php');
$user1 = new Member('Brad','brad@here.com','Nov 14th');
//$brad->getAge();
echo $user1->getType();
echo "</br></br>";
$user2 = new Admin('Danny', 'danny@here.com', 3);
echo $user2->getType(); 

?>
 </body>
</html>