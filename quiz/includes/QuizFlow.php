<?php
define('SHORTINIT', true);
$path = $_SERVER['DOCUMENT_ROOT'] . '/quizflow';
require_once($path . '/wp-load.php');
class QuizFlow {
    const QUIZ_URL = WP_HOME . '/quiz/quizflow.php';

    protected $_database;
    protected $_quiz;

    public function __construct($quizId) {
        $this->_setQuiz($quizId);
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

    protected function _setQuiz($quizId) {
        $query   = mysql_real_escape_string('SELECT * FROM `qf_quiz` WHERE `quiz_id` = ' . $quizId);
        $results = $this->_db()->get_row($query, OBJECT);

        $this->_quiz = $results;

        return $this;
    }

    protected function _getEndpointData() {
        if (isset($_GET['path'])) {
            $path = $_GET['path'];

            $query = 'SELECT `endpoints_description`, `products_name`, `products_sku`, `products_url`, `products_image`
                        FROM `qf_endpoints`, `qf_products_endpoints`, `qf_products`
                        WHERE `qf_endpoints`.`endpoints_id` = `qf_products_endpoints`.`products_endpoints_endpoint`
                        AND `qf_products`.`products_id` = `qf_products_endpoints`.`products_endpoints_product`
                        AND `endpoints_path` = "' . $path . '"';

            if ($result = $this->_db()->get_row($query, OBJECT)) {
                return $result;
            }

            return false;
        }

        return false;
    }

    public function getEndpoint() {
        return $this->_getEndpointData();
    }

    protected function _getQuestionData() {
        if (isset($_GET['stage'])) {
            $stage = $_GET['stage'];
        } else {
            $stage = 1;
        }

        if (isset($_GET['stage'])) {
            $node = $_GET['input'];
        } else {
            $node = 'a';
        }

        $query = 'SELECT * FROM `qf_questions` WHERE `questions_quiz` = ' .
            $this->getQuiz()->quiz_id .
            ' AND `questions_stage` = ' .
            $stage . ' AND (`questions_input` = "' . $node .
            '" OR `questions_input` IS NULL)';

        if ($result = $this->_db()->get_row($query, OBJECT)) {
            return $result;
        }

        return false;
    }

    public function getQuestion() {
        return $this->_getQuestionData()->questions_question;
    }

    public function getOptions() {
        $exits   = explode('|', $this->_getQuestionData()->questions_exits);
        $i       = 'a';
        $options = array();

        foreach ($exits as $exit) {
            $options[$i] = $exit;
            $i++;
        }

        return $options;
    }

    protected function _getStage() {
        if ($stage = $this->_getParam('stage')) {
            return $stage;
        }

        return 1;
    }

    public function getUrl($node) {
        $nextStage = (int)$this->_getStage() + 1;
        $url       = self::QUIZ_URL . '?quiz=' . $this->getQuiz()->quiz_id . '&stage=' . $nextStage . '&input=' . $node;

        if ($path = $this->_getParam('path')) {
            $path .= sprintf('_%s:%s', $this->_getStage(), $node);
        } else {
            $path = sprintf('%s_%s:%s', $this->getQuiz()->quiz_id, $this->_getStage(), $node);
        }

        return $url . '&path=' . $path;
    }

    public function _getParams() {
        $queryString = explode('?', $_SERVER['REQUEST_URI'])[1];
        $params      = array();

        $keyVals = explode('&', $queryString);

        foreach ($keyVals as $keyVal) {
            $query             = explode('=', $keyVal);
            $params[$query[0]] = $query[1];
        }

        return $params;
    }

    public function _getParam($key) {
        $params = $this->_getParams();

        if (isset($params[$key])) {
            return $params[$key];
        }

        return false;
    }

    public function getPath() {
        return $this->_getParam('path');
    }
}
