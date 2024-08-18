<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
          background-image: url(images/10.jpg);
          background-size: cover;
          
          
        }
        .container {
          max-width: 600px;
          margin: 0 auto;
          padding: 20px;
        }
        
        h1 {
          text-align: center;
        }
        
        form {
          margin-top: 10px;
        }
        
        label {
          display: inline-block;
          margin-bottom: 5px;
          margin-left: 70px;
          color: whitesmoke;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="file"],
        input[type="id-type"],select
        {
          width: 80%;
          padding: 10px;
          margin-bottom: 10px;
          border: 2px solid rgb(0, 0, 0);
          border-radius: 4px;
          font-family: 'Libre Baskerville';
          font-size: 20px;
          margin-left: 70px;
        }
        
        input[type="submit"] {
          background-color:lightstelblue;
          color: black;
          padding: 10px 20px;
          border: none;
          border-radius: 10px;
          cursor: pointer;
          border: 2px solid rgb(0, 0, 0);
          border-radius: 4px;
          font-family: 'Libre Baskerville';
          font-size: 25px;
        }
        
        input[type="submit"] {
          background-color: lightblue;
          border-radius: 10px;
          cursor: pointer;
          border: 2px solid rgb(0, 0, 0);
          border-radius: 4px;
          font-family: 'Libre Baskerville';
          font-size: 25px;
          margin-left: 70px;
        }
      </style>
    </head>
    <body>
      <div class="container">
          <h1>BOOK YOUR ROOM</h1>
          <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter Your Full Name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter Your Email Id" required>
            
            <label for="checkin">Check-in Date:</label>
            <input type="date" id="checkin" name="checkin" required>
            
            <label for="checkout">Check-out Date:</label>
            <input type="date" id="checkout" name="checkout" required>
            
            
            <div id="a">
    
            <label for="room-type">Room Type:</label>
            <select id="room-type" name="room-type" required>
              <option value="">Select room type</option>
              <option value="single">Single</option>
              <option value="double">Double</option>
              <option value="full hotel">Full hotel</option>
            </select>
         
            <label for="id-type">Id Type</label>
            <select id="id-type" name="id-type" required>
                <option value="">Select id type</option>
                <option value="adhar">Adhaar Card</option>
                <option value="pan">Pan Card</option>
                <option value="passport">Passport</option>
                <option value="driving liecense">Driving liecense</option>
                <option value="voter id">Voter Id</option>
            </select>
           </div>
                <label for="file">Choose File</label>
                <input type="file" id="file" name="file" required accept="images/images3.jpg">
  
                <br> <br>
                
                <input type="submit" name="book" value="book">
              </form>
            </div>
</body>
</html>
<?php 
include 'connection.php';
        
if(isset($_POST['book']))
{
    $User = $_POST['name'];
    $email = $_POST['email'];
    $checkin  = $_POST['checkin'];
    $checkout  = $_POST['checkout'];
    $room     = $_POST['room-type'];
    $id     = $_POST['id-type'];
    $file   = $_POST['file'];

    $query  = "INSERT INTO book_room (name,email,checkin,checkout,roomtype,id,file)
    VALUES('$User','$email','$checkin','$checkout','$room','$id','$file')";
    $data = mysqli_query($con,$query);

    if($data)
 {
   ?>
   <script>
      alert("data inserted sucessfully");
   </script>
       <?php 
 }
 else
 {
  ?>
  <script>
      alert("please try again data not inserted sucessfuly"); 
  </script>
  <?php 
  
 }
 
}

?>