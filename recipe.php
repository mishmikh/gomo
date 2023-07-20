<?
/* Принимаем данные из формы */
  $name = $_POST["name"];
  $text_message = $_POST["message"];

/* Подключаемся к БД */
$db=mysqli_connect("localhost", "root","", "praktika");

/* Записываем данные из формы в БД */
$sql = "INSERT INTO praktika(name, message) VALUES ('$name', '$text_message')";
$result=mysqli_query($db, $sql);


/* Подключаемся к базе данных */
$db=mysqli_connect("localhost", "root","", "praktika");

/* Выбираем данные */
$sql="SELECT name, message FROM praktika";
$result=mysqli_query($db, $sql);

/* Разбираем данные и выводим под формой*/
while ($line=mysqli_fetch_row($result)) {
    echo "<b>Название:</b>".$line[0]."<br>";
    echo "<b>Рецепт:</b>".$line[1]."<br>";
}
?>