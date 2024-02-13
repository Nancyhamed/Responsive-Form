<?PHP
    if(isset($_POST['btnn']))
    {
        $user_name=$_POST['name'];
        $user_email=$_POST['email'];
        $user_address=$_POST['address'];
        $user_contact=$_POST['contact'];
        
        echo "$user_name- $user_email- $user_address- $user_contact <br>";
        ///////////////////////////////////////////////////////////////////////////////////
        $host= "localhost";
        $user = "root";
        $pass="";
        $db= "responform";
        $conn = mysqli_connect($host, $user, $pass, $db);
        $insert_stm= " insert into info values('$user_name', '$user_email', '$user_address', '$user_contact')";
        mysqli_query($conn, $insert_stm);
    }
?>