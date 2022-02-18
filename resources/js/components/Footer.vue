<template>
  <footer>
      <PreFooter />
      
      <div class="footer-social justify-content-between justify-content-lg-end align-items-center">
          <div class="social-text p-3">
              #restaconnesso
          </div>
          <div class="social-images p-3">
              <i class="fab fa-facebook-square cursor-pointer"></i>
              <i class="fab fa-twitter-square cursor-pointer"></i>
              <i class="fab fa-instagram-square cursor-pointer"></i>
              <i class="fab fa-youtube-square cursor-pointer"></i>
              <i class="fab fa-linkedin cursor-pointer"></i>
          </div>
      </div>

      <div class="footer-infos p-5">
          <div class="row">
            <nav class="col-12 col-lg-7 px-4">
                <div class="row">
                    <div v-for="i in cols" :key="`col-${i}`" class="col-12 col-lg-4">
                        <ul v-for="(navLink, index) in navLinksMethod(i)" :key="`navLink-${index}`" @click="showLinks(index, i)">
                            <li class="d-flex justify-content-between">
                                <h4 class="cursor-pointer">{{ navLink.title }}</h4>
                                <div class="d-lg-none me-5 cursor-pointer">
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
            <div class="footer-customer">
                <div class="customer_primary_item col-12 d-flex">
                    <div class="customer_primary_item__image col-6 d-flex justify-content-center">
                        <img alt="call us" src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dwd3d279b3/call-us.png">
                    </div>
                    <div class="customer_primary_item__text col-6 d-flex justify-content-center text-center flex-column">
                        <div class="text-uppercase">Chiamaci</div>
                        <div class="number">al numero verde</div>
                        <div class="disabled">800 650 650</div>
                    </div>
                </div>
                <div class="customer_secondary_item text-center py-4">
                    <img src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dw680dbb0b/point-of-service.png" alt="">
                    <div class="">trova un</div>
                    <div class="main_text">punto vendita</div>
                </div>
                <div class="customer_secondary_item text-center py-4">
                    <img src="https://www.carrefour.it/on/demandware.static/-/Library-Sites-carrefour-library-IT/default/dw73041029/contact-service.png" alt="">
                    <div class="">contatta il</div>
                    <div class="main_text">servizio clienti</div>
                </div>
            </div>
          </div>
      </div>

      <hr>

      <div class="payments d-flex flex-column justify-content-center align-items-center">
        <div class="payments-text">Metodi di pagamento</div>
        <div class="payments-image d-flex">
            <i class="fab fa-cc-visa cursor-pointer"></i>
            <i class="fab fa-cc-mastercard cursor-pointer"></i>
            <i class="fab fa-cc-amex cursor-pointer"></i>
            <i class="fab fa-cc-paypal cursor-pointer"></i>
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
@import '../../sass/app.scss';


    .footer-social {
        display: flex;
        background: $primary-400;
        color: $clear-100;

        .social-images{
            font-size: 2rem;
        }
    }

    .footer-infos {
        .row {
            align-items: flex-start;
        }
        ul {
            list-style: none;

            li {

                h4 {
                    color: $primary-400;
                }

                a {
                    text-decoration: none;
                    color: $dark-900;
                    font-size: 0.80rem;
                }
            }

            .links {
                display: block!important;
            }
        }

        .footer-customer {
            display: flex;
            flex-wrap: wrap;
            gap: .5rem;
            margin-left: auto;
            width: 20%;
            .customer_primary_item {
                @include blueBorder;
                &__image {
                    background: $clear-700;
                    align-items: center;
                    img {
                        height: 80%;
                    }
                }
                &__text {
                    .text-uppercase {
                        color: $primary-400;
                        font-weight: bold;
                        font-size: 1.2rem;
                    }
                    .number {
                        color: $disabled-text;
                        font-size: .9rem;
                    }
                    .disabled {
                        font-weight: bold;
                        color: $enabled;
                        font-size: 1.1rem;
                    }
                }
            }
            .customer_secondary_item {
                @include blueBorder;
                width: calc((100% / 2) - .25rem);
                color: $primary-400;
                text-transform: uppercase;
                font-size: .9rem;
                .main_text {
                    font-weight: bold;
                }
            }
        }
    }
    

    .payments {
        .payments-text {
            color: $enabled;
        }
        .payments-image {
            i {
                font-size: 2rem;
                padding: .5rem;
                background: $clear-100;
            }
        }
    }

    .sub-footer {
        color: $disabled-text;
        background: $clear-300;
        padding: 1rem;
    }

    .cursor-pointer {
        cursor: pointer;
    }
</style>