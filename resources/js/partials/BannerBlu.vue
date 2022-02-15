<template>
     <div class="banner">
         <div>
             <ul>
                <li>
                    <a href="">Lavora con noi</a>
                </li>
             </ul>
         </div>
         <div>
             <ul>
                <li>
                    <a href=""><strong>Serve aiuto?</strong></a><span>|</span>
                </li>
                <li>
                    <a href="">Volantini</a><span>|</span>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-location-dot me-1"></i>Punti vendita</a><span>|</span>
                </li>
                <li>
                    <a href="">Servizi</a><span>|</span>
                </li>
                <li>
                    <a href="">Carta Carrefour Findomestic</a>
                </li>
             </ul>
         </div>
     </div> 
</template>

<script>
export default {
    name: 'BannerBlu',
}
</script>

<style lang="scss" scoped>

.banner{
    width: 100%;
    height:30px;
    line-height:30px;
    background-color: #1b3d79;
    display: flex;
    justify-content: space-between;

    ul{
        display: flex;
        list-style: none;

        span{
            color: #fff;
        }

        a{
            text-decoration: none;
            font-size: 15px;
            padding: 0 10px;
            color: #fff;
            &:hover{
                color:#0970e6;
            }
        }
    }
}

</style>
