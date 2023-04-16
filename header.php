
<?php
    require('connection.php');
    session_start();
?>

<style>
    div.userr{
    color: black;
    background-color: skyblue;
    padding: 5px 15px;
    border-radius: 5px;
    font-weight: 500;

}

div.userr a{
    color:red;
}
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">INDIAN RAILWAYS</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="contact_us.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="about.php">About</a>
                </li>
            </ul>
            <?php
                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
                    echo"
                    <div class='userr'>
                    $_SESSION[username] - <a href='logout.php'>LOGOUT</a>
                    </div>
                    ";
                }
                else{
                    echo"
                    <div class='d-flex'>
                <button type='button' class='btn btn-outline-dark shadow-none me-lg-2 me-2' data-bs-toggle='modal'
                    data-bs-target='#loginModal'>
                    Login
                </button>
                <button type='button' class='btn btn-outline-dark shadow-none' data-bs-toggle='modal'
                    data-bs-target='#registerModal'>
                    Register
                </button>
                </div>
                    ";
                }
            ?>
            
        </div>
    </div>
</nav>


<!--login Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="login_register.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <!-- used bootstrap icons -->
                        <i class="bi bi-person-circle fs-3 me-2"></i>
                        User Login
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none" name="emailid">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none" name = "passwordd">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-dark shadow-none" name = "login">
                            LOGIN
                        </button>
                        <!-- <a href="javascript: void(0)" class="text-secondary text-decoration-none"> Forget Password</a> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Register Modal --><!--large modal--->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="login_register.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <!-- used bootstrap icons -->
                        <i class="bi bi-person-bounding-box fs-3 me-2"></i>
                        User Registration
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- used badge(bootstrap) -->
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                        Note: Your details must match with Your ID(Aadhaar card , passport , driving license , etc.)
                    </span>
                    <div class="conttainer-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control shadow-none" name="firstname">
                            </div>
                            <div class="col-md-6 p-0">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control shadow-none" name="lastname">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Email ID</label>
                                <input type="email" class="form-control shadow-none" name="email">
                            </div>
                            <div class="col-md-6 p-0">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control shadow-none" name="phonenumber">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none" name="password">
                            </div>
                            <div class="col-md-6 p-0">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control shadow-none" name="confirmpassword">
                            </div>
                            <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" class="form-control shadow-none" name="dateofbirth">
                            </div>
                            <div class="col-md-6 p-0">
                                <label class="form-label">Pincode</label>
                                <input type="number" class="form-control shadow-none" name="pincode">
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-1">
                        <button type="submit" class="btn btn-dark shadow-none" name = "register">
                            REGISTER
                        </button>
                    </div>
                    <!-- <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control shadow-none">
    </div>
    <div class="mb-4">
    <label  class="form-label">Password</label>
    <input type="email" class="form-control shadow-none">
    </div>
    <div class="d-flex align-items-center justify-content-between mb-2">
        <button type="submit" class="btn btn-dark shadow-none">
          LOGIN  
        </button>
        <a href="javascript: void(0)" class="text-secondary text-decoration-none"> Forget Password</a>
    </div> -->
                </div>
            </form>
        </div>
    </div>
</div>
