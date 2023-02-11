
<?php
class dht11{
 public $link='';
 function __construct( $huimidity ){
  $this->connect();
  $this->storeInDB($huimidity);
 }
 
 function connect(){
  $this->link = mysqli_connect('localhost','root','Your_Password') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'project') or die('Cannot select the DB');
 }
 
 function storeInDB($huimidity){
  $query = "update test set huimidity='".$huimidity."'";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
 
}
if($_GET['huimidity'] != ''){
 $dht11=new dht11($_GET['huimidity']);
}


?>