<?php

function cetak_gambar($jumlah)
{
    if($jumlah%2!=0){
        for ($i=0; $i < $jumlah ; $i++) { 
    
            echo "<br>";
            if($i%2==0){
        
                for ($j=0; $j < $jumlah ; $j++) { 
                    echo "&nbsp; &nbsp;*";
                }
        
            }else{
                for ($j=0; $j < $jumlah ; $j++) { 
        
                    if($j==0 || $j==$jumlah-1){
                    echo '&nbsp; &nbsp;*';
                    }else{
                    echo '&nbsp; &nbsp;=';
                    }
        
                }
            }
        
        }
    }else{
        echo "Maaf Angka yang anda masukkan Harus Ganjil";
    }
}

cetak_gambar(5);
