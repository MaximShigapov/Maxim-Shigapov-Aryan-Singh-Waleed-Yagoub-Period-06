<!DOCTYPE html>
<html>
<head>
        <title>Order</title>
        <link rel="stylesheet" href="order.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=EB Garamond">

</head>
<body>

<form action="background.php" method="POST">

    <div class="orderform">
        <div class="title">
            <p>Please Enter Your Reservation Details Below</p>
        </div>
    <input class="input1" type="text" name="firstname" placeholder="First Name">
    <input class="input1" type="text" name="lastname" placeholder="Last Name">
    <br>
    <input class="input1" type="number" name="room" placeholder="Room Number">
    <br>
    <input class="input1" type="text" name="staydatebeginning" placeholder="Arrival Date (mm/dd/yyyy)">
    <input class="input1" type="text" name="staydateend" placeholder="Departure Date (mm/dd/yyyy)">
    <br>
    <input class="input1" type="text" name="email" placeholder="Email Address">
    <br>
    <button class="input2" type="submit" name="submit">Place Your Order →</button>
    </div>

</form>


</body>
</html>
    
    