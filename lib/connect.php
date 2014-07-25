<?
class DBQuestions {
    private static $mysqli;

    public static function connect(){
        self::$mysqli = new mysqli("localhost", "root", "", "Questions");
        self::$mysqli->set_charset("utf8");
    }

    public static function addQuestion($text, $name) {
        $date = date('Y-m-d H:i:s');
        $status = 0;
        $id = null;
        $text = mysql_real_escape_string($text);
        $name = mysql_real_escape_string($name);
        return self::$mysqli->query("INSERT INTO questions (`ID`, `Text`, `Date`, `ModerationDate`, `Status`, `Name`) VALUES ('$id', '$text', '$date', NULL, '$status', '$name')");
    }

    public static function getUnansweredQuestions(){
        if ($result = self::$mysqli->query("SELECT * FROM  questions WHERE STATUS = 1 ORDER BY MODERATIONDATE")) {
            return $result->fetch_all();
        }
    }

    public static function changeActiveQuestionStatus() {
        return self::$mysqli->query("UPDATE questions SET Status = 2 WHERE Status = 1 ORDER BY ModerationDate LIMIT 1");
    }

    public static function hasUnansweredQuestions() {
        if (self::$mysqli->query("SELECT * FROM questions WHERE STATUS = 1")->num_rows == 0) {
            return false;
        } else {
            return true;
        }
    }

    public static function getModerationList() {
        if ($result = self::$mysqli->query("SELECT * FROM  questions WHERE STATUS = 0 ORDER BY DATE")) {
            return $result->fetch_all();
        }
    }

    public static function approveQuestion($id) {
        if (self::$mysqli->query("SELECT * FROM questions WHERE ID = '$id'")->num_rows == 0) {
            return false;
        }
        $moderationDate = date('Y-m-d H:i:s');
        return self::$mysqli->query("UPDATE questions SET Status = 1, ModerationDate = '$moderationDate' WHERE ID = $id");
    }

    public static function removeQuestion($id) {
        if (self::$mysqli->query("SELECT * FROM questions WHERE ID = '$id'")->num_rows == 0) {
            return false;
        }
        return self::$mysqli->query("UPDATE questions SET Status = 2 WHERE ID = '$id'");
    }
}
DBQuestions::connect();