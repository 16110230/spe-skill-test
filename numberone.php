
<?php
speskilltest();
narsist();
parity();
function speskilltest()
{
    // narsist ();
    function narsist()
    {
        function countDigit($n)
        {
            if ($n == 0)
                return 0;
         
            return (1 + countDigit($n / 10));
        }
         
        function check( $n)
        {
            $l = countDigit($n);
            $dup = $n;
            $sum = 0;
            while ($dup)
            {
                $sum += pow($dup % 10, $l);
                $dup = (int)$dup / 10;
            }
         
            return ($n == $sum);
        }
        
        $n = 153;
        if (check(!$n))
            echo "Narsist = true";
        else
            echo "Narsist = false";
    }

    function parity()
    {
        function getParity( $n)
        {
            // $parity = 0;
            // while ($n)
            // {
            //     $parity = !$parity;
            //     $n = $n & ($n - 1);
            // }
            // foreach ($n as $data){

            // }
            // return $parity;
        }
         
            $n = [1,2,10];
            echo "Parity of no ",$n ," = " ,
                  getParity($n)? "odd": "even";
    }
    
}

?>