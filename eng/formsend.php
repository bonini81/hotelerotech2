<?php




$subject = 'Pugle WebForm';               
$emailadd = 'andresdominguez81@gmail.com';      
$url = 'http://hotelerotech.com/gracias.php';              
$req = '0';                           

// --------------------------Do not edit below this line--------------------------
$text = "Results from form:\n\n";      
$space = '  ';
$line = '
';
foreach ($_POST as $key => $value)
{
     if ($req == '1')
     {
          if ($value == '')
          {echo "$key is empty";die;}
     }
     $j = strlen($key);
          if ($j >= 20)
          {echo "Name of form element $key cannot be longer than 20 characters";die;}
     $j = 20 - $j;
          for ($i = 1; $i <= $j; $i++)
          {$space .= ' ';}
     $value = str_replace('\n', "$line", $value);
     $conc = "{$key}:$space{$value}$line";
     $text .= $conc;
     $space = '  ';
}
mail($emailadd, $subject, $text, 'From: '.$emailadd.'');
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>