<?php

$string = file_get_contents("database.json");

if (file_exists("database.json")) {
   $todoList = json_decode($string, true);
} else {
   $todoList = [
      [
         "cosa" => "HTML",
         "done" => true
      ],
      [
         "cosa" => "CSS",
         "done" => true
      ],
      [
         "cosa" => "Responsive",
         "done" => true
      ],
      [
         "cosa" => "JS",
         "done" => true
      ],
      [
         "cosa" => "Vue",
         "done" => true
      ],
      [
         "cosa" => "php",
         "done" => false
      ]
   ];
}

if (isset($_POST["input"])) {

   $todoList[] = ["cosa" => $_POST["input"], "done" => false];
   file_put_contents("database.json", json_encode($todoList));
}

header("Content-Type: application/json");
echo json_encode($todoList);



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