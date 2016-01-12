<?php
define('SHORTINIT', true);
$path = $_SERVER['DOCUMENT_ROOT'] . '/quizflow';
require_once($path . '/wp-load.php');
class QuizFlow {
    protected $_database;
    protected $_quiz;

    public function __construct($quizId) {
        $this->setQuiz($quizId);
    }

    protected function _db() {
        if (null === $this->_database) {
            $this->_database = new wpdb(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
        }

        return $this->_database;
    }

    public function getQuiz() {
        if (null !== $this->_quiz) {
            return $this->_quiz;
        }

        return false;
    }

    public function setQuiz($quizId) {
        $query   = mysql_real_escape_string('SELECT * FROM `qf_quiz` WHERE `quiz_id` = ' . $quizId);
        $results = $this->_db()->get_row($query, OBJECT);

        $this->_quiz = $results;

        return $this;
    }

    public function getQuestionData() {
        if(isset($_GET['stage'])) {
            $stage = $_GET['stage'];
        } else {
            $stage = 1;
        }

        $query = 'SELECT * FROM `qf_questions` WHERE `questions_quiz` = ' . $this->getQuiz()->quiz_id . ' AND `questions_stage` = ' . $stage;

        if($result = $this->_db()->get_row($query, OBJECT)) {
            return $result;
        }

        return $this->getEndPoint();
    }

    public function getQuestion() {
        return $this->getQuestionData()->questions_question;
    }

    public function getOptions() {
        $exits = explode('|', $this->getQuestionData()->questions_exits);
        $i = 'a';
        $options = array();

        foreach($exits as $exit) {
            $options[$i] = $exit;
            $i++;
        }

        return $options;
    }

    public function getUrl($node) {
        return $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '&input=' . $node;
    }
}
