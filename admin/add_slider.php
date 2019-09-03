
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
                        <h4>Add Slide </h4>
                    </div>
                    <div class="form-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                            </div>
                            <div class="form-group">
                                <label >Description</label>
                                <textarea class="form-control"  placeholder="description" name="description" id="editor1" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Select Image</label>
                                <input type="file" name="image"  accept="image/*" onchange="loadFiles(event)" id="exampleInputFile" required>
                                <img class="img-thumbnail" style="display: none;" id="image">
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
    $time_section=time();
    $title=$_POST["title"];
    $description=$_POST["description"];
    $_FILES["image"]["name"] = 	$time_section.'_'.$_FILES['image']['name'];
    $imagename=$_FILES["image"]["name"];
    $imagedata=$_FILES["image"]["tmp_name"];
    $imagetype=$_FILES["image"]["type"];

    // $dateTime included from header.php
    $qry="insert into  sliders (title,description,image,created_by,created_at) values('$title','$description','$imagename',$_SESSION[user_id],'$dateTime')";

    $result = $con->query($qry);
    if ($result) {
        move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $_FILES["image"]["name"]);
        echo "<script type='text/javascript'>
							bootbox.alert({
							    message: 'New slide added successfully !!!',
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