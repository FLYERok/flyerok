<?php
// Создать таблицу
//вставить данные
//извлечь и перебрать

$connect = mysql_connect('localhost', 'root');
//echo $connect ? 'yes' : 'no';  
//echo $connect; //Resourse
$select_db = mysql_select_db('test');
//echo $select_db;   //bool = 1


$create_db = "CREATE TABLE table1 (
`id` int(11) NOT NULL AUTO_INCREMENT,
`company` char(15) NOT NULL,
`address` char(25) NOT NULL,
`C_NO` int(10) NOT NULL,
PRIMARY KEY (`id`)
)";
//$q_create_db = mysql_query($create_db);
$zapros = $q_create_db ? 'yes': 'no';
//echo $zapros;

$insert = "INSERT INTO table1 ( `company`, `address`, `C_NO`)
VALUES ( 'www','qwwqw', 12)";

for ($i = 0; $i <200; $i++) {
	$b = 'test'.$i;
$insert = "INSERT INTO table1 ( `company`, `address`, `C_NO`)
VALUES ( '$b','qwwqw', 12)";
//$q_insert = mysql_query($insert);
}

$select = "SELECT * from table1 GROUP BY `C_NO`";
$q_select = mysql_query($select);
while($row = mysql_fetch_assoc($q_select)) {
$array[] = $row;
};
echo '<pre>';
print_r ($array);
echo '<pre>';

foreach($array as $k1 => $v1) {


		foreach ($v1 as $k => $v) {
				echo $k .'=>'. $v .'<br>';
		}
}

/* SWITCH операция
foreach (array( 'a', 'b', 'c') as $item) {
switch($item) {
	case 'a':
		echo 'буква а';
		break;
	case 'b': 
		echo 'буква b';
		break;
		default: echo 'буква по дефолту';
			}
}
*/

//Обновляем запись
$update = "UPDATE table1 SET `C_NO` = 777 WHERE id = 1";
$q_update = mysql_query($update);


//Добавляем столбец
$add = "ALTER TABLE table1 ADD COLUMN `date` datetime ";
$q_add = mysql_query($add);

//Удаляем столбец
$delete = "ALTER TABLE table1 DROP column `date`";
//$q_delete = mysql_query($delete);



$date = date('d.m.Y G:i:s');
echo $id, '-',$date, '<br>';


?>
