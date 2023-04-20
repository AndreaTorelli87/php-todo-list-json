<?php

$todoList = [
   "HTML",
   "CSS",
   "Responsive",
   "JS",
   "Vue",
   "php"
];

if (isset($_POST["input"])) {
   $todoList[] = $_POST["input"];
}

header("Content-Type: application/json");
echo json_encode($todoList);