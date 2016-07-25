<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thông tin đặt bàn</title>
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
        <div class="container">
            <div class="content">
                <div class="title">Quản lý sản phẩm</div>
                <div>
                    <table border=1 class="table"> 
<tr class="active"> 
 <td><div  class="tieude">Tên sản phẩm</div></td> 
 <td><div class="tieude">Danh mục</div></td> 
 <td><div class="tieude">Giá</div></td> 
 <td><div class="tieude">Ảnh</div></td> 
</tr> 
@foreach ($productlists as $productlists) 
 <tr class="infor"> 
  <td>{{  $productlists->productName }} </td> 
  <td>{{ $productlists->pcatID }}</td> 
  <td>{{ $productlists->productPrice }}</td>
   <td>{{ $productlists->productImage }}</td>
 </tr> 
@endforeach 
</table>
                </div>
            </div>
        </div>
    </body>
</html>
