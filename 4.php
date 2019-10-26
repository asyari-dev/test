<?php

function hitungVoucer($kode_voucer, $total)
{
    $result='';
    $result.='Kode Voucer : '.$kode_voucer;
    $result.='<br>Uang Belanja : Rp.'.number_format($total).'<br>';
     // cek kode voucer
    if($kode_voucer=='DumbwaysAsik'){
        // cek uang masuk
        if($total<20000){
            $result= "Anda tidak dapat potongan, jumlah yang harus dibayar = ".$total;
        }else{
            // set maximal discount
            $max_diskon = (($total*50/100)>20000)? 20000 : ($total*50/100);
            $result.="Diskon : Rp.".number_format($max_diskon);
            $result.= "<br>Uang yang harus dibayar : Rp.".number_format($total - $max_diskon);
            $result.= "<br> Kembalian : Rp.".number_format($total-($total - $max_diskon));
        }
    }
    
  // cek kode voucer
    if($kode_voucer=='DumbwaysMantap'){
        // cek uang masuk
        if ($total<50000){
            $result= "Anda tidak dapat potongan, jumlah yang harus dibayar = ".$total;

        }else{
            // set maximal discount
            $max_diskon = (($total*30/100)>40000)? 40000 : ($total*30/100);
            $result.="Diskon : Rp.".number_format($max_diskon);
            $result.= "<br>Uang yang harus dibayar : Rp.".number_format($total - $max_diskon);
            $result.= "<br> Kembalian : Rp.".number_format($total-($total - $max_diskon));
        }
    }
      
    return $result;
}
echo hitungVoucer('DumbwaysAsik',50000);