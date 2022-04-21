
<?php
speskilltest();
narsist();
parity();
reverseBlue();
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
            $parity = 0;
            while ($n)
            {
                $parity = !$parity;
                $n = $n & ($n - 1);
            }
            return $parity;
        }
         
            $n = [1,2,10];
            foreach($n as $data){
                echo "<br>";
                echo "Parity of no ",$data ," = " ,
                getParity($data)? "odd": "even";
                echo "<br>";

            }
           
    }

    function needleHaystack()
    {
        //minus
    }

    function reverseBlue()
    {
        function search($n, $del)
        {
            array_diff($n, [$del]);
        }
        //minus
        $n = [1,2,3,4,5];
        $del = 5;
        echo search($n, $del);
    }
    
}

?>