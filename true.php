<?php session_start();
   $input=$_SESSION['input'];
     print_r($input);

?>



<?php

//— Если её неправильный ответ True, то вычитаем значения входов из веса каждой ножки:

 for($i=0; $i<15; $i++)
                    {
                        $weight[$i] -= $input[$i];
                    }

        $_SESSION['weight']= $weight;   
?>
                <script type="text/javascript">
setTimeout('location.replace("replace.php")', 0);
</script>