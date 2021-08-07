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
        <div id="welcomeModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-body">
                    <h1><b>WELCOME<br>TO MY SITE</b></h1>
                    <p>This website is a sample project created by<br> <a href="https://github.com/Jocco26"><b>Julius Ceasar A. Mag-abo</b></a></p>
                </div>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Okay</button>
                </div>
            </div>
            </div>
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
        mounted(){
            this.openModal();
        },
        methods:{
            openModal(){
                $('#welcomeModal').modal('show')
            }
        }
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



#welcomeModal{
    text-align: center;
    color: white;
}

.modal-content{
    background-color: #7A7771;
    border:orange 2px solid;
}

#welcomeModal h1{
    color: orange;
}

.modal-body a{
    color:white;
}

#welcomeModal button{
    margin: auto;
    margin-bottom: 30px;
    padding-left: 30px;
    padding-right: 30px;
    background-color: orange;
    color: white;
    border: none;
}

#welcomeModal button:hover{
    background-color: black;
}




</style>