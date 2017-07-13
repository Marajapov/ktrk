<?php
error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
ini_set('display_errors', '0');
// error_reporting(E_ALL);
// ini_set("display_errors", 1); 

header('Content-type: text/html; charset=UTF-8');

$db_host="localhost";
$db_user="i_plan_kg";
$db_pass="Wdd90_@@11";
$db_name="i_plan_kg";
define('ROOT_URL', "http://192.168.0.13");

define('SITE_TITLE', "iPlan");
define('SITE_ADDR', "iPlan");
define('SITE_ADMIN_TITLE', "iPlan");


define('DB_PREFIX', "");
define('ROOT_PATH', dirname(__FILE__));

define("PHP_SELF",$_SERVER['PHP_SELF']); 

date_default_timezone_set('Asia/Bishkek');

require_once ROOT_PATH."/class/classloader.php";
require_once ROOT_PATH."/class/functions.php";
$session = new Session; 

$db=new db_mysql($db_host,$db_user,$db_pass,$db_name);
$db->connect(); 


mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");

$broadcast_type = array("live", "повтор", "архив", "оригинал");
$broadcast_proiz = array("Собственное", "Внешнее", "Со-производство");

$file_types = array("mpeg", "avi", "mov", "wma", "mp4", "hd", "4k");

$user_status=array("", "Сотрудник", "Технари", "Бухгалтерия", "Продюсер", "Отдел программ", "Директор программ", "Руководитель", "Администратор");

$film_company = array("Кыргызтелефильм", "Кыргызфильм", "Советский", "США", "Ужасы", "Фантастика", "Фэнтези");
$film_countries = array("Кыргызстан", "Казахстан");

$week_days = array("Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота");
$week_days_short = array("ВС", "ПН", "ВТ", "СР", "ЧТ", "ПТ", "СБ");

$film_genre=array("Аниме", "Биографический", "Боевик", "Вестерн", "Военный", "Детектив", "Детский", "Документальный", "Драма", "Исторический", "Кинокомикс", "Комедия", "Концерт", "Короткометражный", "Криминал", "Мелодрама", "Мистика", "Музыка", "Мультфильм", "Мюзикл", "Научный", "Приключения", "Реалити", "Семейный", "Спорт", "Триллер", "Ужасы", "Фантастика", "Фэнтези");

$broadcast_genre=array();
array_push($broadcast_genre,array("Информационные программы", "Новости", "Простые события", "Требующие оперативности"));
array_push($broadcast_genre,array("Аналитические программы", "События средней сложности", "Требующие анализа"));
array_push($broadcast_genre,array("Расследовательские программы", "Сложные события", "Требующие поисков, уточнений", "Репортаж, очерк или фильм"));
array_push($broadcast_genre,array("Детско-образовательные программы", "Детско-юношеские", "Познавательные", "Викторины"));
array_push($broadcast_genre,array("Музыкально-развлекательные программы", "Концерты", "Юмористические программы", "Музыкальные передачи"));
array_push($broadcast_genre,array("Социальные программы", "Документальная драма", "Общество", "Медицина", "Права Человека", "Религия", "ЖКХ"));
array_push($broadcast_genre,array("Культура", "Традиции и обычаи", "Путешествия", "Портретные передачи", "История", "Изучение кыргызского языка"));
array_push($broadcast_genre,array("Экономические программы", "Экономические программы"));
array_push($broadcast_genre,array("Коммерческие передачи", "Реклама", "Промо передачи", "Магазин на диване", "Викторины и Розыгрыши"));
array_push($broadcast_genre,array("Межпрограммы", "Музыкальные клипы", "Видеонарезки", "Видео заставки"));
array_push($broadcast_genre,array("Ток-шоу", "Передачи с участие аудитории двух и более участников"));
array_push($broadcast_genre,array("Политика", "Политика"));
array_push($broadcast_genre,array("Спорт", "Трансляция мировых спортивных событий", "Спортивные передачи"));

?>