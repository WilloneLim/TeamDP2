<footer class="container-fluid text-center">  
    
    <?php  
    
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'deallo');
        
    if(mysqli_connect_errno()){
        echo 'Database connection failed with the following errors: ' . mysqli_connect_error();
        die();
     }
        
    if(!mysqli_select_db($conn, 'deallo'))
    {
        die("Uh oh, couldn't select database --> deallo" . $conn->connect_error . '>');
    }
    
    if(isset($_POST['subscribe']))
    {
        $Submail = $_POST["subEmail"];
        
        $sql = "INSERT INTO subscriber ('sub_email') VALUES ('$Submail' )";
        mysqli_query($conn, $sql);
        
        
        if(!mysqli_query($conn, $sql))
        {
            echo "Not Inserted";
        }
        else
        {
            header("location: login.php");
        }
        
    }
    
    
    ?>
    
    
    
    
        <form method="post" class="form-inline">Subscribe to our newsletter:
            <input type="email" name="subEmail" class="form-control" size="50" placeholder="Email Address" >
            <button type="button" name="subscribe" class="btn btn-danger">Sign Up</button>
        </form>
</footer>