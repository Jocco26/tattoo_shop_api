<template>
    <div id="main_div" v-bind:style="{ backgroundImage: 'url(' + bg + ')'  }">
        <section class="container" id="features">
                    <div class="DAlogo" id="logo1">
                        <h1 class="DAlogo"><img id="centerlogo" :src="logo"></h1>
                        <form action="booknow.php" method="get">
                        <button class="DAlogo btn btn-outline-light btn-lg" type="submit">
                        ASK FOR A QUOTE
                        </button>
                        </form>
                    </div>   
        </section>

        <section id="ribbon">
            <div class="container" id="promobar">
                <div class="row">
                    <div class="col-md-9">
                        <p><b>Tattoo promo! -{{promo_amount}} off</b>, Applicable when you avail a tattoo with a minimum price of atleast 3k and maximum of 8k, strictly for appointments only.</p>
                    </div>
                    <div class="col-md-3">
                        <button>Book Now</button>
                    </div>
                </div>
            </div>
        </section>

        <div class="wrapper" id="home_vid">
            <h1>Come, Visit Us</h1>
            <video controls :src="video01" :poster="thumbnail"></video>
            <video controls :src="video02" :poster="thumbnail02"></video>
        </div>
        <div id="about_us">
            <div class="container">
                <div class="row flex-column-reverse flex-lg-row">
                    <div id="aboutus-txt" class="col-md-6">
                         <h2>About Us</h2>
                        <p>Don Antonio is young and growing tattoo brand opened in 2016 located in commonwealth avenu Quezon city aside from professional tattoo
                        we also offer professional body piercing service and we also sell high quality tattoo supplies for aspiring tattoo artist.</p>                    
                    </div>
                    <div id="aboutus-img" class="col-md-6">
                       <img :src="aboutus_pic"> 
                    </div>
                </div>
            </div>   
        </div>
        <section id="team">
            <div class="container">
                <h1><b>Follow Us On Social Media</b></h1>
                <div class="row">
                    <div class="col">
                        <a href="https://www.facebook.com/d.a.tattoo.2016">
                            <img :src="fb_icon" width="100px">
                            <br>
                        175k Followers
                        </a>                       
                    </div>
                    <div class="col">
                        <a href="https://www.instagram.com/da.tattoo/">
                            <img :src="ig_icon" width="70px">
                            <br>
                        10.8k Followers
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://www.youtube.com/channel/UC6o-JAYm3r4p3cn8qAk4Lbw">
                            <img :src="yt_icon" width="70px">
                            <br>
                        349 Subscribers
                        </a>
                    </div>
                </div>
                <div class="row ig_imgs">
                    <div class="col-3">
                        <a href=""><img :src="ig_pic01" alt=""></a>
                    </div>
                    <div class="col-3">
                        <a href=""><img :src="ig_pic02" alt=""></a>
                    </div>
                    <div class="col-3">
                        <a href=""><img :src="ig_pic03" alt=""></a>
                    </div>
                    <div class="col-3">
                        <a href=""><img :src="ig_pic04" alt=""></a>
                    </div>
                </div>
                <div class="row ig_imgs">
                    <div class="col-3">
                        <a href=""><img :src="ig_pic05" alt=""></a>
                    </div>
                    <div class="col-3">
                        <a href=""><img :src="ig_pic06" alt=""></a>
                    </div>
                    <div class="col-3">
                        <a href=""><img :src="ig_pic07" alt=""></a>
                    </div>
                    <div class="col-3">
                        <a href=""><img :src="ig_pic08" alt=""></a>
                    </div>
                </div>
                <div class="row ig_imgs">
                    <div class="col-3">
                        <a href=""><img :src="ig_pic09" alt=""></a>
                    </div>
                    <div class="col-3">
                        <a href=""><img :src="ig_pic10" alt=""></a>
                    </div>
                    <div class="col-3">
                        <a href=""><img :src="ig_pic11" alt=""></a>
                    </div>
                    <div class="col-3">
                        <a href=""><img :src="ig_pic12" alt=""></a>
                    </div>
                </div>  
            </div>
        </section>
        <section id="contact">
            <div class="container contact-us">
                <h1><b>Contact Us</b></h1>
                <div id="form-row" class="row">
                    <div class="col-md-6 col-sm-12">
                        <h6><b>BOOK AN APPOINMENT</b></h6>
                        <div class="form">
                            <form>
                            <div class="form-group row">
                                <div class="col-md-12">
                                <input type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                            </div>   
                            <div class="form-group row">
                                <div class="col-md-12">
                                <input type="text" class="form-control" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                <input type="number" class="form-control" id="cnum" placeholder="Contact number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                <input type="date" class="form-control" id="p_date" placeholder="Preferred Date">
                                </div>
                            </div>
                            <div>   
                                    <div  class="radio-div">
                                        <span>Service</span>
                                    </div>
                                        <div  class="radio-div">
                                        <input type="radio" id="t_service" name="light">
                                        <label class="text" for="t_service">Tattoo</label>
                                   </div>
                                    <div  class="radio-div"> 
                                        <input type="radio" id="t_service" name="light">
                                        <label class="text" for="p_service">Piercing</label>
                                    </div> 
                            </div>
                         
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Special Instruction"></textarea>
                            </div>
                            <button type="button" class="btn btn-dark">Sumbit</button>   
                            </form>
                        </div>
                    </div>
                    <div id="location" class="col-md-6 col-sm-12">
                        <h6><b>LOCATION</b></h6>
                        <p><iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2295.0233183703053!2d121.07651653973024!3d14.669910722188467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7ec83c708e9%3A0x17dc05be0cec2d85!2sDon%20Antonio%20Tattoo!5e0!3m2!1sen!2sph!4v1625864769409!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
                    </div>
                </div>
            </div>
        </section>
        
        <footer>
            <p class="text-center">Don Antonio Copyright ©:2021</p>
        </footer>
    </div>
    
