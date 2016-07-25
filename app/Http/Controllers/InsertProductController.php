<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Http\Controllers;

class InsertProductController extends Controller
{
     public function insertform(){ 
  return view('insertproduct'); 

 } 
  

public function imgupload()

{
//   $target_dir = "media/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }

// }

   return view('welcome'); 

  
}



 public function insert(Request $request)
 { 

   $target_dir = "media/";

  $pname = $request->input('p_name');
  $pcatid = $request->input('pcat_id');
  $pPrice = $request->input('p_price');
  // $pImage = $request->input('file_name_up');
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Không đúng là tệp ảnh - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Không phải tệp ảnh";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Tệp tin đã tồn tại trên server";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Tệp tin vượt quá dung lượng cho phép";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Chỉ chấp nhận định dạng JPG, JPEG, PNG & GIF ";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Tải tệp không thành công";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Tệp tin ". basename( $_FILES["fileToUpload"]["name"]). " đã được tải lên";
    } else {
        echo "Lỗi khi tải tệp tin";
    }
}


  //DB::insert('insert into tblproduct (productName, pcatid) values(?,?)',[$pname][$pcatid]); 
  DB::table('tblproduct')->insert(['productName'=>$pname, 'pcatID'=>$pcatid, 'productPrice'=>$pPrice, 'productImage'=>$target_file]);
   


    echo '<div>';
    echo 'Sản phẩm:' . $pname. '<br/>';
    echo 'Loại Sản phẩm:' . $pcatid. '<br/>';
    echo 'Giá Sản phẩm: '. $pPrice. '<br/>';
    echo 'Ảnh Sản phẩm: '. $target_file. '<br/>';

  	
  echo "Thêm sản phẩm thành công.<br/>"; 
  echo '<a href="insert">[Nhập sản phẩm]</a>'; 
  echo '<a href="productshow">[Danh sách sản phẩm] </a>';

  echo '</div>';

 }
}
