 <?php 

    function generaPassword($numeroCaratteri){
        $caratteri = "aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789,;.:-_ò@çà°#ù§[]{}()!£$%&/=?^*";
        $passwordGenerata='';
        for($i = 0; $i< $numeroCaratteri; $i++){
            $random= rand(0, strlen($caratteri));
            $passwordGenerata .= $caratteri[$random];
        }
        return $passwordGenerata;
    }
 
 
?>