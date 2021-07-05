<template>
    <div>
        <section id="features" v-bind:style="{ backgroundImage: 'url(' + bg + ')'  }">
                    <div class="DAlogo" id="logo1">
                        <h1 class="DAlogo"><img id="centerlogo" :src="logo"></h1>
                        <form action="booknow.php" method="get">
                        <button class="DAlogo btn btn-outline-light btn-lg" type="submit">
                        ASK FOR A QUOTE
                        </button>
                        </form>
                    </div>   
        </section>
        <div id="promobar">
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                logo: 'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/DA_logo02.png?raw=true',
                bg:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/fixedbg04.jpg?raw=true',
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

#centerlogo{
  width:25%;
}

#promobar{
    background-color: black;
    min-height: 200px;
}
</style>