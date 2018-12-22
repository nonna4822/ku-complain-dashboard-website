<?php
$controllers = array('pages'=>['home','error'],
'complaint'=>['newcomplaint','addcomplaint','updateForm','update','deleteConfirm','delete'],
'category'=>['index','newdepartment','adddepartment','updateForm','update','deleteConfirm','delete']);
function call($controller, $action){
	/*echo "routes to ".$controller."-".$action."<br>";*/ require_once("controllers/".$controller."_controller.php");
	switch($controller)
	{
		case "pages":	$controller = new PagesController();
				break;
        case "complaint":
     require_once("model/categoryModel.php");
		$controller = new ComplaintController();
		break;
        case "category":
        require_once("model/categoryModel.php");
        $controller = new categoryController();
				break;
	}
	$controller->{$action}();
}
if(array_key_exists($controller,$controllers))
{	if(in_array($action,$controllers[$controller]))
	{	call($controller,$action);	  }
	else
	{	call('pages','error');		}
}
else
{	call('pages','error');
}
?>
