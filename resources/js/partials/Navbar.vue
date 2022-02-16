<template>
    <div class="navbar" >

    <!--OVER IT-->

        <div class="up">
            <span>
                <a href="">
                    <img src="https://www.carrefour.it/on/demandware.static/Sites-carrefour-IT-Site/-/default/dwf3c21fa0/images/carrefour-logotype.svg" alt="">
                    <img src="https://www.carrefour.it/on/demandware.static/Sites-carrefour-IT-Site/-/default/dw44a8db04/images/carrefour-logomark.svg" alt="">
                </a>
            </span>
            
            <form action="" class="form">
                <input type="text" class="form" name="" id="" value="" placeholder="Di cosa hai bisogno?">
                <div>
                    <a href="" class="text-white" >
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </div>
            </form>
            
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
                    <li class="UserSection">

                        <span class="userText" @click="DropDownUser">

                            <i class="fa-solid fa-user me-1"></i>

                            <strong>Utente</strong>

                            <i class="fa-solid fa-caret-down ms-2 arrow_user" ref="UserArrow"></i>
                        </span>

                        <div class="dropDown-User"
                            ref="UserMenu">
                            
                            <a href="#">Accedi</a>

                            <a href="#">Registrati</a>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Navbar',
    data() {
        return {

        }
    },
    methods: {
        DropDownUser(){
            this.$refs.UserMenu.classList.toggle('onUserMenu');
            this.$refs.UserArrow.classList.toggle('rotate');
        },
    },

}
</script>

<style lang="scss" scoped>


.up{
    display: flex;
    width: 100%;
    align-items: center;
    padding: 20px;

    .cart{
        margin: 0 30px;
        font-size: 25px;
    }
    
    .form{
        width: 750px;
        height: 40px;
        color: #d5d5d5;
        border-radius: 25px;
        border: 1px solid #f7f7f7 ;
        background-color: #f7f7f7;
        margin: 0 auto;
        position: relative;

        div{
            width: 30px;
            height: 30px;
            line-height: 30px;
            border-radius: 25px;
            background-color:#84b7f2;
            text-align: center;
            position: absolute;
            right: 8px;
            top: 4px;
        }
    }
 
}

.down{
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 20px;
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

.UserSection{
    position: relative;

    .userText{
        cursor: pointer;


    }


    .dropDown-User{
        position: absolute;
        top: 100%;
        right: 100%;
        background-color: white;
        box-shadow: 1px 0px 22px 6px rgba(0,0,0,0.10);
        z-index: 1;
        display: none;
        padding: 10px;
        border-radius: 10px;

        &.onUserMenu{
            display: block;

        }
        
        a{
            color: black;
        }


    }
}

.arrow_user{
    transition: all 0.15s;
}
.arrow_user.rotate{
    transform: rotate(-180deg)
}



</style>