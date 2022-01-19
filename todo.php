<?php include "tasks.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To DO</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body>
<div id="app">
<div class="container">
    <?php foreach ($tasks as $task){ ?>
    <div class="task
<?php if($task['completed'] == 1){
   echo  'completed';
    } ?>
    ">
        <h1><?= $task['name'] ?></h1>
        <p><?= $task['content'] ?></p>
        <div class="icons">
            <a href="complete.php?id=<?= $task['id'] ?>&completed=<?= $task['completed'] ?>">
             <i class="fas fa-check"></i>
            </a>
            <i class="fas fa-edit"></i>
            <a href="delete.php?id=<?= $task['id'] ?>">
             <i class="fas fa-trash"></i>
            </a>
        </div>
    </div>
    <?php } ?>
</div>
<div class="createPopUp" v-if="createActive">
    <div class="createContent">
        <h2> Create New Task</h2>
        <form method="post" action="insert.php">
            <label>Task Name</label>
            <input type="text" name="name">
            <label>Content</label>
            <textarea name="content">

            </textarea>
            <button class="submit" type="submit">Submit</button>
        </form>
        <button class="close" @click="createActive =false">x</button>
    </div>
</div>
<button v-on:click="createActive = true">Create</button>

</div>

<script>
    var app=new Vue({
        el:'#app',
        data:{
            createActive:false
        }
    })
</script>

</body>
</html>