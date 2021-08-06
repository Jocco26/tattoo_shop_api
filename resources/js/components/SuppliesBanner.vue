<template>
<div>
  <div id="spaces">
    <div class="container">
      <div class="row">
        <div class="col-12">
         <nav id="awit02" class="navbar navbar-expand-lg navbar-dark bg-black">
            <a class="navbar-brand" href="#"><img :src="'../storage/images/newlogo.png'"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" 
            aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbar">
              <ul class="navbar-nav">
                <li class="nav-item dropdown menu-area" v-for="category in categories" v-bind:key="category.id">
                 
                  <a class="nav-link dropdown-toggle" href="#" id="mega-one"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{category.name}}
                  </a>
 
                  <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
                    <div class="row">
                      <div class="col-sm-6 col-lg-3">
                        <div v-for="category02 in categories02" v-bind:key="category02.id">
                            <a v-if="category02.supply_category_id == category.id" href="#" class="dropdown-item" @click="Showbrand(brand.id)">{{ category02.name }}</a>
                        </div>
                      </div>
                    </div>  
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
</template>
<script>
import axios from 'axios';

  export default{
    data(){
      return{
        categories:[],
        categories02:[]
      }
    },
    created(){
        this.SuppliesCategory();
        this.ProductCategory();
    },
    methods:{
      SuppliesCategory(){
        fetch('supplies/show')
        .then(res => res.json())
        .then(res => {
            this.categories = res.data;
            })
        .catch(err => console.log(err));
      },
      ProductCategory(){
        fetch('supplies/show02')
        .then(res => res.json())
        .then(res => {
            this.categories02 = res.data;
            })
        .catch(err => console.log(err));
      },
      Showbrand(id){
        window.location.href = `/supplies/brands?q=${id}`;
      }
    }
  }
</script>
<style>

  body{
    margin: 0;
    padding: 0;
}


#spaces{
  background-color: black;
}




.menu-area{
    position: static;
}
.mega-area{
    position: absolute;
    padding-left:100px;
    padding-right:100px;
    width: 100%;
    left: 0;
    right: 0;
    top: 64px;
  
}
.dropdown-item{
    padding: 5px 0;
}



.navbar-nav li:hover .dropdown-menu {
    display: block;
    margin-top: 0;
 }

</style>