<!DOCTYPE html>
<html>
<head>
	<title>Countdown</title>

	<style type="text/css">
		body{
			text-align: center;
			background: #ff4d4d;
			font-family: sans-serif;
			font-weight: 100;
		}

		h1{
			color: #396;
			font-weight: 100;
			font-size: 40px;
			margin: 40px 0px 20px;
		}

		#clockdiv{
			font-family: sans-serif;
			color: #fff;
			display: inline-block;
			font-weight: 100;
			text-align: center;
			font-size: 200px;
		}

		#clockdiv > div{
			padding: 10px;
			border-radius: 30px;
			background: #e60000;
			display: inline-block;
			margin-top: 200px;
		}

		#clockdiv div > span{
			padding: 15px;
			border-radius: 30px;
			background: #b30000;
			display: inline-block;
		}

		.smalltext{
			padding-top: 15px;
			font-size: 24px;
		}
	</style>
</head>
<body>
	<!-- <h1>Countdown Clock</h1> -->
	<div id="clockdiv">
		<div>
			<span class="hours"></span>
			<div class="smalltext">Hours</div>
		</div>
		<div>
			<span class="minutes"></span>
			<div class="smalltext">Minutes</div>
		</div>
		<div>
			<span class="seconds"></span>
			<div class="smalltext">Seconds</div>
		</div>
	</div>
</body>
	<script type="text/javascript">
		var g_startTime = <?php echo $_GET["m"]; ?>;

		function getTimeRemaining(endtime) {
			var t = Date.parse(endtime) - Date.parse(new Date());
			var seconds = Math.floor((t / 1000) % 60);
			var minutes = Math.floor((t / 1000 / 60) % 60);
			var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
			var days = Math.floor(t / (1000 * 60 * 60 * 24));
			return {
				'total': t,
				'days': days,
				'hours': hours,
				'minutes': minutes,
				'seconds': seconds
			};
		}

		function initializeClock(id, endtime) {
			var clock = document.getElementById(id);
			var hoursSpan = clock.querySelector('.hours');
			var minutesSpan = clock.querySelector('.minutes');
			var secondsSpan = clock.querySelector('.seconds');

			function updateClock() {
				var t = getTimeRemaining(endtime);

				if(t.hours > 0) {
					hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
				}
				else {
					hoursSpan.parentNode.style.display='none';
				}
				minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
				secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

				if (t.total <= 0) {
					clearInterval(timeinterval);
				}
			}

			updateClock();
			var timeinterval = setInterval(updateClock, 1000);
		}

		var deadline = new Date(Date.parse(new Date()) + g_startTime * 60 * 1000);
		initializeClock('clockdiv', deadline);
	</script>
</html>