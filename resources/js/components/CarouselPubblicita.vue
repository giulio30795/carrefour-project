<template>
    <section class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" @click="setActive(0)" :class="{active: currentActive == 0}" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" @click="setActive(1)" :class="{active: currentActive == 1}" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" @click="setActive(2)" :class="{active: currentActive == 2}" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item"
                :class="{active: currentActive == 0}">
                     <img src="https://www.carrefour.it/on/demandware.static/-/Sites/default/dwe593ac51/banner/main-carousel/food/banner_piccolo/scJohnson/Glade_PromoCard_LoveTheSign_WEB_993x275_B0222.jpg" class="d-block w-100" alt="img"> 
                </div>
                <div class="carousel-item"
                :class="{active: currentActive == 1}">
                    <img src="https://www.carrefour.it/on/demandware.static/-/Sites/default/dw75186023/banner/main-carousel/food/banner_piccolo/danome-actimel/E_CRF_ACTIMEL_FEB_HP_Desktop_993x275px.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item"
                :class="{active: currentActive == 2}">
                    <img src="https://www.carrefour.it/on/demandware.static/-/Sites/default/dwff7e212c/banner/main-carousel/food/banner_piccolo/risparmio-di-qualita/Bannerpiccolo_des_02.jpg" class="d-block w-100" alt="img">
                </div>
            </div>
        </div>

    </section>
    <!-- <div class="hero_ad_banner">
        <img :src="slides[activeSlide]" alt="" >
    </div> -->
</template>

<script>
export default {
    name: 'CarouselPubblicita',
    created() {
        // this.autoSlide();
    },
    methods: {
        // autoSlide() {
        //     setInterval(() => {
        //         if(this.activeSlide < this.slides.length - 1) {
        //         this.activeSlide++;
        //     } else if (this.activeSlide == this.slides.length - 1) {
        //         this.activeSlide = 0;
        //     }
        //     } ,5000);
        // },
        setActive(i) {
            this.currentActive = i;
        },
    },
    data() {
        return {
            currentActive: 0,
            // activeSlide: 0,
            // slides: [
            //     'https://www.carrefour.it/on/demandware.static/-/Sites/default/dwe593ac51/banner/main-carousel/food/banner_piccolo/scJohnson/Glade_PromoCard_LoveTheSign_WEB_993x275_B0222.jpg',
            //     'https://www.carrefour.it/on/demandware.static/-/Sites/default/dw75186023/banner/main-carousel/food/banner_piccolo/danome-actimel/E_CRF_ACTIMEL_FEB_HP_Desktop_993x275px.jpg',
            //     'https://www.carrefour.it/on/demandware.static/-/Sites/default/dwff7e212c/banner/main-carousel/food/banner_piccolo/risparmio-di-qualita/Bannerpiccolo_des_02.jpg',
            // ],
        }
    },
}
</script>

<style lang="scss" scoped>
@import '../../sass/app.scss';

.hero_ad_banner {
    height: 280px;
    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
}

</style>