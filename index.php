<?php 
require_once '1.php'; 
require_once '2.php'; 
require'vendor/autoload.php';

use my\Order as SortingOrder;
use spb111\Order as PriceOrder; 
use Intervention\Image\ImageManager;
//$obj=new SortingOrder(); 
//$obj2=new PriceOrder();
$manager = new ImageManager(['driver' => 'imagick']); 
$image = $manager->make(('C:\OSPanel\domains\PHPLes5\1.jpg'))->resize(300, 200)->save('C:/OSPanel/domains/PHPLes5/mini.jpg'); 
 
?>