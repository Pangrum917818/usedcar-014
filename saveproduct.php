<?php
include("connect.php");
$allowedType=["jpg","png","gif","jpeg","tif","tiff"];
$fileType=explode("/",$_FILES["filepic"]["type"]);
$size = $_FILES["filepic"]["size"]/1024/1024;
//image/png filetype["image,"png"]
if(!in_array($fileType[1],$allowedType)){
   //เมื่ออัพโหลดไฟล์ที่ไม่ตรงกับ type ใน allowedType
   echo "Non-image file is not allowed";
}
else if($size>1.00){
   echo "File size exceeds the maximum  treshold";
}
else{
   $name = $_POST['txtname'];
   $description = $_POST['txtdes'];
   $price = $_POST['txtprice'];
   $uniInStock = $_POST ['txtstock'];
   $filename = $_FILES["filepic"]["name"];

move_uploaded_file($_FILES["filepic"]["tmp_name"],"image/".$_FILES["filepic"]["name"]);
$sqlInsert = "INSERT INTO product (name,description,price,unitInStock,picture) VALUES('$name','$description','$price','$uniInStock','$filename')";
echo $sqlInsert;
$result = $conn->query($sqlInsert);
}

?>