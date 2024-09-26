<?php 
require_once "exo3.php";
$tab = randArr();

function tri($arr)
{
    if($arr != null)
    {
        $result = [];
        while(count($arr) > 0)  
        {
            $minArr = plusPetit($arr,1); 
            $min = $minArr[1]; 
            array_push($result, $minArr[0]); 
            unset($arr[$min]); 
            $arr = array_values($arr); 
        }
        return $result;
    }
    return "Le tableau est vide";
}

print_r(tri($tab));
?>
