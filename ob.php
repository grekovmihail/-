<?php session_start();
   $weight=$_SESSION['weight'];


?>
  <h2 align=center>
<?php
/*   W[i] - ��� i-�� ��������,
Speed - �������� ��������,
Delta - ���� (-1 ��� 1),
X[i] - �������� i-�� ��������� ������� (�� ������ ������� 0 ��� 1)
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

   // ���������� ������, ������� ��������� ���� ������ ������:

  //�������� ����������� ����

 /*
public void mul_w()
{    */

   for ($i = 0; $i <=14; $i++) // ��������� �� ������� ������
   {
   $mul[$i] = $input[$i]*$weight[$i]; // �������� ��� ������ (0 ��� 1) �� ��� ����������� ��� � ��������� � ������.
   }
  // }

// public void Sum()
 // {
  $sum = 0;
for ($i = 0; $i <=14; $i++) // ��������� �� ������� ������
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
  <a href="replace.php">����������� ���������</a>   <br>

         </h1>       <h1 align=center>
�� ����� ����:
<a href="false.php">True</a>
<a href="true.php">False</a>
  </h1>
    <pre>
    <?
  print_r($weight);

       ?>
       </pre>



