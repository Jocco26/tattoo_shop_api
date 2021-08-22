<template>
    <div id="product-details" class="container">
        <div v-for="detail in details" :key="detail.id" class="row">
            <div class="col-md-6">
                <div class="img-magnifier-container">
                    <img id="myimage" :src="'/storage/images/products/' + detail.image">
                </div>
            </div>
            <div class="col-md-6">
                <p id="product-name"><b>{{detail.name}}</b></p>
                <p id="product-price"><b>₱{{detail.price}}</b></p>
            <div class="quantity buttons_added">
                
                <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="qty-input" size="4" pattern="" inputmode="">
                <button type="button" class="btn btn-dark btn-lg" v-on:click="cart.push(item)">add to cart</button>
            </div>
            </div>         
        </div>
    </div>
</template>
<script>
export default{
    props:['product_id'],
    data(){
      return{
          image:'',
        details:[]
    }
  },
      created(){
    this.loadbrand();
  },
  methods:{
    loadbrand(){
      fetch(`/api/product/details/${this.product_id}`)
        .then(res => res.json())
        .then(res => {
            this.details = res.data; 
            console.log(this.details)  
            })
        .catch(err => console.log(err));
    },
    addproduct(){
        
    }
  }
  
}
</script>
<style>
    #product-details{
        margin-top: 75px;
    }

    #myimage{
        width:100%;
    }

    * {box-sizing: border-box;}

    .img-magnifier-container {
    position: relative;
    }

    .img-magnifier-glass {
    position: absolute;
    border: 3px solid #000;
    border-radius: 50%;
    cursor: none;
    /*Set the size of the magnifier glass:*/
    width: 100px;
    height: 100px;
    }

    #product-name{
        font-size: 50px;
    }

    #product-price{
        font-size: 30px;
    }

    .qty-input{
        width: 8%;
        font-size: 20px;
    }
</style>
