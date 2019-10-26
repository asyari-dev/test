<?php
function hitungKembalian($total_belanja, $uang_dibayarkan)
{
   
    echo 'Total Belanja : '.$total = $total_belanja;
    echo '<br>Uang Yang dibayarkan : '.$bayar = $uang_dibayarkan;

    $cashback = $total/10;
    $count50=0;
    $count20=0;
    $count5=0;
    $pecahan50='';
    $pecahan20='';
    $pecahan5='';

    if($total>200000){
        echo "<br> Cashback 10 % ";
        $total = $total-$cashback;
        echo "<br> Total yang di bayar setelah di potong Cashback :".$total;
        echo '<br>Uang Kembalian: '.$kembalian = $bayar-$total;
    }else{
        echo '<br>Uang Kembalian: '.$kembalian = $bayar-$total;
    }
    
while ($kembalian>0) {

    if ($kembalian>=50000) {
        $count50++;
        $result = "50000";
        $pecahan50 = $count50.' X '.$result.'<br>';
        $kembalian = $kembalian-$result;
    }
    if ($kembalian>=20000) {
        $count20++;
        $result = "20000";
        $pecahan20= $count20.' X '.$result.'<br>';
        $kembalian = $kembalian-$result;
    }
    if ($kembalian>=5000) {
        $count5++;
        $result = "5000";
        $pecahan5= $count5.' X '.$result.'<br>';
        $kembalian = $kembalian-$result;
    }
    if($kembalian<5000){
        $sumbangkan="Uang sebesar ".$kembalian." Di sumbangkan Karena tidak ada pecahan dibawah 5000";
        $kembalian=0;
    }

}
return '<br>'.$pecahan50.$pecahan20.$pecahan5.$sumbangkan;
}
// param1 : total belanja , param2 : uang yang di bayar
echo hitungKembalian(220000,253000);
