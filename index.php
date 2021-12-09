    <?php include __DIR__ .  '@/assets/particles/head.php'; ?>
    <body>
    <header id=site_header>
        <div class="p-2">
            <?php include __DIR__ .  '@/assets/particles/logo.php'; ?>
            
        </div>
    </header>
    <!-- /#site_header -->
    <main id="site_main">
        <div id="app" class="container-fluid">
           <div class="row gx-5 my-5 d-flex justify-content-center" >
                <div class="col-md-2 text-center card_disk my-3" v-for="disk in disks" :key="disk.title">
            <div class="card rounded-0 p-2">
            <img :src="disk.poster" :alt="disk.author" class="img-fluid" />
            <h1 class="title mt-3">{{ disk.title }}</h1>
            <div class="text mt-4">
                <p>{{ disk.author }}</p>
                <p>{{ disk.year }}</p>
            </div>
            </div>
      </div>
    </div>
        </div>
        
    </main>
    <!-- /#site_main -->      
            

    <!-- Axios-link cdn -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js' integrity='sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    
    
    <!-- Vue-link cdn -->
    <script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- link main.js -->
    <script src="./assets/js/main.js"></script>
  </body>
</html>