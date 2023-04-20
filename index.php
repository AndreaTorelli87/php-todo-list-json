<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <title>ToDo php</title>
</head>

<body>
   <div id="app">
      <div class="container d-flex justify-content-center">
         <div class="w-50 p-5 m-5">
            <h1 class="display-2 fw-bold text-danger text-center">ToDo List php</h1>
            <ul class="list-group py-5">
               <li v-for="todo in todoList" class="list-group-item display-6 fw-bold text-warning">{{ todo }}</li>
            </ul>
            <div class="input-group d-flex justify-content-center">
               <input type="text" name="input" v-model="todo" @keyup.enter="addTodo" placeholder="Scrivi qualcosa da fare...">
               <button class="btn btn-outline-success" @click="addTodo">Aggiungi Todo</button>
            </div>         
         </div>
      </div>
   </div>
   <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src='main.js'></script>
</body>

</html>