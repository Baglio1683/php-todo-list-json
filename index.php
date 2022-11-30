<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Index-php</title>
</head>

<body>

    <div id="app">
        <div class="container">

            <h1 class="col-12 text_center">Lista ToDo</h1>

            <ul>
                <li v-for="todo in todoList">{{ todo.text }}</li>
            </ul>

            <div class="col-12 text_center">
                <form action="">
                    <label for="">Inserisci in Lista</label>
                    <input type="text" v-model="NewTodo">
                    <button @click="addTodo">Invio</button>
                </form>
            </div>

        </div>

    </div>

    <script src="js/script.js"></script>
</body>

</html>