
    <?php
    function randArr($size = 5)
    {
        $randArr = [];
        for ($i = 0; $i < $size; $i++) {
            array_push($randArr, rand(0, 99));
        }
        return $randArr;
    }
    ?>
