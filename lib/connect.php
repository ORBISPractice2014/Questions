<?
class DBQuestions {
        private static $mysqli;

        public static function connect(){
            self::$mysqli = new mysqli("localhost", "root", "", "Questions");
            self::$mysqli->set_charset("utf8");
        }

        public static function addQuestion($text, $name) {
            $date = date('Y-m-d H:i:s');
            $status = false;
            $id = null;
            return self::$mysqli->query("INSERT INTO questions (`ID`, `Text`, `Date`, `Status`, `Name`) VALUES ('$id', '$text', '$date', '$status', '$name')");
        }

        public static function getUnansweredQuestions(){
            if ($result = self::$mysqli->query("SELECT * FROM  questions WHERE STATUS = 0 ORDER BY DATE")) {
               return $result->fetch_all();
            }
        }

        public static function changeActiveQuestionStatus() {
            return self::$mysqli->query("UPDATE questions SET Status = 1 WHERE STATUS = 0 ORDER BY DATE LIMIT 1");
        }
    }
    DBQuestions::connect();
?>
