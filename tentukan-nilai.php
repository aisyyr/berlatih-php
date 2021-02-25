<?php
function tentukan_nilai($number)
{
    //  kode disini
    if($number <= 50){
        echo "Kurang <br>";
    } elseif ($number <= 70) {
        echo "Cukup <br>";
    } elseif ($number <= 85) {
        echo "Baik <br>";
    } else {
        echo "Sangat Baik <br>";
    }
    
}

//test
//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>