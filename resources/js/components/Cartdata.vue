<template>
    <Cart message="this.mess"/>
</template>
<script>
import Cart from "./Cart.vue";
export default{
    props:['message'],
     components:{
      Cart
  },
}
</script>

