<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Index</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="manifest" href="_manifest.json">
<meta id="theme-check" name="theme-color" content="#FFFFFF">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png"></head>

<link href="css/style.css" rel="stylesheet" />
<body class="theme-light"  onload="currentTime()">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <!-- Header -->
    <div class="header-bar header-fixed header-app header-bar-detached">
        <a data-bs-toggle="offcanvas" data-bs-target="#menu-main" href="#"><i class="bi bi-list color-theme"></i></a>
        <a href="#" class="header-title color-theme">Test</a>
        <a href="#" class="show-on-theme-light" data-toggle-theme><i class="bi bi-moon-fill font-13"></i></a>
        <a href="#" class="show-on-theme-dark" data-toggle-theme ><i class="bi bi-lightbulb-fill color-yellow-dark font-13"></i></a>
    </div>

	<!-- Footer Bar-->
    @include('footer')

	<!-- Main Sidebar-->
	<div id="menu-main" data-menu-active="nav-homes" data-menu-load="sidebar"
		style="width:280px;" class="offcanvas offcanvas-start offcanvas-detached rounded-m">
	</div>

    <!-- Your Page Content Goes Here-->
    <div class="page-content header-clear-medium">

		<div class="card card-style text-center shadow-card shadow-card-l" 
			style="background-image: url(https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287_960_720.jpg);" data-card-height="500">
			<div class="card-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div id="scene" class="scene col-md-12 viewport-header">
								<div data-depth="1.00">
									<img src="img/line.png" style="width: 100%" />
								</div>
								<div data-depth-x="0.80" data-depth-y="-0.80">
									<img src="img/pattern.png" style="width: 100%" />
								</div>
								<div data-depth="0.60">
									<img src="img/rectangleblue.png" style="width: 100%" />
								</div>
								<div data-depth="0.40">
									<p class="text-center" style=" margin-top: 150px; color: #fff; font-size: 20px; font-style: bold;">ISHA'</p>
									<p class="text-center" style=" color: #fff; font-size: 40px; font-style: bold;">15:04 am</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="content" class="p-4 p-md-5">

            <div class="limiter">
                <div class="container-table100">
                    <div class="wrap-table100">

                        <div>
                            <p style="display: inline;">Location:</p>
                            <p style="display: inline;" id="location">-</p>
                        </div>

                        <br>

                        <div>
                            <p style="display: inline;">Zone:</p>
                            <p style="display: inline;" id="zone">-</p>
                        </div>

                        <br>

                        <div>
                            <p style="display: inline;">Current Time:</p>
                            <p style="display: inline;  text-transform: uppercase;" id="date">-</p>
                        </div>

                        <br>
                        <br>

                        <div>
                            <p style="display: inline;">Subuh:</p>
                            <p style="display: inline;  text-transform: uppercase;" id="subuh">-</p>
                        </div>

                        <br>

                        <div>
                            <p style="display: inline;">Zohor:</p>
                            <p style="display: inline; text-transform: uppercase;" id="zohor">-</p>
                        </div>

                        <br>

                        <div>
                            <p style="display: inline;">Asar:</p>
                            <p style="display: inline; text-transform: uppercase;" id="asar">-</p>
                        </div>

                        <br>

                        <div>
                            <p style="display: inline;">Maghrib:</p>
                            <p style="display: inline; text-transform: uppercase;" id="maghrib">-</p>
                        </div>

                        <br>

                        <div>
                            <p style="display: inline;">Isyak:</p>
                            <p style="display: inline; text-transform: uppercase;" id="isyak">-</p>
                        </div>

                        <br>
                        <br>
                        <br>

                        <a class="btn btn-primary" target="_blank" href="https://www.e-solat.gov.my/">Semak waktu solat JAKIM</a>

                        <script>

                        $.getJSON('/data.json', function(data) {

                            

                            var xlocation = `${data.locations}`
                            var xzone = `${data.zone}`

                            var xsubuh = `${data.prayer_times.subuh}`
                            var xzohor = `${data.prayer_times.zohor}`
                            var xasar = `${data.prayer_times.asar}`
                            var xmaghrib = `${data.prayer_times.maghrib}`
                            var xisyak = `${data.prayer_times.isyak}`

                            var ysubuh = xsubuh.toUpperCase();
                            var yzohor = xzohor.toUpperCase();
                            var yasar = xasar.toUpperCase();
                            var ymaghrib = xmaghrib.toUpperCase();
                            var yisyak = xisyak.toUpperCase();

                            let times= new Array(ysubuh, yzohor, yasar, ymaghrib, yisyak);
                            // let times= new Array("4:30 AM", "12:30 PM", "3:30 PM" , "7:00 PM", "9:15 PM");

                            const currentTime = new Date().getTime();
                            const availableDates = times;

                            const nextWaktu = availableDates.find((date) => {
                                let timeH = parseInt(date.split(' ')[0]);
                                const timeM = parseInt(date.split(':')[1].split(' ')[0]);
                                const period = date.split(' ')[1];
                                if(period === "PM" && timeH !== 12) {
                                timeH += 12;
                                }
                                const time = `${timeH}:${timeM}`

                                const parseDate = new Date(new Date().toDateString() + ' ' + time);
                                return currentTime < parseDate;

                            });

                            var today_date = new Date().toLocaleDateString();
                            var nextAzan = new Date(today_date + ', ' + nextWaktu).getTime();

                            // Update the count down every 1 second
                            var x = setInterval(function() {

                            // Get today's date and time
                            var now = new Date().getTime();

                            // Find the distance between now and the count down date
                            var distance = nextAzan - now;

                            console.log('Now  time: ' + new Date(now));
                            console.log('Azan time: ' + new Date(nextAzan));
                            console.log('Table waktu: ' + times);

                            // Time calculations for days, hours, minutes and seconds
                            // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                            // Display the result in the element with id="demo"
                            console.log("Azan in: " + hours + "h "
                            + minutes + "m " + seconds + "s ");

                            // If the count down is finished, write some text
                            if (distance < 0) {
                                clearInterval(x);
                                console.log("Telah masuk waktu azan");
                            }
                            }, 1000);


                            $("#location").html(xlocation);
                            $("#zone").html(xzone);

                            $("#subuh").html(xsubuh);
                            $("#zohor").html(xzohor);
                            $("#asar").html(xasar);
                            $("#maghrib").html(xmaghrib);
                            $("#isyak").html(xisyak);
                        });

                        function currentTime() {
                            var date = new Date(); /* creating object of Date class */
                            var hour = date.getHours();
                            var min = date.getMinutes();
                            var sec = date.getSeconds();
                            hour = updateTime(hour);
                            min = updateTime(min);
                            sec = updateTime(sec);

                            hour = (hour == 0) ? 12 : ((hour > 12) ? (hour - 12) : hour);
                            midday = (hour >= 12) ? "AM" : "PM";

                            document.getElementById("date").innerText = hour + ":" + min + ":" + sec + " " + midday;
                            var t = setTimeout(function() {
                                currentTime()
                            }, 1000); /* setting timer */
                        }

                        function updateTime(k) {
                            if (k < 10) {
                                return "0" + k;
                            } else {
                                return k;
                            }
                        }
                        </script>
                    </div>
                </div>
            </div>
        </div>

		

	

		<div class="card card-style py-3">
			<div class="content px-2 text-center">
				<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase">Time to Go Mobile</h5>
				<h2>Get Duo Mobile Today</h2>
				<p class="mb-3">
					Start your next project with Duo and enjoy the power of a Progressive Web App.
				</p>
				<a href="https://1.envato.market/2ryjKA" target="_blank" class="default-link btn btn-m rounded-s gradient-highlight shadow-bg shadow-bg-s px-5 mb-0 mt-2">Get Duo Now</a>
			</div>
		</div>

		<div class="card card-style py-3">
			<div class="content px-2 text-center">
				<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase">Time to Go Mobile</h5>
				<h2>Get Duo Mobile Today</h2>
				<p class="mb-3">
					Start your next project with Duo and enjoy the power of a Progressive Web App.
				</p>
				<a href="https://1.envato.market/2ryjKA" target="_blank" class="default-link btn btn-m rounded-s gradient-highlight shadow-bg shadow-bg-s px-5 mb-0 mt-2">Get Duo Now</a>
			</div>
		</div>

		<div class="card card-style py-3">
			<div class="content px-2 text-center">
				<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase">Time to Go Mobile</h5>
				<h2>Get Duo Mobile Today</h2>
				<p class="mb-3">
					Start your next project with Duo and enjoy the power of a Progressive Web App.
				</p>
				<a href="https://1.envato.market/2ryjKA" target="_blank" class="default-link btn btn-m rounded-s gradient-highlight shadow-bg shadow-bg-s px-5 mb-0 mt-2">Get Duo Now</a>
			</div>
		</div>

		<div class="card card-style py-3">
			<div class="content px-2 text-center">
				<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase">Time to Go Mobile</h5>
				<h2>Get Duo Mobile Today</h2>
				<p class="mb-3">
					Start your next project with Duo and enjoy the power of a Progressive Web App.
				</p>
				<a href="https://1.envato.market/2ryjKA" target="_blank" class="default-link btn btn-m rounded-s gradient-highlight shadow-bg shadow-bg-s px-5 mb-0 mt-2">Get Duo Now</a>
			</div>
		</div>

		<div class="card card-style py-3">
			<div class="content px-2 text-center">
				<h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase">Time to Go Mobile</h5>
				<h2>Get Duo Mobile Today</h2>
				<p class="mb-3">
					Start your next project with Duo and enjoy the power of a Progressive Web App.
				</p>
				<a href="https://1.envato.market/2ryjKA" target="_blank" class="default-link btn btn-m rounded-s gradient-highlight shadow-bg shadow-bg-s px-5 mb-0 mt-2">Get Duo Now</a>
			</div>
		</div>

    </div>
	
</div>
<!--End of Page ID-->

<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/custom.js"></script>

<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="js/parallax.min.js"></script>
<script>
  $(function () {
	var scene = document.getElementById("scene");
	var parallax = new Parallax(scene);
  });
</script>

</body>