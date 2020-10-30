<?php
  if(isset($_POST['submit'])){
    if(!empty($_POST['check_list'])){
      foreach($_POST['check_list'] as $selected){
        echo $selected;

        for ($i=0; $i == count($_POST['check_list']) ; $i++) {
            $arraySelect = array($selected);
        }
      print_r ($arraySelect);

      setcookie("cookie","1");

      }
    }
}
?>
