<?php
$link=mysqli_connect("localhost","root","","bbms");
?>
<?php
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$phone=$_POST["phone"];
$blood_type=$_POST["blood_type"];
$address=$_POST["address"];
$sql="insert into donor_registration(name,phone,blood_type,address) values('$name','$phone','$blood_type','$address')";
$query=mysqli_query($link,$sql);
 if($query){
    
    echo $msg= "<span style='color:red';>registration sucessfull</span>";
    }
  else
    {
     echo $msg="<span style='color:red'>Invalid UID / Token NO</span>";
       }
      }
 ?>
 <html>
 <head>
 <body>
<section class="container_area_holder doner_area_holder">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="form_holder">
          <form action="doner.php" method="post">
            <label>Blood Doner Form</label>
            <input type="text" placeholder="Name" name="name" id="nameid" required>
            <input type="tel" placeholder="Phone Number" name="phone" required>
            <select name="blood_type" required>
              <option>Select Blood Group</option>
              <option value="O+">O+</option>
              <option value="A+">A+</option>
              <option value="B+">B+</option>
              <option value="AB+">AB+</option>
              <option value="O-">O-</option>
              <option value="A-">A-</option>
              <option value="B-">B-</option>
              <option value="AB-">AB-</option>
            </select>
            <textarea placeholder="Address" name="address"></textarea>
            <input type="submit" name="submit" value="Register">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
