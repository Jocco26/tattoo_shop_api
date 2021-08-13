<template>
    <div>
        <div id="brand-banner">
          
        </div>
        <div class="serv">
          <ul>
            <li v-for="product in products" :key="product.id">
              <div v-if="product.brand_id == brand_id">
                <a href=""><img  class="brand-img" :src="'/storage/images/products/' + product.image" alt="brand image"></a>
                <p><b>{{product.name}}</b></p>
              </div>
            </li>
          </ul>
        </div>
    </div>
</template>
<script>

export default{
  props:['brand_id'],
    data(){
      return{
        img:'../storage/images/products/',
        brands:[],
        products:[]
    }
  },
  mounted(){
    this.loadproducts();
  },
  methods:{
    loadproducts(){
      fetch(`/api/product/${this.brand_id}`)
        .then(res => res.json())
        .then(res => {
            this.products = res.data;
            console.log(this.products);
            })
        .catch(err => console.log(err));
    }
  }
}

</script>
<style>
#brand-banner{
  min-height: 190px;
  background-repeat: no-repeat;
  background-position:center;
  background-size: cover;
  background-image: url('/storage/images/needle-cartridges-banner.png');
}

.brand-img{
  width: 90%;
  margin: 10px;
  
}
.serv ul {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  text-align: center;
}

.serv ul li {
  list-style: none;
  flex: 0 0 33.333333%;
}
</style>