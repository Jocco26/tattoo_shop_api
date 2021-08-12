<template>
    <div>
        <div id="brand-banner">

        </div>
        <div class="serv">
          <ul>
            <li v-for="brand in brands" :key="brand.id">
              <div v-if="brand.product_category_id == brand_id">
                <a href=""><img  class="brand-img" :src="'/storage/images/brands/' + brand.image" alt="brand image"></a>
                <a href=""><label for="">{{brand.name}}</label></a>
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
<style>
#brand-banner{
  min-height: 180px;
  background-repeat: no-repeat;
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