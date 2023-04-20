const { createApp } = Vue

createApp({
   data() {
      return {
         todoList: [],
         todo: ""
      }
   },
   methods: {
      importaLista() {
         axios.get("server.php")
            .then(response => this.todoList = response.data)
      },
      addTodo() {
         const data = {
            input: this.todo
         };

         axios.post("server.php", data,
            { headers: { "Content-Type": "multipart/form-data" }}
         ).then(response => {
            this.todoList = response.data;
            this.todo = "";
         });
      }
   },
   mounted() {
      this.importaLista()
   }
}).mount('#app')