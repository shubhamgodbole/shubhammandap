
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
									 <label for="category">Title</label>
									 <input type="text" class="form-control" name="category" id="category" placeholder="Category Title" required>
								</div> 
								<input type="submit" name="submit" class="btn btn-active" style="border: none;background-color: #F2B33F;color: #FFF" value="Submit">
                                <a href="categories.php" class="btn btn-primary" style="border: none;background-color: #6c757d;color: #FFF" > Cancel </a>

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
        $category=$_POST["category"];
        // $dateTime included from header.php
        $qry="insert into  categories(category,created_by,created_at)values('$category',$_SESSION[user_id],'$dateTime')";

        $result = $con->query($qry);
        if ($result) {

            echo "<script type='text/javascript'>
							bootbox.alert({
							    message: 'New category added successfully !!!',
							    callback: function () {
							        window.location ='categories.php';
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