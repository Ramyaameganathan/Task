<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$data = ($decodedData->products);
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome-Piquanttask</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div id="container">
	<h1>Piquant Task</h1>
	<?php	
	foreach($data as $k=>$v)
	{ 
	?>
	<div id="row w-100">
		<div class="col-12">
			<div class="row w-100">				
			<?php 	
			{ 
				foreach($v as $v1=>$ret)
				{ 
					if($v1=='id' || $v1=='title' || $v1=='description' || $v1 == 'price' || $v1== 'thumbnail') 
					{  ?>
					<div class="col-sm">
						<?php if($v1=='thumbnail') { echo '<img src="'.$ret.'" class="card-img-top" alt="...">';} else { echo '<h5>'.$ret.'</h5>'; } ?>
					</div>
					<?php 
					} 
				}
			} 
			?>	<hr/>
			</div>
		</div>	
	</div> 
	<?php
	}
?>
</div>
</body>
</html>
