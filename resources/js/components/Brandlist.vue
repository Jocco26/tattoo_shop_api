<template>
    <div>
        <div id="brand-banner">

        </div>
        <div class="serv">
          <ul>
            <li v-for="brand in brands" :key="brand.id">
                <a :href="'/api/products/'+brand.id"><img  class="brand-img" :src="'/storage/images/brands/' + brand.image" alt="brand image"></a>
                <a :href="'/api/products/'+brand.id">{{brand.name}}</a>
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
      fetch(`/api/brands/${this.brand_id}`)
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