</template>



<script>
    export default {
        data(){
            return{
                ig_pic01:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/ig_pic01.jpg?raw=true',
                ig_pic02:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/ig_pic02.jpg?raw=true',
                ig_pic03:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/ig_pic03.jpg?raw=true',
                ig_pic04:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/ig_pic04.jpg?raw=true',
                ig_pic05:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/ig_pic05.jpg?raw=true',
                ig_pic06:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/ig_pic06.jpg?raw=true',
                ig_pic07:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/ig_pic07.jpg?raw=true',
                ig_pic08:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/ig_pic08.jpg?raw=true',
                ig_pic09:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/ig_pic09.jpg?raw=true',
                ig_pic10:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/ig_pic10.jpg?raw=true',
                ig_pic11:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/ig_pic11.jpg?raw=true',
                ig_pic12:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/ig_pic12.png?raw=true',

                promo_amount: 20,
                fb_icon:'https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png',
                ig_icon:'http://assets.stickpng.com/images/580b57fcd9996e24bc43c521.png',
                yt_icon:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/yt_icon.png?raw=true',
                thumbnail:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/thumbnail01.JPG?raw=true',
                thumbnail02:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/p_thumbnail01.JPG?raw=true',
                video01:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/720p%20-%20For%20the%20Love%20of%20Tattoo%20-%20YouTube%20(convert-video-online.com).mp4?raw=true',
                video02:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/1080p%20-%20Piercing%20by%20Don%20Antonio%20-%20YouTube.webm?raw=true',
                aboutus_pic:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/aboutus_pic.JPG?raw=true',
                logo: 'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/DA_logo02.png?raw=true',
                bg:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/fixedbg04.jpg?raw=true',
                promo_pic:'https://github.com/Jocco26/tattoo_shop_api/blob/main/src/assets/imgs/tatpromo_txt.png?raw=true',
            }
        }
    }
</script>
<style>
#main_div{
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-position:center;
}

#features{
  min-height: 500px;
  padding-top: 60px;
}

.DAlogo{
    text-align:center;

  }

#centerlogo{
  width:25%;
}

#ribbon{
    background-color: black;
    padding-top: 60px;
    padding-bottom: 60px;
}

#promobar{
    background-color: black;
    font-family: 'OpenSans-Bold', sans-serif;
    font-weight: 500;
    color:white;
    font-size: 18px;    
}

#promobar button{
    background-color: #d87114;
    border: none;
    color: white;
    padding: 15px 32px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 8px;
    float: right;
}

#home_vid{
    font-family: 'OpenSans-Bold', sans-serif;
    text-align: center;
    padding-left: 50px;
    padding-right: 50px;
    padding-top:50px;
    background: rgb(251, 252, 251, 0.55)
}

#home_vid h1{
    margin-bottom: 50px;
}

#home_vid video{
    width: 90%;
    max-height: 90%;
    margin-bottom: 30px;
}

#about_us{
    background-color: white;
    padding-top:50px;
    padding-bottom:50px;
}

#about_us h2{
    margin-bottom: 20px;
    line-height: 3.125rem;
    color: #444;
}

#aboutus-txt p{
    font-size: 14px;
    line-height: 24px;
    letter-spacing: .2px;
}

#aboutus-img img{
    width: 100%;
}

#team{
    background-color: black;
    color: white;
    text-align: center;
    font-family: 'OpenSans-Bold', sans-serif;
    padding-top: 70px;
}

#team h1{
    margin-bottom: 30px;
}

#team a{
    color: #454545;
    text-decoration: none;
    font-size: 14px;
}

.ig_imgs img{
    margin-top: 20px;
    margin-bottom: 20px;
    width: 100%;
}

.contact-us{
    font-family: 'OpenSans-Bold', sans-serif;
    color: white;
    text-align: center;
    margin-bottom: 50px;
}

.contact-us h1{
    margin:50px;
}

.form{
    width: 100%;
    background-color: white;
    padding-top: 100px;
    padding-left: 50px;
    padding-right: 50px;
    padding-bottom: 30px;
    color: black;
}

.form input{
    margin-top: 20px;
    margin-bottom: 20px;
}

.radio-div{
    text-align: left;
    
}

.form button{
    margin-top: 20px;
}



#map{
    width: 300px;
    height: 300px;
}

footer{
    padding: 30px;
    color: white;
    background-color: black;
}








@media all and (max-width:750px){
    #centerlogo{
        width: 50%;
    }
    
    #promobar{
        text-align: center;
    }

    #promobar button{
        float: none;
    }

    #location{
    padding-top: 50px;
}
}





</style>