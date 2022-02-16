<template>
    <div class="pre-footer">
        <div class="container-lg pb-5">
            <h2 class="section-title pb-3">Carrefour per te - I nostri servizi</h2>
            <div class="row">
                <div class="col-12 col-lg-6 footer-app-wrapper px-3 py-5 mb-3">
                    <div class="row">
                        <div class="col-4 col-lg-5">
                            <img class="w-100" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dwf2f68bf3/app.png" alt="">
                        </div>
                        <div class="col-8 col-lg-7 d-flex flex-lg-column align-items-center justify-content-center">
                            <div class="footer-app-text">
                                Dal 4 al 18 febbraio scarica la app Carrefour e prova a vincere la tua spesa!
                            </div>
                            <div class="footer-app-buttons d-flex flex-column flex-lg-row">
                                <i class="fab fa-google-pay pe-3 cursor-pointer"></i>
                                <i class="fab fa-app-store-ios cursor-pointer"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row g-3">
                        <div class="col-12 col-lg-6">
                            <div class="d-flex align-items-center footer-service-item p-3 cursor-pointer">
                                <img class="me-3 d-none d-lg-inline-block" alt="Carrefour NOW" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dw48cbac27/carrefour_now.svg" title="Carrefour NOW" width="45" height="42" style="width: 45px; height:42px;">
                                <div class="footer-service-item-content">
                                    <div class="footer-service-item-title">Carrefour NOW</div>
                                    <div class="footer-service-item-subtitle">Il nuovo servizio di consegna veloce</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="d-flex align-items-center footer-service-item p-3 cursor-pointer">
                                <img class="me-3 d-none d-lg-inline-block" alt="Franchising Carrefour" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dw9a8aa761/franchising.svg" title="Franchising Carrefour" width="45" height="42">
                                <div class="footer-service-item-content">
                                    <div class="footer-service-item-title">Franchising Carrefour</div>
                                    <div class="footer-service-item-subtitle">Apri un negozio insieme a noi</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="d-flex align-items-center footer-service-item px-3 cursor-pointer">
                                <img class="me-3 d-none d-lg-inline-block" alt="Donne in gravidanza e neogenitori" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dw27e3d668/donne_in_gravidanza.svg" title="Donne in gravidanza e neogenitori" width="45" height="42" style="width: 45px; height:42px;">
                                <div class="footer-service-item-content">
                                    <div class="footer-service-item-title">Donne in gravidanza e neogenitori</div>
                                    <div class="footer-service-item-subtitle">Consegna gratuita per spesa online di almeno 15€</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 h-100">
                            <div class="d-flex align-items-center footer-service-item p-3 cursor-pointer">
                                <img class="me-3 d-none d-lg-inline-block" alt="Over 60" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dw22720637/over_60.svg" title="Over 60" width="45" height="42" style="width: 45px; height:42px;">
                                <div class="footer-service-item-content">
                                    <div class="footer-service-item-title">Over 60</div>
                                    <div class="footer-service-item-subtitle">Consegna gratuita per spesa online di almeno 15€</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-3 content-asset mx-0">
            <div class="col-6 col-lg-3 d-flex align-items-center px-3 py-4 cursor-pointer prefooter-content">
                <img class="me-3" alt="" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dw40efc902/ic_GiftCard_small_1.svg">
                <div>GIFT CARD CARREFOUR</div>
            </div>
            <div class="col-6 col-lg-3 d-flex align-items-center px-3 py-4 cursor-pointer prefooter-content">
                <img class="me-3" alt="" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dwf20ee960/salute.svg" style="width:30px;height:30px;">
                <div>CARREFOUR SALUTE</div>
            </div>
            <div class="col-6 col-lg-3 d-flex align-items-center px-3 py-4 cursor-pointer prefooter-content">
                <img class="me-3" alt="" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dw77b055e6/distributore.svg">
                <div>CARREFOUR CARBURANTI</div>
            </div>
            <div class="col-6 col-lg-3 d-flex align-items-center px-3 py-4 cursor-pointer prefooter-content">
                <img class="me-3" alt="" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dwa3e49b4c/financialservices.svg">
                <div>CARTA CARREFOUR FINDOMESTIC</div>
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


    .section-title {
        color: #0e3368;
    }

    .footer-app-wrapper {
        background: linear-gradient(1turn,rgba(9,112,230,.2),rgba(211,227,245,0) 182.95%);
        border-radius: 15px;
    
        .footer-app-text {
            color: #1b3d79;
            font-size: 1.4rem;
            line-height: 1.25;
        }

        .footer-app-buttons {
            i {
                font-size: 2rem;
            }
        }
    }

    .footer-service-item {
        border: 2px solid #d3e3f5;
        border-radius: 8px;

        .footer-service-item-title {
            color: #1b3d79;
        }
    }

    .content-asset {
        background: #e6f1fc;
    }

    .cursor-pointer {
        cursor: pointer;
    }

    .prefooter-content {
        transition: all .2s ease-in;

        &:hover {
            transform: translateY(-2px);
        }
    }
</style>