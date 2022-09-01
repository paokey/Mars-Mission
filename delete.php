
<?php
// calling header and database connection
require_once("nav.php");


// QUERY
        if(isset($_GET['martian_id'])){
                $id = $_GET['martian_id'];
                

        $sql = "DELETE FROM martian WHERE martian_id=$id";

                if ($conn->query($sql) === TRUE) {
                  echo "<script>alert('Record deleted successfully')</script>";
                } else {
                  echo "Error deleting record: " . $conn->error;
                }
        }
        header('Location:index.php');

?>



