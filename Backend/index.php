<?php require('connection.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>TRAIN RESERVATION SYSTEM - home</title>

    <!-- used to include links file -->
    <?php require('links.php'); ?>

    <!-- link for using swiper js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <style>
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        /* for mobile screen */
        @media screen and (max-width:575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>

<body class="bg-light">

    <!-- used to include header file -->
    <?php require('header.php'); ?>
    <!-- using swiper js for carousels -->
    <div class="conttainer-fluid px-lg-4 mt-4">
        <div class="swiper swipper-container">
            <div class="swiper-wrapper">
                <!-- <div class="swiper-slide"> -->
                <div class="swiper-slide">
                    <img src="images/carousel/42.jpg" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/43.jpg" class="w-100 d-block">
                </div>
            </div>
        </div>
    </div>

    <!-- check availability form -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Train Ticket Booking</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Date</label>
                            <input type="date" class="form-control shadow-none date">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">From Station</label>
                            <select class="form-select From" aria-label="Default select example">
                                <option selected>from</option>
                                <option value="1">Raipur</option>
                                <option value="2">Varanasi</option>
                            </select>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">To Station</label>
                            <select class="form-select To" aria-label="Default select example">
                                <option selected>To</option>
                                <option value="1">Raipur</option>
                                <option value="2">Varanasi</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-lg-3 mt-2">
                            <!-- <a href="rooms.php"> -->
                            <button type="submit" class="btn text-white shadow-none custom-bg search">Search Train</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- our trains -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font" id="tr-head">TRAINS</h2>
    <div class="container train">
        <center>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width:350px; margin: auto;">
                    <img src="images/7.jpg" class="card-img-top train_one_img">
                    <div class="card-body train_one">
                        <h5 class="mb-3">Sarnath Express</h5>
                        <h6 class="mb-1">Schedule:</h6>
                        <h6 class="mb-2">20:25 DURG --- 25h:10m --- 21:35 CPR </h6>
                        <h6 class="mb-4">07:10 CPR --- 23h:55m --- 07:05 Durg</h6>
                        <?php
                        $sql = "SELECT * FROM `sarnath`";
                        $result = mysqli_query($con, $sql);
                        $seat_ct = mysqli_num_rows(mysqli_query($con, $sql));
                        $avticket = 0 - $seat_ct;
                        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                            if ($avticket > 0) {
                                echo "Aviliable ticket : $avticket <br><br>
                                    <button type='button' class='btn btn-outline-dark shadow-none' data-bs-toggle='modal'
                                        data-bs-target='#passengeregs'>
                                        Book Ticket
                                    </button>
                            ";
                            } else {
                                echo "Ticket Not aviliable";
                            }
                        } else {
                            echo "Login to Book Ticket";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width:350px; margin: auto;">
                    <img src="images/8.jpg" class="card-img-top train_two_img">
                    <div class="card-body train_two">
                        <h5 class="mb-3">Durg Ntv Exp</h5>
                        <h6 class="mb-1">Schedule:</h6>
                        <h6 class="mb-2">19:40 DURG --- 26h:50m --- 22:30 NTV</h6>
                        <h6 class="mb-4">11:15 NTV --- 27h:05m --- 14:20 DURG</h6>
                        <?php
                        $sql = "SELECT * FROM `durg`";
                        $result = mysqli_query($con, $sql);
                        $seat_ct = mysqli_num_rows(mysqli_query($con, $sql));
                        $avticket = 60 - $seat_ct;

                        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                            if ($avticket > 0) {
                                echo "Aviliable ticket : $avticket <br><br>
                                    <button type='button' class='btn btn-outline-dark shadow-none' data-bs-toggle='modal'
                                        data-bs-target='#passengereg'>
                                        Book Ticket
                                    </button>
                                ";
                            } else {
                                echo "Ticket Not aviliable";
                            }
                        } else {
                            echo "Login to Book Ticket";
                        }

                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Trains >>></a>
            </div>
        </center>
    </div>


    <!-- book ticket Modal --><!--large modal--->
    <div class="modal fade" id="passengereg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="login_register.php" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <!-- used bootstrap icons -->
                            <i class="bi bi-person-bounding-box fs-3 me-2"></i>
                            Enter Passenger Details
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- used badge(bootstrap) -->
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Note: Your details must match with Your ID(Aadhaar card , passport , driving license , etc.)
                        </span>
                        <div class="conttainer-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none" name="fname">
                                </div>
                                <div class="col-md-6 p-0">
                                    <label class="form-label">Age</label>
                                    <input type="text" class="form-control shadow-none" name="uage">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Gender</label>
                                    <input type="txt" class="form-control shadow-none" name="gender">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none" name="eemail">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Source</label>
                                    <input type="txt" class="form-control shadow-none" name="src" id="src">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Destination</label>
                                    <input type="txt" class="form-control shadow-none" name="dest" id="dest">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="txt" class="form-control shadow-none" name="datee" id="dat">
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark shadow-none" name="passg">
                                Book ticket
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- Register Modal --><!--large modal--->
    <div class="modal fade" id="passengeregs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="login_register.php" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <!-- used bootstrap icons -->
                            <i class="bi bi-person-bounding-box fs-3 me-2"></i>
                            Enter Passenger Details
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- used badge(bootstrap) -->
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Note: Your details must match with Your ID(Aadhaar card , passport , driving license , etc.)
                        </span>
                        <div class="conttainer-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none" name="fnames">
                                </div>
                                <div class="col-md-6 p-0">
                                    <label class="form-label">Age</label>
                                    <input type="text" class="form-control shadow-none" name="uages">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Gender</label>
                                    <input type="txt" class="form-control shadow-none" name="genders">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none" name="eemails">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Source</label>
                                    <input type="txt" class="form-control shadow-none" name="srcs" id="srcs">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Destination</label>
                                    <input type="txt" class="form-control shadow-none" name="dests" id="dests">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="txt" class="form-control shadow-none" name="datees" id="dats">
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark shadow-none" name="passgs">
                                Book ticket
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- our Facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>


    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/100.png" width="80px">
                <h5 class="mt-3">E-catering</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/101.png" width="80px">
                <h5 class="mt-3">Charging Port</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/102.png" width="80px">
                <h5 class="mt-3">Air Conditioning</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/103.png" width="80px">
                <h5 class="mt-3">Fan</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/105.png" width="80px">
                <h5 class="mt-3">Travel & Tourism</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>


    <!-- used to include header file -->
    <?php require('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>



    <!-- to initialise swiper -->
    <script>
        var swiper = new Swiper(".swipper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disbaleOnInteraction: false,
            },
        });

        const btn = document.querySelector('.search');
        const a1 = document.querySelector('.train_one');
        const a2 = document.querySelector('.train_one_img');
        const b1 = document.querySelector('.train_two');
        const b2 = document.querySelector('.train_two_img');
        const c = document.getElementById('tr-head');

        a1.style.display = 'none';
        a2.style.display = 'none';
        b1.style.display = 'none';
        b2.style.display = 'none';
        c.innerHTML = 'Available Trains';

        function getDayFromDate(dateString) {
            const date = new Date(dateString);
            const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            const day = date.getDay();
            return daysOfWeek[day];
        }


        function style_changer(dayOfWeek) {

            c.innerHTML = 'Trains';

            if (dayOfWeek === "Sunday" || dayOfWeek === "Saturday") {
                if (b1.style.display === 'block' && b2.style.display === 'block') {
                    b1.style.display = 'none';
                    b2.style.display = 'none';
                }
                a1.style.display = 'block';
                a2.style.display = 'block';
            } else {
                if (a1.style.display === 'block' && a2.style.display === 'block') {
                    a1.style.display = 'none';
                    a2.style.display = 'none';
                }
                b1.style.display = 'block';
                b2.style.display = 'block';
            }
            return;
        }

        btn.addEventListener('click', function(e) {

            e.preventDefault();

            let from = document.querySelector('.From').value;
            let to = document.querySelector('.To').value;
            let date = document.querySelector('.date').value;

            if (from === 'from' || to === 'To' || date === '') {
                alert("One of the required fields is Empty");
                return;
            }
            if (from === to) {
                alert("Source and destination cannot be same");
                return;
            }

            let dayOfWeek = getDayFromDate(date);
            style_changer(dayOfWeek);
            if (dayOfWeek == 'Sunday' || dayOfWeek == 'Saturday') {
                document.getElementById('dests').value = document.querySelector('.To')[to].textContent;
                document.getElementById('srcs').value = document.querySelector('.From')[from].textContent;
                document.getElementById('dats').value = date;
            } else {
                document.getElementById('dest').value = document.querySelector('.To')[to].textContent;
                document.getElementById('src').value = document.querySelector('.From')[from].textContent;
                document.getElementById('dat').value = date;
            }
        });
    </script>

</body>

</html>