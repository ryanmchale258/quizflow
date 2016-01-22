<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>QuizFlow Design</title>
	<link rel="stylesheet" type="text/css" href="css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet' type='text/css'>
</head>
<body id="quiz-home">
<script type = "text/javascript">
  function OnClose()
  {
    if(window.opener != null && !window.opener.closed) 
    {
       window.opener.HideModalDiv();
    }
  }
  window.onunload = OnClose;
</script>
	<div id="page">
		<header class="quiz-header">
			<div class="logoArea">
				<img id="logo" src="images/logo.png" height="230" width="309" alt="Batty's Bath Logo">
			</div>
			<div class="quiz-title-con">
				<h1 class="quiz-title">Find the Perfect Cleanser and/or Exfoliator For Your Skin</h1>
			</div>
		</header>
		<section class="quiz-body">
			<h2 class="best-pick">Your best pick:</h2>
			<div class="row">
				<div class="quiz-products-con large-12 columns">
					<h3>Mild Jojoba Scrub</h3>
					<a class="buy-btn" href="http://www.shopbattysbath.com/mild-jojoba-facial-scrub/" target="_blank">Buy</a>
					<div class="product-img">
						<img src="images/mild-jojoba-scrub.jpg" alt="Mild Jojoba Scrub">
					</div>
				</div>
				
				
			</div>
		</section>
		<footer class="quiz-footer">
			<p>© <?php echo date("Y");?> Batty's Bath | <a href="http://battysbath.ca/the-fine-print/#term" target="_blank">Terms of Use</a> | <a href="http://battysbath.ca/the-fine-print/#disclaimer" target="_blank">Disclaimer</a> | <a href="http://battysbath.ca/the-fine-print/#privacy" target="_blank">Privacy Policy</a><br><a href="http://www.battysbath.ca" target="_blank">battysbath.ca</a> | <a href="http://www.shopbattysbath.com" target="_blank">shopbattysbath.com</a></p>
		</footer>
	</div>
</body>
