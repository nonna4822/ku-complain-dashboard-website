<?php  
class Category
{
public $idcat; 
public $catname;
public function __construct($idcat,$catname)
{	
    $this->idcat= $idcat;
	$this->catname = $catname;       
}
public static function getAll()
{	
    $CategoryList = [];
	require("connect.php");
	$sql = "select * from category";
	$result=mysqli_query($conn,$sql);// or die(mysqli_error());
	while ($my_row = mysqli_fetch_assoc($result))	
	{			
		$idcat= $my_row[idcat];			
		$catname = $my_row[catname];		
		$CategoryList[]= new Category($idcat,$catname);
	}
	require("connection_close.php");
	return $CategoryList;
}
} ?>