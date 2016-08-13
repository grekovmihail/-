<?php session_start();
   $weight=$_SESSION['weight'];


?>
  <h2 align=center>
<?php
/*   W[i] - вес i-го элемента,
Speed - скорость обучения,
Delta - знак (-1 или 1),
X[i] - значение i-го входящего сигнала (во многих случаях 0 или 1)
input


 */

 //      for($i=0; $i<15; $i++)
 //  { $weight[$i]=rand(-0.4, 0.4);}
$limit=3;

   $input = $_POST['a'];
   // print_r($x);
   for($i=0; $i<15; $i++)
   { if ($input[$i]!=1 ) $input[$i]=0;
     echo $input[$i];
   if (($i+1) % 3 ==0)
    echo '<br>';}

   // Распознаем символ, вызывая описанные выше методы класса:

  //случайно присваиваем веса

 /*
public void mul_w()
{    */

   for ($i = 0; $i <=14; $i++) // Пробегаем по каждому аксону
   {
   $mul[$i] = $input[$i]*$weight[$i]; // Умножаем его сигнал (0 или 1) на его собственный вес и сохраняем в массив.
   }
  // }

// public void Sum()
 // {
  $sum = 0;
for ($i = 0; $i <=14; $i++) // Пробегаем по каждому аксону
   {
 $sum += $mul[$i];
//}
 }
          //      public bool Rez()
        //    {
                if ($sum >= $limit)
                    echo "true";
                else echo "false";
                echo "$sum";
        //    }


       /*  NW1.mul_w();
            NW1.Sum();
            if (NW1.Rez()) listBox1.Items.Add(" - True, Sum = "+Convert.ToString(NW1.sum));
            else listBox1.Items.Add( " - False, Sum = "+Convert.ToString(NW1.sum));

         */


  $_SESSION['input']= $input;


?>
     </h2>
  <h1 align=center>
  <a href="replace.php">Определенно правильно</a>   <br>

         </h1>       <h1 align=center>
На самом деле:
<a href="false.php">True</a>
<a href="true.php">False</a>
  </h1>
    <pre>
    <?
  print_r($weight);

       ?>
       </pre>



