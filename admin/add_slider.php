
	<?php include('header_files.php') ?>

<body class="cbp-spmenu-push">
	<div class="main-content">
		<div> <?php include('menu_sidebar.php') ?></div>
		<div><?php include('header.php') ?></div>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Add Slider </h4>
						</div>
						<div class="form-body">
							<form> 
								<div class="form-group">
									 <label for="title">Title</label> 
									 <input type="text" class="form-control" required name="title" id="title" placeholder="Title"> 
								</div> 

								<div class="form-group"> 
									<label for="exampleInputFile">Slider Image</label> 
									<input type="file" id="exampleInputFile">  
								</div> 
								<button type="submit" class="btn btn-default">Submit</button> 
							</form> 
						</div>
					</div>
			</div>
		</div>
		
	</div>
	<div><?php include('footer_files.php') ?></div>
</body>
</html>