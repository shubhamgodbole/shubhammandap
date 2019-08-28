
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
							<h4>Add Category </h4>
						</div>
						<div class="form-body">
							<form method="post" enctype="multipart/form-data"> 
								<div class="form-group">
									 <label for="title">Title</label> 
									 <input type="text" class="form-control" name="title" id="title" placeholder="Title" required> 
								</div> 
								<input type="submit" name="submit" class="btn btn-active" style="border: none;background-color: #F2B33F;color: #FFF" value="Submit"> 
							</form> 
						</div>
						<?php
	if(isset($_POST['submit']))

	{
		$title=$_POST["title"];
		$category_id=$_POST["category"];
		$description=$_POST["description"];	
		$imagename=$_FILES["image"]["name"];
		$imagedata=$_FILES["image"]["tmp_name"];
		$imagetype=$_FILES["image"]["type"];
		
		$qry="insert into  events (category_id,image,title,description,created_by) values($category_id,'$imagename','$title','$description',$_SESSION[user_id])";	
		move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $_FILES["image"]["name"]);
		
		$result = $con->query($qry);
		if ($result) {
    
						echo "<script type='text/javascript'>alert('insert 					                         successfully!')</script>";

			}
					else
					{
    					echo "<script type='text/javascript'>alert('failed!')</script>";
					}		
	
		
	}
?>

					</div>
			</div>
		</div>
		
	</div>
	<div><?php include('footer_files.php') ?></div>
</body>
</html>

