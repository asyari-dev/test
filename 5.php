<?php 
function generate($jumlah_generate) {
    $abjad_angka = 'abcefghijklmnopqrstuvwxyz1234567890';
   
    for( $a=$jumlah_generate;$a>0;$a--)
    {
          echo  substr(str_shuffle($abjad_angka), 0, 4)."-".
                substr(str_shuffle($abjad_angka), 0, 4)."-".
                substr(str_shuffle($abjad_angka), 0, 4)."-".
                substr(str_shuffle($abjad_angka), 0, 4)."<br>"; 
    }
   
}
 generate(3);
	