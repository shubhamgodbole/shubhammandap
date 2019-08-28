<?php include('header_files.php'); ?>
<body class="cbp-spmenu-push">
	<div class="main-content">
		<div> <?php include('menu_sidebar.php') ?></div>
		<div><?php include('header.php') ?></div>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<div class="row">
							<div class="col-md-10"><h4 >Gallery Images:</h4></div>
							<div class="col-md-2">
								<a href="add_category.php" type="button" class="btn btn-warning"> + Add New</a>
							</div>
						</div>
						<hr />
						<table class="table table-hover" style="border: 1px solid #55555540;"> 
							<thead> 
								<tr class="active"> 
									<th>#</th> 
									 <th>Category</th>
									 <th>Action</th>
								</tr> 
							</thead> 
							<tbody> 
								<?php
									$qry="select * from categories";
									$result = $con->query($qry);
									if($result->num_rows > 0)
									{									
										$i =1;				
										while($d=$result->fetch_array()) {	
											echo "<tr> 
												<th scope=row>$i</th>
			 
												 <td>$d[category]</td>
												 <td>
											 		<a href=#>
											 			<i class='fa fa-edit'></i>
											 		</a>&nbsp;&nbsp;
													<a href=#><i class='fa fa-trash'></i></a>
											 	</td>  
											</tr>";
											$i++;
										}
										//echo "<h1>seeeion has been started...</h1>";
									}
									else {
										echo "<tr><td colspan=4>No Data Found</td></tr>";
									}
								?>

							</tbody> 
						</table>
					</div>
				</div>	
			</div>
		</div>
		
	</div>
	<div><?php include('footer_files.php') ?></div>
</body>
</html>