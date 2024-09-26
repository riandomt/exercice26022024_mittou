<?php
    $tabDoublon = [1,45,13,1,99];
    $tabSansDoublon = [1,45,13,2,99];

    function doublon($arr)
    {
        if($arr != null)
        {
            $arrTemp = $arr;
            $cpt = 0;
            for($i=0;$i<count($arr);$i++)
            {
                $n1 = $arr[$i];
                for($j=0;$j<count($arrTemp);$j++)
                {
                    $n2 = $arrTemp[$j];
                    if($n1 == $n2)
                    {
                        $cpt +=1;
                    }
                    if($cpt > 1)
                    {
                        return "true";
                    }
                }
                $cpt = 0;
            }
            return "false";
        }
        return "La tableau est vide";
    }

    echo doublon($tabDoublon) . '<br>' . doublon($tabSansDoublon);
?>