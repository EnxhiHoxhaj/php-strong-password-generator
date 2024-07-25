 <?php 

    function generaPassword($n){
        $caratteri = "aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789,;.:-_ò@çà°#ù§[]{}()!£$%&/=?^*";
        $passwordGenerata='';
        for($i = 0; $i< $n; $i++){
            $random= rand(0, strlen($caratteri)-1);
            echo ($random);
            $passwordGenerata .= $caratteri[$random];
        }
        return $passwordGenerata;
    }
 
 
?>