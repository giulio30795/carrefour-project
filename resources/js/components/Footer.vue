<template>
  <footer>
      <PreFooter />
      
      <div class="footer-social justify-content-between justify-content-lg-end align-items-center">
          <div class="social-text p-3">
              #restaconnesso
          </div>
          <div class="social-images p-3">
              <i class="fab fa-facebook-square"></i>
              <i class="fab fa-twitter-square"></i>
              <i class="fab fa-instagram-square"></i>
              <i class="fab fa-youtube-square"></i>
              <i class="fab fa-linkedin"></i>
          </div>
      </div>

      <div class="footer-infos p-5">
          <div class="row">
            <nav class="col-12 col-lg-7 px-4">
                <div class="row">
                    <div v-for="i in cols" :key="`col-${i}`" class="col-12 col-lg-4">
                        <ul v-for="(navLink, index) in navLinksMethod(i)" :key="`navLink-${index}`" @click="showLinks(index, i)">
                            <li class="d-flex justify-content-between">
                                <h4>{{ navLink.title }}</h4>
                                <div class="d-lg-none me-5">
                                    <h4 class="d-none" :class="{links: !navLink.show}">+</h4>
                                    <h4 class="d-none" :class="{links: navLink.show}">-</h4>
                                </div>
                            </li>
                            <li v-for="(link, index) in navLink.links" :key="`link-${index}`" class="d-none d-lg-block" :class="{links: navLink.show}">
                                <a :href="link.url">{{ link.text }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="footer-customer col-12 col-lg-5 p-4">
                <div class="row">
                    <div class="col-12 border-customer mx-3 mb-2">
                        <div class="row call-us">
                            <div class="col-6 d-flex justify-content-center align-items-center call-us-image">
                                <img alt="call us" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dwd3d279b3/call-us.png">
                            </div>
                            <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                <div class="text-uppercase">Chiamaci</div>
                                <div class="call-us-number-text">al numero verde</div>
                                <div class="call-us-number">800 650 650</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pe-0">
                        <div class="row justify-content-between">
                            <div class="col-6 pe-0">
                                <div class="border-customer d-flex flex-column justify-content-center align-items-center text-uppercase py-3">
                                    <img alt="punti vendita" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dw680dbb0b/point-of-service.png">
                                    Trova un 
                                    <strong>Punto vendita</strong>
                                </div>
                            </div>
                            <div class="col-6 pe-0">
                                <div class="border-customer d-flex flex-column justify-content-center align-items-center text-uppercase pb-4">
                                    <img alt="servizio clienti" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dw73041029/contact-service.png">
                                    Contatta il 
                                    <strong>servizio clienti</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>

      <hr>

      <div class="payments d-flex flex-column justify-content-center align-items-center">
        <div class="payments-text">Metodi di pagamento</div>
        <div class="payments-image d-flex">
            <i class="fab fa-cc-visa"></i>
            <i class="fab fa-cc-mastercard"></i>
            <i class="fab fa-cc-amex"></i>
            <i class="fab fa-cc-paypal"></i>
        </div>
      </div>

      <div class="sub-footer">
          <div class="text-center">© 2022 Carrefour.it – P.IVA N. 12683790153</div>
      </div>
  </footer>
</template>

<script>
import PreFooter from './PreFooter.vue';

export default {
    name: 'Footer',
    components: {
        PreFooter,
    },
    data() {
        return {
            navLinks: [
                {
                    title: 'I nostri valori',
                    col: 1, // Colonna per width large
                    show: false, // show links on click for width smaller than lg
                    links: [
                        {
                            text: 'Act For Food',
                            url: '#',
                        },
                    ],
                },
                {
                    title: 'Nel mondo',
                    col: 1, // Colonna per width large
                    show: false, // show links on click for width smaller than lg
                    links: [
                        {
                            text: 'www.carrefour.com',
                            url: 'www.carrefour.com',
                        },
                    ],
                },
                {
                    title: 'Servizi',
                    col: 1, // Colonna per width large
                    show: false, // show links on click for width smaller than lg

                    links: [
                        {
                            text: 'Carta SpesAmica',
                            url: '#',
                        },
                        {
                            text: 'PAYBACK',
                            url: '#',
                        },
                        {
                            text: 'Gift card',
                            url: '#',
                        },
                        {
                            text: 'Servizi Findomestic',
                            url: '#',
                        },
                        {
                            text: 'Carrefour Salute',
                            url: '#',
                        },
                        {
                            text: 'Carrefour Viaggi',
                            url: '#',
                        },
                        {
                            text: 'Carrefour Foto',
                            url: '#',
                        },
                        {
                            text: 'Richiamo prodotti',
                            url: '#',
                        },
                    ],
                },
                {
                    title: 'Area legale',
                    col: 2, // Colonna per width large
                    show: false, // show links on click for width smaller than lg
                    links: [
                        {
                            text: 'Dati societari',
                            url: '#',
                        },
                        {
                            text: 'Tutela dei dati personali',
                            url: '#',
                        },
                        {
                            text: 'Garanzia legale di conformità',
                            url: '#',
                        },
                        {
                            text: 'Condizioni generali',
                            url: '#',
                        },
                        {
                            text: 'Condizioni generali di vendita',
                            url: '#',
                        },
                        {
                            text: 'Carta etica per i nostri fornitori',
                            url: '#',
                        },
                        {
                            text: 'Carta di impegno di Responsabilità Sociale d\'Impresa',
                            url: '#',
                        },
                        {
                            text: 'Modelli Organizzativi',
                            url: '#',
                        },
                        {
                            text: 'Informativa Cookie',
                            url: '#',
                        },
                        {
                            text: 'Gestisci preferenze cookie',
                            url: '#',
                        },
                    ],
                },
                {
                    title: 'Acquisti Online',
                    col: 2, // Colonna per width large
                    show: false, // show links on click for width smaller than lg
                    links: [
                        {
                            text: 'Spesa veloce by Carrefour NOW',
                            url: '#',
                        },
                        {
                            text: 'Spesa Online',
                            url: '#',
                        },
                        {
                            text: 'Elettronica e Casa',
                            url: '#',
                        },
                        {
                            text: 'Offerte Online',
                            url: '#',
                        },
                        {
                            text: 'Abbonamento Carrefour Club',
                            url: '#',
                        },
                        {
                            text: 'Pagamento tramite Gift Card',
                            url: '#',
                        },
                        {
                            text: 'Soglie spese di spedizione',
                            url: '#',
                        },
                        {
                            text: 'Novità servizi spesa online',
                            url: '#',
                        },
                        {
                            text: 'App Carrefour',
                            url: '#',
                        },
                        {
                            text: 'Tutti i servizi online',
                            url: '#',
                        },
                    ],
                },
                {
                    title: 'Agevolazioni',
                    col: 3, // Colonna per width large
                    show: false, // show links on click for width smaller than lg
                    links: [
                        {
                            text: 'Donne in Gravidanza e Neogenitori',
                            url: '#',
                        },
                        {
                            text: 'Over 60',
                            url: '#',
                        },
                        {
                            text: 'Diversamente Abili',
                            url: '#',
                        },
                        {
                            text: 'Regolamento',
                            url: '#',
                        },
                        {
                            text: 'Agevolazioni',
                            url: '#',
                        },
                    ],
                },
                {
                    title: 'Speciali del momento',
                    col: 3, // Colonna per width large
                    show: false, // show links on click for width smaller than lg
                    links: [
                        {
                            text: 'Le Nostre Proposte di Spesa Online',
                            url: '#',
                        },
                        {
                            text: 'Le Nostre Proposte di Elettronica e Casa',
                            url: '#',
                        },
                        {
                            text: 'San Valentino 2022',
                            url: '#',
                        },
                        {
                            text: 'Prodotti Biologici Online',
                            url: '#',
                        },
                        {
                            text: 'Prodotti Senza Glutine',
                            url: '#',
                        },
                        {
                            text: 'Prodotti Senza Lattosio',
                            url: '#',
                        },
                        {
                            text: 'Prodotti Vegani',
                            url: '#',
                        },
                        {
                            text: 'Prodotti Vegetariani',
                            url: '#',
                        },
                        {
                            text: 'Prodotti Proteici',
                            url: '#',
                        },
                        {
                            text: 'Prodotti Senza Zucchero',
                            url: '#',
                        },
                        {
                            text: 'Vini Consigliati',
                            url: '#',
                        },
                        {
                            text: 'Giocattoli Online',
                            url: '#',
                        },
                        {
                            text: 'Elettrodomestici',
                            url: '#',
                        },
                        {
                            text: 'Samsung',
                            url: '#',
                        },
                        {
                            text: 'Smart Tv e Televisori',
                            url: '#',
                        },
                        {
                            text: 'Smartphone e Cellulari',
                            url: '#',
                        },
                        {
                            text: 'Tutti gli Speciali del Momento',
                            url: '#',
                        },
                    ],
                },
            ],
            cols: 3,
        }
    },
    methods: {
        navLinksMethod: function (col) {
            return this.navLinks.filter(i => i.col === col)
        },
        showLinks: function (index, col) {
            let links = this.navLinksMethod(col);
            links[index].show = !links[index].show;
        },
    }

}
</script>

<style style="scoped" lang="scss">  

    .footer-social {
        display: flex;
        background: #1b3d79;
        color: #fff;

        .social-images{
            font-size: 2rem;
        }
    }

    .footer-infos {

        ul {
            list-style: none;

            li {

                h4 {
                    color: #2b4b83
                }

                a {
                    text-decoration: none;
                    color: black;
                    font-size: 0.80rem;
                }
            }

            .links {
                display: block!important;
            }
        }

        .footer-customer {
            .border-customer {
                border: 2px solid #d3e3f5;
                border-radius: 8px;
            }
            .call-us {
                .call-us-image {
                    background: #d3e3f5;
                }
                .call-us-number-text {
                    color: #979797;
                }
                .call-us-number {
                    color: #0970e6;
                }
            }
        }
    }
    

    .payments {
        
        .payments-text {
            color: #0970e6;
        }
        .payments-image {
            i {
                font-size: 2rem;
                padding: .5rem;
                background: #fff;
            }
        }
    }

    .sub-footer {
        color: #979797;
        background: #f7f7f7;
        padding: 1rem;
    }

    
</style>