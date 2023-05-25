<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD PROJECT</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

	<div class="container">
		<h4 align="center">Edit  Details</h4>
		<form action="<?php echo base_url(); ?>crud/update/<?php echo $singleProduct->id; ?>" method="POST">
			<div class="form-group">
				<label for="brand">Brand</label>
				<input type="text" name="brand" placeholder="" class="form-control" value="<?php echo $singleProduct->brand; ?>">
			</div>
			<div class="form-group">
				<label for="name">Price</label>
				<input type="text" name="price" placeholder="" class="form-control" value="<?php echo $singleProduct->price;?>">
			</div>
			<div class="form-group">
				<label for="name">Type</label>
				<input type="text" name="type" placeholder="" class="form-control" value="<?php echo $singleProduct->type;?>">
			</div>
			<div class="form-group">
				<label for="name">Descriptions</label>
				<input type="text" name="descriptions" placeholder="" class="form-control" value="<?php echo $singleProduct->descriptions;?>">
			</div>

			<button type="submit" name="edit" value="Update" class="btn btn-info" style="color:#ffff;"><i class="fa-solid fa-pen-to-square" style="color: #ffff;"></i>&nbsp;Edit</button>
			<a href="<?php echo base_url(); ?>crud/" class="btn btn-danger"><i class="fa-sharp fa-solid fa-xmark"></i>&nbsp;Cancel</a>
		</form>	
	</div>



<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="js/index.js"></script>	
</body>
</html>