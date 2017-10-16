<footer class="container-fluid text-center">
        <form method="post" class="form-inline">Subscribe to our newsletter:
            <input type="email" name="subEmail" class="form-control" size="50" placeholder="Email Address">
            <input type="submit" name="subbutton" value="Sign Up" class="btn btn-danger">
    </form>
    
    <?php
    $newsconn = mysqli_connect('127.0.0.1', 'root', '', 'deallo');
    
    if(mysqli_connect_errno())
    {
        echo "Database connection has failed with the following errors: ".mysqli_connect_error();
        die();
    }
    
    if(!mysqli_select_db($newsconn, 'deallo'))
    {
        die("Uh oh couldnt select database --> deallo" .$newsconn->connect_error. ">");
    }
    
    if(isset($_POST['subbutton']))
    {
        $submail = $_POST['subEmail'];
        
        $subsql = "INSERT INTO subscriber (sub_email) VALUES ('".$submail."')";
        
        if(!mysqli_query($newsconn, $subsql))
        {
            echo "Failed to insert";
        }
        else
        {
            echo "Inserted";
        }
    }
    
    ?>
    
</footer>