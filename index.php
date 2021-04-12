<?php 

$filename = "my-user-data.csv";

header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=$filename");


$csv = fopen("php://output","w");

$columns = ["Name","Email","Phone","Age"];
fputcsv($csv,$columns);

$columns = [" "," "," "," "];
fputcsv($csv,$columns);



$users = [

	0=> [

		"name" => "user1",
		"Email" => "user1@gmail.com",
		"0156xxxx",
		"23"
	],
	1=> [

		"name" => "user2",
		"Email" => "user2@gmail.com",
		"01546xxxx",
		"30"
	],

];




foreach ($users as $user) {
	fputcsv($csv,$user);
}



fclose($csv);





?>