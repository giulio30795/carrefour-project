<template>
    <div class="pre-footer">
        <div class="pb-5">
            <h2 class="section-title pb-3">Carrefour per te - I nostri servizi</h2>
            <div class="row">
                <div class="col-12 col-lg-6 footer-app-wrapper">
                    <div class="row">
                        <div class="col-4 col-lg-5">
                            <img class="w-100" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dwf2f68bf3/app.png" alt="">
                        </div>
                        <div class="col-8 col-lg-7 d-flex flex-lg-column align-items-center justify-content-center">
                            <div class="footer-app-text">
                                Dal 4 al 18 febbraio scarica la app Carrefour e prova a vincere la tua spesa!
                            </div>
                            <div class="footer-app-buttons d-flex flex-lg-row w-100
                            mt-2">
                                <div class="btn btn-dark me-2 d-flex">
                                    <i class="fab fa-google-pay me-2"></i>
                                    <span>Google Play</span>
                                </div>
                                <div class="btn btn-dark me-2 d-flex">
                                    <i class="fab fa-app-store-ios me-2"></i>
                                    <span>App Store</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carrefour_now">
                    <div class="footer-service-item d-flex align-items-center p-3">
                        <img src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dw48cbac27/carrefour_now.svg"
                        alt=""
                        class="me-3 d-none d-lg-inline-block footer-service-item__icon">
                        <div class="footer-service-item-content">
                            <div class="footer-service-item__title">
                                Carrefour NOW
                            </div>
                            <div class="footer-service-item-subtitle">
                                Il nuovo servizio di consegna veloce
                            </div>
                        </div>
                    </div>
                    <div class="footer-service-item d-flex align-items-center p-3">
                        <img src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dw9a8aa761/franchising.svg"
                        alt=""
                        class="me-3 d-none d-lg-inline-block footer-service-item__icon">
                        <div class="footer-service-item-content">
                            <div class="footer-service-item__title">
                                Franchising Carrefour
                            </div>
                            <div class="footer-service-item-subtitle">
                                Apri un negozio insieme a noi
                            </div>
                        </div>
                    </div>
                    <div class="footer-service-item d-flex align-items-center p-3">
                        <img src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dw27e3d668/donne_in_gravidanza.svg"
                        alt=""
                        class="me-3 d-none d-lg-inline-block footer-service-item__icon">
                        <div class="footer-service-item-content">
                            <div class="footer-service-item__title">
                                Donne in gravidanza e neogenitori
                            </div>
                            <div class="footer-service-item-subtitle">
                                Consegna gratuita per spesa online di almeno 15€
                            </div>
                        </div>
                    </div>
                    <div class="footer-service-item d-flex align-items-center p-3">
                        <img src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dw22720637/over_60.svg"
                        alt=""
                        class="me-3 d-none d-lg-inline-block footer-service-item__icon">
                        <div class="footer-service-item-content">
                            <div class="footer-service-item__title">
                                Over 60
                            </div>
                            <div class="footer-service-item-subtitle">
                                Consegna gratuita per spesa online di almeno 15€
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row py-3 content-asset">
            <div class="wrapper d-flex p-0">
                <div class="asset col-6 col-lg-3 d-flex align-items-center py-3">
                    <img class="me-3" alt="" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dwa3e49b4c/financialservices.svg">
                    <div class="prefooter-content">CARTA CARREFOUR FINDOMESTIC</div>
                </div>
                <div class="asset col-6 col-lg-3 d-flex align-items-center py-3">
                    <img class="me-3" alt="" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dw40efc902/ic_GiftCard_small_1.svg">
                    <div class="prefooter-content">GIFT CARD CARREFOUR</div>
                </div>
                <div class="asset col-6 col-lg-3 d-flex align-items-center py-3">
                    <img class="me-3" alt="" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dwf20ee960/salute.svg" style="width:30px;height:30px;">
                    <div class="prefooter-content">CARREFOUR SALUTE</div>
                </div>
                <div class="asset col-6 col-lg-3 d-flex align-items-center py-3">
                    <img class="me-3" alt="" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dw77b055e6/distributore.svg">
                    <div class="prefooter-content">CARREFOUR CARBURANTI</div>
                </div>
                
            </div>
            
        </div>
    </div>
</template>

<script>
export default {
    name: 'PreFooter'
}
</script>

<style lang='scss' scoped>
@import '../../sass/app.scss';

.pre-footer {
    width: 100%;
    margin-inline: auto;
    .pb-5 {
        width: 80%;
        margin: 2rem auto;
    }
}

    .section-title {
        color: $primary-400;
    }

    .footer-app-wrapper {
        background: linear-gradient(1turn,rgba(9,112,230,.2),
        rgba(211,227,245,0) 182.95%);
        border-radius: 1rem;
        .row {
            align-items: center;
            .footer-app-text {
            color: $primary-400;
            font-size: 1.4rem;
            line-height: 1.25;
            font-weight: bold;
            }
            .footer-app-buttons {
                .btn {
                    padding: .5rem .8rem;
                    align-items: center;
                    text-align: left;
                    i {
                        font-size: 2rem;
                    }
                }
            }
        }
    
        

        
    }

    .carrefour_now {
        width: 50%;
        display: grid;
        gap: 5% 1rem;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, 1fr);
        .footer-service-item {
            border-radius: .5rem;
            border: 2px solid rgba($primary-100, .3);
            background-color: $clear-100;
            &__icon {
                width: 60px;
            }
            &__title {
                color: $primary-400;
                font-size: 1rem;
                font-weight: bold;
            }
        }
    }

    .content-asset {
        background: $clear-500;
        .wrapper {
            width: 80%;
            margin-inline: auto;
            justify-content: space-between;
            .asset {
                width: calc(100% / 4);
                justify-content: center;
                transition: all .3s ease;
                cursor: pointer;
                &:hover {
                    transform: translateY(-3px);
                }
                img {
                    height: 90%;
                }
                .prefooter-content {
                font-weight: 600;
                color: $primary-400;
                font-size: .9rem;
                }
            }
        }
    }

</style>