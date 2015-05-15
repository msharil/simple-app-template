<?php 
include 'header.php'; 
$titlePage = 'Payment Status';
$data = '[
{"bulan":"01","status":"1"},{"bulan":"02","status":"1"},{"bulan":"03","status":"1"},{"bulan":"04","status":"1"},{"bulan":"05","status":"1"},
{"bulan":"06","status":"0"},{"bulan":"07","status":"0"},{"bulan":"08","status":"0"},{"bulan":"09","status":"0"},{"bulan":"09","status":"0"},
{"bulan":"10","status":"0"},{"bulan":"11","status":"0"},{"bulan":"12","status":"0"}
]';
?>

<!-- Main -->
<div class="container">
	<div class="row">
		<!-- Sidebar -->
		<?php include('sidebar.php'); ?>
		<!-- End of Sidebar -->
		
		<div class="col-md-9">
			
		  <!-- column 2 -->	

		  <div id="titlePage">
			<ul class="list-inline pull-right">
				<li><i class="glyphicon glyphicon-user"></i> Welcome, <?php echo $user; ?> </li>
			</ul>

			<a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> <?php echo $titlePage; ?></strong></a>  
			<hr>
		  </div>
		  
			<div class="row">

				  <div class="panel panel-default">
					  <div class="panel-heading"><h4>Welcome to This Temporary Template</h4></div>
						<div class="panel-body">
							<div class="list-group"><br />
							
							<p>
								<?php echo $data; ?>
							</p>

							<p>

							<?php
							  $someArray = json_decode($data, true);
							  print_r($someArray);        // Dump all data of the Array
							  echo $someArray[0]["name"]; // Access Array data
							?>

							</p>

							<p>
							<?php
							  // Convert JSON string to Object
							  $someObject = json_decode($data);
							  print_r($someObject);      // Dump all data of the Object
							  echo $someObject[0]->name; // Access Object data

							?>
							</p>

							<p>
							<?php
							  // Loop through Array
							  $someArray = json_decode($data, true);//...; // Replace ... with your PHP Array
							  foreach ($someArray as $key => $value) {
								echo $value["bulan"] . ", " . $value["status"] . "<br>";
							  }
							?>
							</p>

							<p>
							<?php
							  // Loop through Object
							  $someObject = json_decode($data); //...; // Replace ... with your PHP Object
							  foreach($someObject as $key => $value) {
								echo $value->bulan . ", " . $value->status . "<br>";
							  }
							?>
							</p>

							<p>
							<h2>JSON Encode</h2>
							<?php
							  // Array
							  $someArray = [
								[
								  "name"   => "Jonathan Suh",
								  "gender" => "male"
								],
								[
								  "name"   => "William Philbin",
								  "gender" => "male"
								],
								[
								  "name"   => "Allison McKinnery",
								  "gender" => "female"
								]
							  ];

							  // Convert Array to JSON String
							  $someJSON = json_encode($someArray);
							  echo $someJSON;
							?>
							</p>

							<p>
							<h2>When using Array Syntax</h2>
							<?php
							  $array = array(
								"foo" => "bar",
								"bar" => "foo"
							  );

							  // as of PHP 5.4
							  $array = [
								"foo" => "bar",
								"bar" => "foo"
							  ];
							  // Convert Array to JSON String
							  $arrayJSON = json_encode($array);
							  echo $arrayJSON;

							?>
							</p>
							</div>
						</div>
					  </div>
				  </div>

			   
						
			</div><!--/row-->
		  
		</div><!--/col-span-9-->
	</div>
</div>
<!-- /Main -->

<?php include('footer.php'); ?>