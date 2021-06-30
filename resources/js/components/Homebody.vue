<template>
    <section id="features" v-bind:style="{ backgroundImage: 'bg' }">
                <div class="DAlogo" id="logo1">
                    <h1 class="DAlogo"><img :src="logo"></h1>
                    <form action="booknow.php" method="get">
                    <button class="DAlogo btn btn-outline-light btn-lg" type="submit">
                    ASK FOR A QUOTE
                    </button>
                    </form>
                </div>   
    </section>
</template>
<script>
    export default {
        data(){
            return{
                logo: 'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/DA.png?raw=true',
                bg:''
            }
        }
    }
</script>
<style>
#features{
  background-size: cover;
  background-attachment: fixed;
  min-height: 500px;
}

.DAlogo{
    text-align:center;
  }
</style>