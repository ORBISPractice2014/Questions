<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
</head>
<body>
<?
include("PR.php");
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'Questions';

$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (!$link) {
    die('<p style="color:red">'.mysqli_connect_errno().' - '.mysqli_connect_error().'</p>');
}
mysqli_query($link, "SET NAMES utf8");

function getUnansweredQuestions() {
    if ($result = mysqli_query($link, "SELECT Name FROM City LIMIT 10")) {
        printf("Select вернул %d строк.\n", mysqli_num_rows($result));

        /* очищаем результирующий набор */
        mysqli_free_result($result);
    }
}
?>

<?
    class DBQuestions {
        private static $mysqli;
        public static function connect(){
            self::$mysqli = new mysqli("localhost", "root", "", "Questions");
            self::$mysqli->set_charset("utf8");
        }
        public static function getUnansweredQuestions(){
            if ($result = self::$mysqli->query("SELECT * FROM  questions WHERE STATUS =0 ORDER BY DATE")) {
               return $result->fetch_all();
            }
        }
    }
    DBQuestions::connect();
    DBQuestions::getUnansweredQuestions();
?>
</body>
</html>