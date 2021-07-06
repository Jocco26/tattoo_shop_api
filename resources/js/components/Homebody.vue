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

        <div class="container-fluid" id="promobar">
            <div class="row">
                <div class="col-9">
                    <p><b>Tattoo promo! -{{promo_amount}} off</b>, Applicable when you avail a tattoo with a minimum price of atleast 3k and maximum of 8k, strictly for appointments only.</p>
                </div>
                <div class="col-3">
                    <button>Book Now</button>
                </div>
            </div>
        </div>

        <div class="wrapper" id="home_vid">
            <h1>See Us In Action</h1>
            <video controls :src="video"></video>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                promo_amount: 20,
                video:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/720p%20-%20For%20the%20Love%20of%20Tattoo%20-%20YouTube%20(convert-video-online.com).mp4?raw=true',
                logo: 'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/DA_logo02.png?raw=true',
                bg:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/fixedbg04.jpg?raw=true',
                promo_pic:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/tatpromo_txt.png?raw=true',
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
    font-family: 'Russo One', sans-serif;
    font-weight: 500;
    color:white;
    padding-top: 25px;
    padding-bottom: 25px;
    font-size: 18px;    
}

#promobar button{
    background-color: #d87114;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    float: right;
    border-radius: 8px;
}

#home_vid{
    font-family: 'Russo One', sans-serif;
    text-align: center;
    padding-left: 50px;
    padding-right: 50px;
}

#home_vid h1{
    margin: 50px;
}

#home_vid video{
    width: 90%;
    max-height: 90%;
}





</style>