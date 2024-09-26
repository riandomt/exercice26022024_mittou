
    <?php
    require_once "exo1.php";
    $tab = randArr();

    function minMaxArr($arr)
    {
        if($arr != null)
        {
            $min = $arr[0];
            $max = $arr[0];;
    
            for($i=1;$i<count($arr);$i++)
            {
                $n = $arr[$i];
                if($n > $max)
                {
                    $max = $n;
                }
                if($n < $min)
                {
                    $min = $n;
                }
            }
            return ["min" => $min,"max" => $max];
        }
        return "La tableau est vide";
    }

    $minMax = minMaxArr($tab);
    //echo "le plus petit " . $minMax['min'] . '<br>';
    //echo "le plus grand " . $minMax['max'];
    ?>
