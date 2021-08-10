<template>
    <div>
      <div class="container">
          <div v-for="brand in brands" :key="brand.id" class="card" style="width: 18rem;">
          <img class="card-img-top" :src="'/storage/images/brands/' + brand.image" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">{{brand.name}}</p>
          </div>
        </div>
      </div>
    </div>
</template>
<script>

export default{
  props:['brand_id'],
    data(){
      return{
        img:'../storage/images/brands/',
        brands:[]
    }
  },
  mounted(){
    this.loadbrand();
  },
  methods:{
    loadbrand(){
      fetch('/api/brands')
        .then(res => res.json())
        .then(res => {
            this.brands = res.data;
            console.log(this.brands);
            })
        .catch(err => console.log(err));
    }
  }
}

</script>