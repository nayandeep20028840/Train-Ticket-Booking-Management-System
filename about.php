<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>TRAIN RESERVATION SYSTEM - About</title>
    <!-- link for using swiper js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- used to include links file -->
    <?php require('links.php'); ?>
    <style>
        .box:hover {
            border-top-color: var(--teal) !important;
        }
    </style>
</head>

<body class="bg-light">

    <!-- used to include header file -->
    <?php require('header.php'); ?>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <h3 class="text-center">“Lifeline of the nation”</h3>
        <p class="text-center mt-2">
            <!-- <br> -->
            "Largest Rail Network in Asia"
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h5 class="mb-3">About Indian Railways</h5>
                <p>
                    The first railway on Indian sub-continent ran over a stretch of 21 miles from Bombay to Thane. The idea of a railway to connect Bombay with Thane, Kalyan and with the Thal and Bhore Ghats inclines first occurred to Mr. George Clark, the Chief Engineer of the Bombay Government, during a visit to Bhandup in 1843.
                    <br>
                    The formal inauguration ceremony was performed on 16th April 1853, when 14 railway carriages carrying about 400 guests left Bori Bunder at 3.30 pm "amidst the loud applause of a vast multitude and to the salute of 21 guns." The first passenger train steamed out of Howrah station destined for Hooghly, a distance of 24 miles, on 15th August, 1854. Thus the first section of the East Indian Railway was opened to public traffic, inaugurating the beginning of railway transport on the Eastern side of the subcontinent.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/features/railways-1.png" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="ng-white rounded shadow px-4 border-4 text-center box">
                    <img src="images/features/locomotive.png" width="70px">
                    <h4 class="mt-3">7566+ Locomotives</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="ng-white rounded shadow px-4 border-4 text-center box">
                    <img src="images/features/train.png" width="70px">
                    <h4 class="mt-3">11,000+ trains everyday</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="ng-white rounded shadow px-4 border-4 text-center box">
                    <img src="images/features/train-station.png" width="70px">
                    <h4 class="mt-3">6853+ Stations</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="ng-white rounded shadow px-4 border-4 text-center box">
                    <img src="images/features/workforce.png" width="70px">
                    <h4 class="mt-3">1.54 million-Work Force</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- used to include footer file -->
    <?php require('footer.php'); ?>

</body>

</html>