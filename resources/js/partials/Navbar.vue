<template>
    <div class="navigation">

    <div class="wrapper">
        <!--OVER IT-->

        <div class="up">
            <div>
                <a class="brand" href="">
                    <img src="https://www.carrefour.it/on/demandware.static/Sites-carrefour-IT-Site/-/default/dwf3c21fa0/images/carrefour-logotype.svg" alt="">
                    <img src="https://www.carrefour.it/on/demandware.static/Sites-carrefour-IT-Site/-/default/dw44a8db04/images/carrefour-logomark.svg" alt="">
                </a>
            </div>
            
            <form action="" class="form">
                <input type="text" class="form" name="" id="" value="" placeholder="Di cosa hai bisogno?">
                <div class="icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </form>
            
            <div class="right">
                <div class="payback" >
                    <img src="https://www.carrefour.it/on/demandware.static/Sites-carrefour-IT-Site/-/default/dw977fdad2/images/payback-ball.png" alt="">
                    <a href="" class="pay text-center">
                        <div class="top">PAYBACK</div>
                        <div class="bot"><strong>Scopri Payback</strong></div>
                    </a>
                </div>

                <div>
                    <a href="">
                        <i class="fa-solid fa-cart-shopping cart"></i>
                    </a>
                </div>
            </div>
        </div>

    <!--UNDER-->

        <div class="down">
            <div class="nav" >
                <ul class="ps-0" >
                    <li>
                        <a href="" class="me-4">Spesa online</a>
                    </li>
                      <li>
                        <a href="" class="me-4">Elettronica e giocattoli</a>
                    </li>
                      <li>
                        <a href="" class="me-4">Promozioni<i class="fa-solid fa-caret-down ms-2 me-2"></i></a>
                    </li>
                </ul>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a href="" class="me-4 text-secondary">Vivi di gusto |</a>
                    </li>
                    <li>
                        <a href="" class="me-4 text-secondary">Idee regalo <i class="fa-solid fa-caret-down ms-2 me-2"></i>|</a>
                    </li>
                    <li>
                        <a href="" class="me-4">Spesa Smart <i class="fa-solid fa-caret-down ms-2 me-2"></i>|</a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-user me-1"></i><strong>Accedi</strong><i class="fa-solid fa-caret-down ms-2"></i></a>
                    </li>
                </ul>
            </div>
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
@import '../../sass/_variables.scss';

.navigation {
    background-color: $clear-100;
}

.wrapper {
    padding: 1rem 2.5rem;
    align-items: center;
    display: flex;
    flex-wrap: wrap;
}

.up{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: $clear-100;
    padding: .5rem 0;
    margin-bottom: 1rem;
    .form{
        width: 40%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        .icon {
            display: grid;
            place-content: center;
            position: absolute;
            top: 50%;
            right: .7rem;
            color: $clear-100;
            font-size: .8rem;
            transform: translateY(-50%);
            background-color: $primary-100;
            padding: .4rem;
            aspect-ratio: 1.0;
            border-radius: 50%;
        }
        input {
            width: 100%;
            padding: .5rem .7rem;
            background-color: $clear-300;
            border: none;
            border-radius: 100px;
            &:focus {
                outline: none;
            }
        }
    }

    .right {
        justify-content: flex-end;
        display: flex;
        align-items: center;
        .cart{
        margin: 0 30px;
        font-size: 25px;
        }
    }
}

.down{
    width: 100%;
    display: flex;
    justify-content: space-between;
    background-color: $clear-100;
    ul{
        display: flex;
        list-style: none;
             
        a{
            text-decoration: none;
            color: #14386b;
            &:hover { 
                color: #3388ea;
                }
        }
    } 

}

.payback{
    position: relative;
    width: 165px;
    height: 38px;
    background-color: transparent;
    border-radius: 8px;
    border: 2px solid #d0e4f5;
    &:hover {
        background-color: #d0e4f5;
    }

    img{
        position: absolute;
        left: -20px;
        width: 37px;
    }

    .pay{
        text-decoration: none;

        .top{
            font-size: 10px;
            color: #14386b;
        }
        .bot{
            font-size: 17px;
        } 
    }
}



</style>