<?php
function rect_area($length = 3, $width = 4) 
{
    $area = $length * $width;
    echo "The area Of Rectangle = " . $area ;
}
rect_area(); 

function rect_perimeter($length = 3, $width = 4) 
{
    $perimeter = 2*($length * $width);
    echo "The perimeter Of Rectangle = " . $perimeter ;
}
rect_perimeter(); 

?>