
<?php
    $conn = new mysqli('localhost', 'root', '','hah');
$method = $_SERVER['REQUEST_METHOD'];
if (($method == 'POST' || $method == 'GET')&& (isset($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['department'],$_REQUEST['phonenumber']))){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $department = $_REQUEST['department'];
    $phonenumber = $_REQUEST['phonenumber'];
    $stmt = $conn->prepare("INSERT INTO applicants (name,email,department,phonenumber) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$department,$phonenumber);
    $stmt->execute();
    $stmt->close();
}
$conn->close();
?>

<form>
   Name: <input type="text" name="name" required> <br> <br>
   Email: <input type="email" name="email" required> <br><br>
   Department: <input type="text" name="department" required> <br> <br>
   Phone: <input type="text" name="phonenumber" required> <br> <br>
   <button type="submit" formmethod="GET">GET</button>
   <button type="submit" formmethod="POST">POST</button>
</form>