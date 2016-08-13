<?php session_start();
?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Обучение</title>
</head>
     <style type="text/css">
 input[type="checkbox"] {
    background: url(/bb.jpg); /* Переключатель выключен */
    height: 32px; /* Высота картинки */
    width: 32px; /* Ширина картинки */


    cursor: pointer; /* Курсор в виде руки */
   }
   input[type="checkbox"]:checked {
        -webkit-appearance: none; /* Прячем чекбокс */
    background: url(bb.jpg);  /* Переключатель включен */

   }

      </style>
<body>



  <form method="post" action="ob.php">

<p align=center><input type="checkbox" name="a[0]" value="1"><input type="checkbox" name="a[1]" value="1"><input type="checkbox" name="a[2]" value="1">
<br><input type="checkbox" name="a[3]" value="1"><input type="checkbox" name="a[4]" value="1"><input type="checkbox" name="a[5]" value="1">
<br><input type="checkbox" name="a[6]" value="1"><input type="checkbox" name="a[7]" value="1"><input type="checkbox" name="a[8]" value="1">
<br><input type="checkbox" name="a[9]" value="1"><input type="checkbox" name="a[10]" value="1"><input type="checkbox" name="a[11]" value="1">
<br><input type="checkbox" name="a[12]" value="1"><input type="checkbox" name="a[13]" value="1"><input type="checkbox" name="a[14]" value="1">

   <p align=center><input type="submit" value="распознать"></p>
  </form>

</body>

</html>