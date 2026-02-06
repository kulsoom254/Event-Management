<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">   
    </head>
<?php 
include "cssjs/css.php";
?>

<body>

    <?php
  include "includes/header.php";
  ?>
    <style>
    .field-border {
        border-radius: 20px;

    }
    
    </style>


    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="col-md-8" id="signup_msg">
                <!--Alert from signup form-->
            </div>
            <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <form id="signup_form" method="POST" class="was-validated">
                        <div class="form-group">
                            <input type="text " name="f_name" class="form-control field-border" placeholder="Your Name"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control field-border" placeholder="Your Email"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control field-border" placeholder="College Name" name="college" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control field-border" placeholder="Branch" name="branch" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control field-border" placeholder="Phone" name="phone" required>
                        </div>

                        
                          
                                <div class="form-group">
                                    
                                        <select class="form-control field-border"
                                            name="event_title" required>
                                            <option selected disabled>Event Type...</option>
                                            <?php $event_query = "SELECT event_title FROM events"; $event_result = mysqli_query($con, $event_query); if ($event_result && mysqli_num_rows($event_result) > 0) { while($row = mysqli_fetch_assoc($event_result)) { echo '<option value="'.htmlspecialchars($row["event_title"]).'">'.htmlspecialchars($row["event_title"]).'</option>'; } } else { echo '<option disabled>No events found</option>'; } ?>
                                        </select>
                                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                                  
                                </div>

                        
                      
                        <div class="form-group">
                            <input value="Register" type="submit" name="signup_button"
                                class="btn btn-primary py-3 px-5 " required>
                        </div>
                    </form>

                </div>
                <div class="col-md-6">
                    <img src="./images/frame.png" alt="Map Image" style="position:absolute; right:25%;top:10%">
                </div>

            </div>
        <a href="index.php" style="position:absolute; right:10%;">
    <span class="icon icon-home" style="font-size:30px; margin-right:10px"></span>
    <span class="text" style="font-size:20px">Home</span>
  </a>
</div>

    </section>

<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "csefest";

$conn = new mysqli($host, $user, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['f_name'];
    $email = $_POST['email'];
    $college = $_POST['college'];
    $branch = $_POST['branch'];
    $phone = $_POST['phone'];
    $event_title = $_POST['event_title'];

    $sql = "INSERT INTO participent (fullname, email, college, branch, mobile, event)
            VALUES ('$name', '$email', '$college', '$branch', '$phone', '$event_title')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful!');</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>




    <?php
include "includes/footer.php";
?>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>

    <?php
  include "cssjs/js.php";
  ?>
</body>

</html>