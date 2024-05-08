<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dischi JSON</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    
    
    <div id="app">
        
        <div class="container">
            <div class="row g-4 py-3">
                <div class="col-4" v-for="disc in discs">
                    <div class="card card-color ">
                        <div class="card-body text-center ">
                            <img :src="`${disc.poster}`" alt="">
                            <h3>{{disc.title}}</h3>
                            <p>{{disc.author}}</p>
                            <h4>{{disc.year}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    
    
    <script src="./js/script.js"></script>
   
</body>

</html>