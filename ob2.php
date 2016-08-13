<pre>
<?php
   W[i] - вес i-го элемента,
Speed - скорость обучения,
Delta - знак (-1 или 1),
X[i] - значение i-го входящего сигнала (во многих случаях 0 или 1)
   */
   $x = $_POST['a'];



 class Y( $x)
{   $Result = $S(x);//подсчет
    if (Result >= 0 ) return $Result;
    else return 0 ;//реакция
}
class S($x)
{//Суммирование
$result = 0 ;//результат
for (int $i = 0 ; $i < $x.Count; $i++)
   {//подсчет суммы произведения
    $result += $w[$i] * $x[$i];
   }
  return $result;//собственно выдача
}
class Correct($x, $delta, $speed)
{//Корректировка весов по x, delta и speed
  $change = true;
for (int $i = 0 ; $i < $w.Count; $i++)
    $w[$i] = $w[$i]+ $speed * $delta * $x[$i];
}


/*Теперь основные функции класса Net:

- Добавление нового нейрона

- Распознавание

- Корректировка по всем нейронам           */

//Основной "рабочей" единицей в этом классе - список нейронов - List net = new List();

//Опишем функции:

class Recognize($x)
{
$result = ''\
'' ;
$lastNeuron = -1;
$max = 0 ;
foreach (Neuron n in net)
  {//подсчет и выбор максимального для каждого нейрона
   $Candidate = $n.$Y($x);
   if (Candidate > max)
    {
     $max = $Candidate;
     $result = $n.$Symbol;
     $lastNeuron = $net.$IndexOf($n);
    }
  }
return $result;
}
class $Correct($symbol, $x, $speed)
{//корректировка группы нейронов
$check = false;
for ($i = 0 ; $i < $net.$Count; $i++)
   {//поиск необходимых и выборочная корректировка
    if ($symbol == ''\
'' )
     {
      if ($net[$i].$LastY > 0 )
      $net[$i].$Correct($x, -1, $speed);
     }
     else
      {
      if ($net[$i].$Symbol == symbol)
      {
       $net[$i].$Correct($x, 1 , $speed);
       $check = true;
      }
      else if ($net[$i].$LastY > 0 )
         $net[$i].$Correct($x, -1, $speed);
     }
   }
if (!check)
  {
   net.Add(new Neuron(symbol, x.Count-1));
   net[net.Count - 1 ].Correct(x, 1 , speed);
   StreamWriter write = new StreamWriter("chars.txt" , true);
   write.WriteLine(symbol);
   write.Close();
  }
return Recognize(x);
}
public void AddNeuron(char symbol)
{
    net.Add(new Neuron(symbol, resolution));
}



















//  print_r($x);

//  echo $x[2];
 /*


    /*

        $myArray = array ($_POST['a']);
          echo  $myArray;
            echo "pol";

            for ($i = 1; $i <= 10; $i++) {

echo $i;

}


       for   ($j=0; $j<4; $j++ )     {
         echo " <br>";
       for    ($i=0; $i<3; $i++ )     {
           $a[i][j]=$myArray[$j][$i];
           echo       " $a[i][j] ";



       }     }

   */




?>
</pre>