<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<div id="app">
    {{ info }}
   <!-- <ul>
        <li v-for="task in info.data">
            {{ task.name }}
        </li>
    </ul>-->
</div>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!',
            info: null
        },
        mounted () {
            // axios
            //     .get('tasks.php')
            //     .then(response => (this.info = response))
            const article = { title: 'Axios POST Request Example' };
            axios
                .post('posttest.php',article)
                .then(response =>this.info = response)
        }
    })
</script>

</body>
</html>