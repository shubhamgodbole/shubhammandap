
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
							<h4>Add Gallery </h4>
						</div>
						<div class="form-body">
							<form> 
								<div class="form-group">
									 <label for="title">Title</label> 
									 <input type="text" class="form-control" required name="title" id="title" placeholder="Title"> 
								</div> 
								<div class="form-group">
									<label for="category">Category</label>
										<select name="category" id="category" class="form-control1" required>
											<option value="">---- Select ----</option>						<?php
												$qry="select * from categories";
												$result = $con->query($qry);
												if($result->num_rows > 0)
												{													
													while($d=$result->fetch_array()) {	
														echo "<option value=$d[id]>$d[category]</option>";
													}
													//echo "<h1>seeeion has been started...</h1>";
												}
												else {
													echo "<option>No Category Data</option>";
												}
											?>
									</select>
								</div>

								<div class="form-group"> 
									<label for="exampleInputFile">Gallery Image</label> 
									<input type="file" name="image" accept="image/*" id="exampleInputFile" multiple>
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
<?php
	if(isset($_POST['submit']))

	{
		$title=$_POST["title"];
		$category_id=$_POST["category"];
		$imagename=$_FILES["image"]["name"];
		$imagedata=$_FILES["image"]["tmp_name"];
		$imagetype=$_FILES["image"]["type"];
		
		$qry="insert into  events (category_id,image,title,description,created_by) values($category_id,'$imagename','$title','$description',$_SESSION[user_id])";	
		move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $_FILES["image"]["name"]);
		
		$result = $con->query($qry);
		if ($result) {
    
				echo "<script type='text/javascript'>
							bootbox.alert({
							    message: 'New event added successfully !!!',
							    callback: function () {
							        window.location ='events.php';
							    }
							})
						</script>";

			}
			else
			{
				echo "<script type='text/javascript'>alert('failed!')</script>";
			}		
	
		
	}
?>