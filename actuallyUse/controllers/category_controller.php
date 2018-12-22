<?php
class categoryController
{
 public function index()
	{
    $Category_list = Category::getAll();
     require('management.php');
}
}
?>
