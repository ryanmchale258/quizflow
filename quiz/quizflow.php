<?php
require_once('includes/QuizFlow.php');
/** @var QuizFlow $qf */
$qf = new QuizFlow($_GET['quiz']);
?>
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
			<h1 class="quiz-title"><?php echo $qf->getQuiz()->quiz_name; ?></h1>
		</header>
		<section class="quiz-body">
			<h2 class="quiz-question"><?php echo $qf->getQuestion(); ?></h2>
			<div class="row">
                <?php foreach($qf->getOptions() as $node => $answer): ?>
                    <a href="<?php echo $qf->getUrl($node); ?>" class="quiz-answers"><div class="quiz-answers-con large-4 columns"><?php echo $answer; ?></div></a>
                <?php endforeach; ?>
			</div>
		</section>
		<footer class="quiz-footer">
			<p>© 2016 Batty's Bath | <a href="http://battysbath.ca/the-fine-print/#term" target="_blank">Terms of Use</a> | <a href="http://battysbath.ca/the-fine-print/#disclaimer" target="_blank">Disclaimer</a> | <a href="http://battysbath.ca/the-fine-print/#privacy" target="_blank">Privacy Policy</a><br><a href="http://www.battysbath.ca" target="_blank">battysbath.ca</a> | <a href="http://www.shopbattysbath.com" target="_blank">shopbattysbath.com</a></p>
		</footer>
	</div>
</body>
