<pre>
<?php
   W[i] - ��� i-�� ��������,
Speed - �������� ��������,
Delta - ���� (-1 ��� 1),
X[i] - �������� i-�� ��������� ������� (�� ������ ������� 0 ��� 1)
   */
   $x = $_POST['a'];



 class Y( $x)
{   $Result = $S(x);//�������
    if (Result >= 0 ) return $Result;
    else return 0 ;//�������
}
class S($x)
{//������������
$result = 0 ;//���������
for (int $i = 0 ; $i < $x.Count; $i++)
   {//������� ����� ������������
    $result += $w[$i] * $x[$i];
   }
  return $result;//���������� ������
}
class Correct($x, $delta, $speed)
{//������������� ����� �� x, delta � speed
  $change = true;
for (int $i = 0 ; $i < $w.Count; $i++)
    $w[$i] = $w[$i]+ $speed * $delta * $x[$i];
}


/*������ �������� ������� ������ Net:

- ���������� ������ �������

- �������������

- ������������� �� ���� ��������           */

//�������� "�������" �������� � ���� ������ - ������ �������� - List net = new List();

//������ �������:

class Recognize($x)
{
$result = ''\
'' ;
$lastNeuron = -1;
$max = 0 ;
foreach (Neuron n in net)
  {//������� � ����� ������������� ��� ������� �������
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
{//������������� ������ ��������
$check = false;
for ($i = 0 ; $i < $net.$Count; $i++)
   {//����� ����������� � ���������� �������������
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