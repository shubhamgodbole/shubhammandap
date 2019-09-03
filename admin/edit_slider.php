
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
							<h4>Update Slide </h4>
						</div>
						<div class="form-body">
							<?php
								if(isset($_REQUEST['id'])){
									$qry="select * from sliders where id=".$_REQUEST['id'];
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
                                    <label >Description</label>
                                    <textarea class="form-control"  placeholder="This is my textarea to be replaced with CKEditor." name="description" id="editor1" ><?php echo $d['description'] ?></textarea>
                                </div>
								<div class="form-group"> 
									<label for="exampleInputFile">Select Image</label> 
									<input type="file" name="image"  onchange="loadFiles(event)" accept="image/*" id="exampleInputFile" >
                                    <?php if($d['image']) { ?>
                                    <img class="img-thumbnail" height="300"  width="300" id="image" src="<?php echo 'images/'.$d['image']; ?>">
                                    <?php } ?>
								</div>
                                <script>
                                    var loadFiles = function(event) {
                                        var output = document.getElementById('image');
                                        output.src = URL.createObjectURL(event.target.files[0]);
                                        output.height ="300";
                                        output.width ="300";
                                        output.style.display = "block";
                                        console.log(event.target.files[0]);
                                    };
                                </script>
								<input type="submit" name="submit" class="btn btn-active" style="border: none;background-color: #F2B33F;color: #FFF" value="Submit">
                                <a href="sliders.php" class="btn btn-primary" style="border: none;background-color: #6c757d;color: #FFF" > Cancel </a>
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
		$qry="update  sliders set image ='$imagename',title = '$title' ,description = '$description',updated_by = $_SESSION[user_id],updated_at ='$dateTime' where id= $_REQUEST[id]";
		
		$result = $con->query($qry);
		echo $result;
		if ($result) {
    
					echo "<script type='text/javascript'>
							bootbox.alert({
							    message: 'Slide updated successfully !!!',
							    callback: function () {
							        window.location ='sliders.php';
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