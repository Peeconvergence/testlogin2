<?php 
session_start();//create session To run
unset($_SESSION['loggedIN']);//unset valiable loggedIN
if(session_destroy()){ //Destroy all data
header('Location:User_card.php');//redirect to index.php page
exit();}
?>