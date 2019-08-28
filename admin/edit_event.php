
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
							<h4>Add Event </h4>
						</div>
						<div class="form-body">
							<?php
								if(isset($_REQUEST['id'])){
									$qry="select * from events where id=".$_REQUEST['id'];
									$result = $con->query($qry);
									$d=$result->fetch_array();
								
							?>
							<form method="post" enctype="multipart/form-data"> 
								<div class="form-group">
									 <label for="title">Title</label> 
									 <input type="text" class="form-control" 
									 	value="<?php echo $d['title']; ?>" 
									 	name="title" id="title" placeholder="Title" required> 
								</div> 
								<div class="form-group">
									<label for="category">Category</label>
										<select name="category" id="category" class="form-control1" required>
																	
											<?php
												$qry="select * from categories where id = $d[category_id]";
												$result = $con->query($qry);
												$c=$result->fetch_array();
												echo "<option value=$c[id] >$c[category]</option>";

												$qry="select * from categories where id != $d[category_id]";
												$result = $con->query($qry);
												if($result->num_rows > 0)
												{													
													while($c=$result->fetch_array()) {	
														echo "<option value=$c[id]>$c[category]</option>";
													}
												}
											?>
									</select>
								</div>
								<div class="form-group"> 
									<label for="exampleInputFile">Select Image</label> 
									<input type="file" name="image"  accept="image/*" id="exampleInputFile" >  
								</div>
								<div class="form-group">
									 <label >Description</label> 
									   <textarea class="form-control" required placeholder="This is my textarea to be replaced with CKEditor." name="description" id="editor1" rows="10" cols="80"><?php echo $d['description'] ?></textarea>
							            <script>
							                // Replace the <textarea id="editor1"> with a CKEditor
							                // instance, using default configuration.
							                CKEDITOR.replace( 'editor1' );
							            </script>
 								</div> 
								<input type="submit" name="submit" class="btn btn-active" style="border: none;background-color: #F2B33F;color: #FFF" value="Submit"> 
							</form>
							<?php 
								}
							?>
							 
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
		$description=$_POST["description"];	
		$imagename=$_FILES["image"]["name"];
		$imagedata=$_FILES["image"]["tmp_name"];
		$imagetype=$_FILES["image"]["type"];
		
		if(empty($imagename)) {
			$imagename = $d['image'];
		}
		else {
			move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $_FILES["image"]["name"]);
		}
		$qry="update  events set category_id =$category_id,image ='$imagename',title = '$title' ,description = '$description',updated_by = $_SESSION[user_id] where id= $d[id]";	
		
		$result = $con->query($qry);
		echo $result;
		if ($result) {
    
					echo "<script type='text/javascript'>
							bootbox.alert({
							    message: 'Event updated successfully !!!',
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