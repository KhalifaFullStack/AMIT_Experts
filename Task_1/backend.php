<?php

$heights = $_REQUEST['height'];
$Tallest = max($heights);
$tallest_count = 0;

foreach ($heights as $height) {

    if ($height == $Tallest) {
        $tallest_count = $tallest_count + 1;
    } else {
        $tallest_count = $tallest_count + 0;
    }
}
?>
<h1 style="text-align:center; margin:10px">The tallest tower is <?php echo "$Tallest"; ?> m long. <br> And you have <?php echo "$tallest_count"; ?> towers of this height </h1>