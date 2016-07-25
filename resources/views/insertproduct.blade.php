<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CSM-Nhập sản phẩm</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Arial';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 56px;
            }

            .tieude{

                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <form action="create" method="post" enctype="multipart/form-data" id="pupload" role="form" name="pupload"> 

        <div class="form_group">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

<label for="p_name">Tên sản phẩm</label>
  <input type='text' name='p_name' id="p_name" /> 
 
  <label for="pcat_id">Loại sản phẩm</label>
  <input type='text' name='pcat_id' id="pcat_id" />
 
 <label for="p_price">Giá</label>
  <input type='text' name='p_price' id="p_price" />
 </div>
  
  

</div>

<div>
     <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" >
</div>


<div>
 <input type='submit' value="Thêm sản phẩm" /> 
 



</div>
</form> 

<!-- <div class="form_group">
<form action="imgupload" method="post" enctype="multipart/form-data" id="imgupload" role="form" name="imgupload">

    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" >
    <input type="submit" value="Tải ảnh lên" name="submit">
</form>
</div> -->


    </body>
</html>
