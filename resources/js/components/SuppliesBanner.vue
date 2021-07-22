<template>
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img :src="'../storage/images/newlogo.png'"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
                data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
    </button>
  
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown" v-for="category in categories" v-bind:key="category.id">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{category.name}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    
  </div>
</nav>
</div>
</template>
<script>
import axios from 'axios';

  export default{
    data(){
      return{
        categories:[]
      }
    },
    created(){
        this.SuppliesCategory();
    },
    methods:{
      SuppliesCategory(){
        fetch('supplies/show')
        .then(res => res.json())
        .then(res => {
            this.categories = res.data;
            })
        .catch(err => console.log(err));
      }
    }
  }
</script>