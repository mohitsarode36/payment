<?php 
$conn = mysqli_connect("localhost","mohit1","","payment");

$name=$gender=$address=$email=$pincode=$cardtype=$cardnum=$cvv="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $pincode = $_POST['pincode'];
        $cardtype = $_POST['card_type'];
        $cardnum = $_POST['card_number'];
        $cvv = $_POST['cvv'];

        $query = "INSERT INTO data(Name,Gender,address,email,pincode,card_type,card_number,cvv) VALUES('$name','$gender','$address','$email','$pincode','$cardtype','$cardnum','$cvv')";
        mysqli_query($conn,$query);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
    <form action="payment.php" method="post" name="form1">
        <h1 class="heading">PAYMENT FORM</h1>
        <p>* : mandatory fields</p>
        <h2>Contact Information</h2>
        <p>Name: *<input type="text" name="name" required placeholder="eg: Rohit Sharma"> </p>
        <fieldset>
            <legend>Gender</legend>
            <p>
                Male <input type="radio" name="gender" id="male" value="male">
                <br>
                Female<input type="radio" name="gender" id="female" value="female">
            </p>
        </fieldset>
        <p>Address: <textarea name="address" id="address" cols="100" rows="10"></textarea></p> 
        <p>Email: <input type="email" name="email" id="email"> </p>
        <p>Pincode: <input type="number" name="pincode" id="pincode"> </p>
        <hr>

        <h2>Payment Information</h2>
        <p>Card Type:
            <select name="card_type" id="card_type">
                <option value="">--Select the card type--</option>
                <option value="visa">visa</option>
                <option value="rupay">rupay</option>
                <option value="mastercard">mastercard</option>
            </select>
        </p>
        <p> Card number: <input type="number" name="card_number" id="card_number" placeholder="xxxx-xxxx-xxxx-xxxx"></p>
        
        
        <p>CVV no. <input type="password" name="cvv" id="cvv"></p>
        <input type="submit" value="Submit" name="submit">
        
        
    </form>
    </div>
         
</body>
</html>