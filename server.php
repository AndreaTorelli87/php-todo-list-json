<?php


$string = file_get_contents("database.json");
$todoList = json_decode($string, true);

$todoListStatico = [
   [
      "cosa" => "HTML",
      "done" => true
   ],[
      "cosa" => "CSS",
      "done" => true
   ],[
      "cosa" => "Responsive",
      "done" => true
   ],[
      "cosa" => "JS",
      "done" => true
   ],[
      "cosa" => "Vue",
      "done" => true
   ],[
      "cosa" => "php",
      "done" => false
   ]
];


   $json_string = json_encode($todoListStatico);
   file_put_contents("database.json", $json_string);


if (isset($_POST["input"])) {
   $todoListStatico[] = ["cosa" => $_POST["input"],"done" => false];


}

header("Content-Type: application/json");
echo json_encode($todoListStatico);



// [
//    [
//       "cosa" => "HTML",
//       "done" => true
//    ],[
//       "cosa" => "CSS",
//       "done" => true
//    ],[
//       "cosa" => "Responsive",
//       "done" => true
//    ],[
//       "cosa" => "JS",
//       "done" => true
//    ],[
//       "cosa" => "Vue",
//       "done" => true
//    ],[
//       "cosa" => "php",
//       "done" => false
//    ]
// ];