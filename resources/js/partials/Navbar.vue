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
                <a class="payback" >
                    <img src="https://www.carrefour.it/on/demandware.static/Sites-carrefour-IT-Site/-/default/dw977fdad2/images/payback-ball.png" alt="">
                    <a href="" class="pay">
                        <div class="top">PAYBACK</div>
                        <div class="bot"><strong>Scopri Payback</strong></div>
                    </a>
                </a>

                <div>
                    <a href="">
                        <i class="fa-solid fa-cart-shopping cart"></i>
                    </a>
                </div>
            </div>
        </div>

    <!--UNDER-->

        <div class="down">
            <ul class="left">
                <li>
                    <a href="">Spesa Online</a>
                </li>
                <li>
                    <a href="">Elettronica e Giocattoli</a>
                </li>
                <li>
                    <a href="">Promozioni
                        <i class="fa-solid fa-caret-down "></i>
                    </a>
                    
                </li>
            </ul>
            <ul class="right">
                <li>
                    <a class="grey" href="">Spesa online</a>
                </li>
                <li>
                    <a class="grey" href="">Elettronica e giocattoli</a>
                </li>
                <li>
                    <a href="">Spesa Smart
                        <i class="fa-solid fa-caret-down"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-solid fa-user me-1"></i>
                        <strong>Accedi</strong>
                        <i class="fa-solid fa-caret-down ms-2"></i>
                    </a>
                </li>
            </ul>
            <!-- <div class="nav" >
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
            </div> -->
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
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        .icon {
            display: grid;
            place-content: center;
            position: absolute;
            top: 50%;
            right: .5rem;
            color: $clear-100;
            font-size: .8rem;
            transform: translateY(-50%);
            background-color: $primary-100;
            padding: .4rem;
            aspect-ratio: 1.0;
            border-radius: 50%;
            cursor: pointer;
            transition: filter .15s ease;
            &:hover {
                filter: brightness(80%);
            }
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
            &::placeholder {
                color: rgba($dark-900, .3);
                font-size: .9rem;
            }
        }
    }

    .right {
        justify-content: flex-end;
        display: flex;
        align-items: center;
        .cart {
        margin: 0 2rem;
        font-size: 1.5rem;
        }
    }
}

.down{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: $clear-100;
    .left,
    .right {
        width: 50%;
        display: flex;
        align-items: center;
        margin: 0;
        padding: 0;
        li {
            display: block;
            a {
                color: $primary-400;
                text-decoration: none;
                &:hover {
                    color: $enabled;
                }
                &.active {
                    color: $enabled;
                }
                i {
                    margin-left: .4rem;
                }
            }
        }
    }
    .left {
        li {
            margin-right: 2.2rem;
        }
    }
    .right {
        justify-content: flex-end;
        font-size: .75rem;
        li {
            margin-left: 1rem;
            &::after {
                content: "|";
                margin-left: 1rem;
                color: rgba($disabled-text, .2);
            }
            &:nth-child(3),
            &:nth-child(4) {
                font-size: 1rem;
            }
            a.grey {
                color: $disabled-text;
                &:hover {
                    color: $enabled;
                }
            }
        }
    }
    // width: 100%;
    // display: flex;
    // justify-content: space-between;
    // align-items: center;
    // background-color: $clear-100;
    // ul{
    //     display: flex;
    //     list-style: none;
             
    //     a{
    //         text-decoration: none;
    //         color: #14386b;
    //         &:hover { 
    //             color: #3388ea;
    //             }
    //     }
    // } 

}

.payback{
    display: flex;
    flex-direction: column;
    position: relative;
    border-radius: .5rem;
    border: 2px solid rgba($primary-100, .15);
    cursor: pointer;
    padding-inline: 1.5rem 1rem;
    &:hover {
        background-color: rgba($primary-100, .15);
        border: 2px solid transparent;
    }

    img {
        position: absolute;
        left: -20px;
        width: 2rem;
    }

    .pay {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-decoration: none;
        .top {
            font-size: .57rem;
            color: $primary-400;
        }
        .bot {
            font-size: 1rem;
            strong {
                text-decoration: none;
            }
        }
    }
}



</style>