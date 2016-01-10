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
			<h1 class="quiz-title">Find the Perfect Cleanser and/or Exfoliator For Your Skin</h1>
		</header>
		<section class="quiz-body">
			<h2 class="quiz-question">Do you want to exfoliate at the same time as cleansing in the AM & PM?</h2>
			<div class="row">
				<a href="/quizflow/quiz/no-1.php" class="quiz-answers"><div class="quiz-answers-con large-4 columns">No, my skin is so sensitive I need an extremely mild cleanser & a non-abrasive exfoliant</div></a>
				<a href="#" class="quiz-answers"><div class="quiz-answers-con large-4 columns">No, I'd like to cleanse in the AM & do both in the PM</div></a>
				<a href="#" class="quiz-answers"><div class="quiz-answers-con large-4 columns">Yes, exfoliating is needed both in the AM & PM because I have a lot of congestion (blackheads and/or whiteheads) or flakey</div></a>
			</div>
		</section>
		<footer class="quiz-footer">
			<p>© 2016 Batty's Bath | <a href="http://battysbath.ca/the-fine-print/#term" target="_blank">Terms of Use</a> | <a href="http://battysbath.ca/the-fine-print/#disclaimer" target="_blank">Disclaimer</a> | <a href="http://battysbath.ca/the-fine-print/#privacy" target="_blank">Privacy Policy</a><br><a href="http://www.battysbath.ca" target="_blank">battysbath.ca</a> | <a href="http://www.shopbattysbath.com" target="_blank">shopbattysbath.com</a></p>
		</footer>
	</div>
</body>
