<template>
    <div class="container">

    <!--OVER IT-->

        <div class="up">
            <span>
                <img src="https://www.carrefour.it/on/demandware.static/Sites-carrefour-IT-Site/-/default/dwf3c21fa0/images/carrefour-logotype.svg" alt="">
                <img src="https://www.carrefour.it/on/demandware.static/Sites-carrefour-IT-Site/-/default/dw44a8db04/images/carrefour-logomark.svg" alt="">
            </span>
            
            <form action="">
                <input type="text" class="form-control" name="" id="" value="">
                <button>
                    <i class="fa-regular fa-magnifying-glass"></i>
                </button>
            </form>
            
            <div class="payback" >
                <img src="https://www.carrefour.it/on/demandware.static/Sites-carrefour-IT-Site/-/default/dw977fdad2/images/payback-ball.png" alt="">
                <a href="">
                    <div>PAYBACK</div>
                    <div>Scopri Payback</div>
                </a>
            </div>

            <div>
                <i class="fa-regular fa-cart-shopping-fast"></i>
            </div>
        </div>

    <!--UNDER-->

        <div class="down">
            <div class="nav" >
                <ul>
                    <li>
                        <a href="">Spesa online</a>
                    </li>
                      <li>
                        <a href="">Elettronica e giocattoli</a>
                    </li>
                      <li>
                        <a href="">Promozioni</a><font-awesome-icon icon="fa-solid fa-caret-down" />
                    </li>
                </ul>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a href="">Vivi di gusto |</a>
                    </li>
                    <li>
                        <a href="">Idee regalo |</a>
                    </li>
                    <li>
                        <a href="">Spesa Smart |</a>
                    </li>
                    <li>
                        <a href=""><strong>Accedi</strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Navbar',

}
</script>

<style lang="scss" scoped>

.up{
    display: flex;
    align-items: center;
    padding: 20px; 
}

.down{
    display: flex;
    justify-content: space-between;
    ul{
        display: flex;
        list-style: none;
        a{
            text-decoration: none;
        }
    }

 
}

.payback{
    position: relative;
    width: 170px;
    height: 35px;
    border-radius:5px;
    border: 1px solid #f0f6fb;
    img{
        position: absolute;
        width: 50px;
    }
}



</style>