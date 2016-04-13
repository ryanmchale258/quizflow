<?php
require_once('includes/QuizFlow.php');
/** @var QuizFlow $qf */
$qf = new QuizFlow($_GET['quiz']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $qf->getQuiz()->quiz_name; ?> | Batty's Bath | Natural Skin Care Solutions</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="css/foundation.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='https://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet' type='text/css'>
</head>
<body id="quiz-home">
<script type="text/javascript">
function OnClose() {
    if (window.opener != null && !window.opener.closed) {
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
        <?php if ($endpoints = $qf->getEndpoint()): ?>
            <?php $columns = count($endpoints) > 1 ? 'large-6' : 'large-12'; ?>
            <h2 class="best-pick">Your best pick:</h2>
            <div class="row">
                <p class="quiz-endpoint">
                    <?php echo $endpoints[0]->endpoints_description; ?>
                </p>
            </div>
            <div class="row products-row">
                <?php foreach ($endpoints as $endpoint): ?>
                    <div class="quiz-products-con <?php echo $columns; ?> columns">
                        <h3><?php echo $endpoint->products_name; ?></h3>
                        <a class="buy-btn" href="<?php echo $endpoint->products_url; ?>" target="_blank">Buy</a>

                        <div class="product-img">
                            <img src="<?php echo $endpoint->products_image; ?>" alt="<?php echo $endpoint->products_name; ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php elseif ($question = $qf->getQuestion()): ?>
            <h2 class="quiz-question"><?php echo $question; ?></h2>
            <?php if ($options = $qf->getOptions()): ?>
                <?php $columns = (count($options) % 3 === 0) ? 'large-4' : 'large-6'; ?>
                <div class="row answers-row">
                    <?php foreach ($options as $node => $answer): ?>
                        <a href="<?php echo $qf->getUrl($node); ?>" class="quiz-answers">
                            <div class="quiz-answers-con <?php echo $columns ?> columns"><?php echo $answer; ?></div>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <div class="row">
            <a href="#" onclick="window.history.go(-1);" class="extra-buttons">
                <div class="extra-buttons-con large-push-3 large-3 columns">Previous Question</div>
            </a>
            <a href="<?php echo $qf->getUrl(); ?>" class="extra-buttons">
                <div class="extra-buttons-con large-push-3 large-3 columns">Start Over</div>
            </a>
        </div>
    </section>
    <footer class="quiz-footer">
        <div class="footer-border row"></div>
        <p>© 2016 Batty's Bath | <a href="http://battysbath.ca/the-fine-print/#term" target="_blank">Terms of Use</a> |
            <a href="http://battysbath.ca/the-fine-print/#disclaimer" target="_blank">Disclaimer</a> |
            <a href="http://battysbath.ca/the-fine-print/#privacy" target="_blank">Privacy Policy</a><br><a href="http://www.battysbath.ca" target="_blank">battysbath.ca</a> |
            <a href="http://www.shopbattysbath.com" target="_blank">shopbattysbath.com</a></p>
    </footer>
</div>
</body>
