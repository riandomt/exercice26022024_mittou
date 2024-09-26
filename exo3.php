
    <?php
    require_once "exo1.php";
    $tab = randArr();

    function plusGrand($arr,$getI=0)
    {
        if($arr != null)
        {
            $max = $arr[0];
            $getId = 0;

            for ($i = 1; $i < count($arr); $i++) {
                $n = $arr[$i];
                if ($n > $max) {
                    $max = $n;
                    $getId = $i;
                }
            }
            if($getI==1)
            {
                return [$max,$getId];
            }
            else
            {
                return $max;
            }
            
        }
        return "La tableau est vide";

    }


    function plusPetit($arr,$getI=0)
    {
        if($arr != null)
        {
            $min = $arr[0];
            $getId = 0;

            for ($i = 1; $i < count($arr); $i++) {
                $n = $arr[$i];
                if ($n < $min) {
                    $min = $n;
                    $getId = $i;
                }
            }
            if($getI==1)
            {
                return [$min,$getId];
            }
            else
            {
                return $min;
            }
            
        }
        return "La tableau est vide";

    }


    //echo plusPetit($tab) . '<br>' . plusGrand($tab);
    ?>
