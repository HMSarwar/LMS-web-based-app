<?php
session_start();
if( isset($_SESSION['id']) ) {
    header("location: dashboard.php");
}
?>
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
        <div class="margin-top">
            <div class="row">
                <div class="span12">
                    <div class="sti">
                        <img src="../LMS/ist.png" class="img-rounded">
                    </div>
                    <div class="login">
                        <div class="log_txt">
                            <p><strong>Please Enter the Details Below..</strong></p>
                        </div>
                        <form class="form-horizontal" method="POST">
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Username</label>
                                <div class="controls">
                                    <input type="text" name="username" id="username" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Password</label>
                                <div class="controls">
                                    <input type="password" name="password" id="password" placeholder="Password"
                                           required>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button id="login" name="submit" type="submit" class="btn"><i
                                                class="icon-signin icon-large"></i>&nbsp;Submit
                                    </button>
                                </div>
                            </div>

                            <?php
                            if (isset($_POST['submit'])) {
                                $username = $_POST['username'];
                                $password = $_POST['password'];
                                $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                                $result = $conn->query($query);
                                $num_row = $result->num_rows;
                                if ($result->num_rows > 0) {
                                    while( $row = $result->fetch_assoc()) {
                                        $_SESSION['id'] = $row['user_id'];
                                        $conn->close();
                                        echo "<script> window.location.replace('dashboard.php') </script>";
                                    }
                                } else {
                                    echo '<div class="alert alert-danger">Access Denied</div>';
                                }
                                $conn->close();
                            }
                            ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php') ?>