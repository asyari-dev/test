<?php
$dataKey = ['dumb', 'ways','the', 'best'];
$word    = 'dumbways';

function check($dataKey, $word) {

   // untuk memecah array
   for ($i=0; $i < count($dataKey) ; $i++) { 

      // penyusunan pola 
      $pola= '/'.$dataKey[$i].'/';

      // untuk mencari yang cocok
      if(preg_match($pola, $word, $match)){
         echo $match[0].' => '.'true <br>';
      }else{
         echo $dataKey[$i].' => '.'false <br>';
      }

   }

}
check($dataKey,$word);

