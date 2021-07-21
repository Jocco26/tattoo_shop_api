<template>
  <div>
    <nav class="navbar navbar-expand-md navbar-dark bg-black sticky-top" >
        <div class="container">
            <a class="navbar-brand" href="#"><img :src="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" 
                data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">TATTOO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PIERCING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" :href="url">SUPPLIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">LOCATION</a>
                    </li>
                    
                </ul>
            </div>



        </div>
</nav>
    </div>
  
</template>

<script>
    export default {
        data(){
            return{
                url:'api/supplies',
                message: 'hellow',
                image: 'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/newlogo.png?raw=true',  
            }
        },
    }
</script>
<style>
html{
    scroll-behavior: smooth;
}

html, body{
  
  height:100%;
  width:100%;
  font-family:'Poppins', sans-serif;
  color:#222;
}

.navbar{
  background-color: black;
}

ul {
  width: 70%;
  margin: auto;
}

.navbar-nav li{
  padding-right:20px;
}
</style>