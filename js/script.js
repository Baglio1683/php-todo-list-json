  const { createApp } = Vue ; 

  createApp({
    data() {
      return {
        NewTodo : "", 
        todoList: [] 
      }
    },

    created() {
        axios.get("server.php").then((resp) => {
          this.todoList = resp.data;
        });
      },

      methods: {

        addTodo() {

          const data = {  newTodo: this.NewTodo };           
          axios.
          post("server.php", data, {
            headers: { "Content-Type": "multipart/form-data" },
          })
          .then((resp) => {
            this.todoList = resp.data;
            this.NewTodo = "";
          });
        },         
    }, 

  }).mount('#app')
