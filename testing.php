<?php

include 'classes/shop.php';
include 'classes/area.php';

use classes\shop;
use classes\area;

function print_vars($obj) 
{
    $arr = get_object_vars($obj);
    while (list($prop, $val) = each($arr))
        echo "\t$prop = $val\n";
}

//
//
function print_methods($obj) 
{
    $arr = get_class_methods(get_class($obj));
    foreach ($arr as $method)
        echo "\tfunction $method()\n";
}
//
function class_parentage($obj, $class) 
{
    if (is_subclass_of($GLOBALS[$obj], $class)) {
        echo "Object $obj belongs to class " . get_class($GLOBALS[$obj]);
        echo " подкласс класса $class\n";
    } else {
        echo "Объект $obj более не является подклассом $class\n";
    }
}//

$shop = new shop('walmart', 'blue');

$area = new area();

echo "shop: CLASS " . get_class($shop) . "\n";
echo "area: CLASS " . get_class($area);
echo ", PARENT " . get_parent_class($area) . "\n";

echo "\nshop: Properties\n";
print_vars($shop);

echo "\nleafy: Methods\n";
print_methods($area);

echo "\nParentage:\n";
class_parentage("area", "area");
