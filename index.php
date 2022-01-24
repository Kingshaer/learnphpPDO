    <?php  
   include('config.php');

 //   $sql = "INSERT INTO users(name, email, date) VALUES(:name, :email, :date)";
 //   $query = $dbcon->prepare($sql);
 //   $query->bindParam(':name', $name, PDO::PARAM_STR);
 //   $query->bindParam(':email', $email, PDO::PARAM_STR);
 //  $query->bindParam(':date', $date, PDO::PARAM_STR);

  //  $name = "Panupan polhan";
//    $email = "panupanteen@gmail";
  //  $date = Date('Y-M-D');

   // $result = $query->execute();
  //  if ($result) {
  //  echo "<script>alert('เพิ่มข้อมูลแล้ว')</script>";
  //  } else {
   //     echo "<script>alert('มีข้อมูลผิด')</script>";

 //   }

 //  $sql = "SELECT * FROM users";
 //  $query = $dbcon->prepare($sql);
 //  $query->execute();
 //  $result =$query->fetchALL(PDO::FETCH_OBJ);
 //  if ($query->rowCount() > 0 ) {
  //     foreach($result as $res){
   //        echo $res->name ."<br>";
  //         echo $res->email ."<br>";
  //         echo $res->date ."<br>";
  //     }
  //  }

 // $sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
 // $query = $dbcon->prepare($sql);
 // $query->bindParam(':name', $name, PDO::PARAM_STR);
 // $query->bindParam(':email', $email, PDO::PARAM_STR);
 // $query->bindParam(':id', $id, PDO::PARAM_STR);

 // $name = "panupanteen";
 // $email = "panupanteen11@gmail.com";
//  $id = 1;
 // $query->execute();
//  if($query->rowCount() > 0 ){
 //   echo "<script>alert('อัพเดตข้อมูลแล้ว')</script>";
 // } else {
 //   echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ')</script>";
//  }

  $sql ="DELETE FROM users WHERE id = :id";
  $query = $dbcon->prepare($sql);
  $query->bindParam(':id', $id, PDO::PARAM_INT);
  $id = 2;
  $query->execute();
  if ($query->rowCount() > 0 ) {
    echo "<script>alert('ลบข้อมูลแล้ว')</script>";
  }  else {
    echo "<script>alert('ลบข้อมูลไม่สำเร็จ')</script>";
  }

     ?>