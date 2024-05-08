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

<body class="p-relative">


    <!-- <img src="https://cdn.iconscout.com/icon/free/png-256/free-spotify-3166423-2641594.png?f=webp" alt=""> -->
    <div id="app" >


        <div class="container ">
            <ul class="row g-4 py-3 list-unstyled">
                <li class="col-4" v-for="(disc,i) in discs" :key='i' @click='modal(i)'>
                    <div class="card card-color h-100">
                        <div class="card-body text-center ">
                            <img :src="`${disc.poster}`" alt="">
                            <h3>{{disc.title}}</h3>
                            <p>{{disc.author}}</p>
                            <h4>{{disc.year}}</h4>
                        </div>
                    </div>



                </li>
            </ul>



        </div>
        <div :class="dNone === true ? 'my-modal my-d-flex':'my-modal'">

            <span class="close-my-modal" @click='closeModal'> &cross;</span>
            <div class="col-4 align-self-center">
                <div class="card card-color h-100">
                    <div class="card-body text-center ">
                        <img :src="`${discs[currentIndex].poster}`" alt="">
                        <h3>{{discs[currentIndex].title}}</h3>
                        <p>{{discs[currentIndex].author}}</p>
                        <h4>{{discs[currentIndex].year}}</h4>
                    </div>
                </div>
            </div>

        </div>



    </div>



    <script src="./js/script.js"></script>

</body>

</html>