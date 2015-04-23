<?php 
include 'header.php'; 
$titlePage = 'Dashboard';
?>

<!-- Main -->
<div class="container">
<div class="row">
	<!-- Sidebar -->
	<?php include('sidebar.php'); ?>
	<!-- End of Sidebar -->
	
    <div class="col-md-9">
      	
      <!-- column 2 -->	

      <ul class="list-inline pull-right">
         <li><i class="glyphicon glyphicon-user"></i> Welcome, <?php echo $user; ?> </li>
      </ul>

      <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> <?php echo $titlePage; ?></strong></a>  
      
      	<hr>
      
		<div class="row">

              <div class="panel panel-default">
                  <div class="panel-heading"><h4>Welcome to This Temporary Template</h4></div>
                  <div class="panel-body">
                  <div align="center"><img src="images/banner.png" width="700px"/>
                    <div class="list-group"><br />

                    <p align="justify">Hello!</p>
                    
                    <p align="justify">Hei! Hello!</p>
                    
                    <p align="justify">Hello... Hei! Hello..</p>
                    
                    </div></div>
                  </div>
              </div>

           
                    
	    </div><!--/row-->
      
      <hr>
      

  	</div><!--/col-span-9-->
</div>
</div>
<!-- /Main -->

<?php include('footer.php'); ?>