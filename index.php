<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/theme.css">
<title>list</title>
</head>
<body>
	
<div class="container theme-showcase">	

<?php 
require_once 'model/model.php';
require_once 'view/view.php';
require_once 'controller/controller.php';

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
echo $view->output_adding_form();
echo $view->output_track_list();
echo $view->output_profile();
echo $view->output_sign_in();


?>
</div>

</body>
</html>