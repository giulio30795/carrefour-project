<template>
     <div class="container banner ">
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
                    <a href=""><strong>Serve aiuto? |</strong></a>
                </li>
                <li>
                    <a href="">Volantini |</a>
                </li>
                <li>
                    <a href=""><i class="fa-regular fa-location-dot"></i>Punti vendita |</a>
                </li>
                <li>
                    <a href="">Servizi |</a>
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
    height:25px;
    background-color: #1b3d79;
    display: flex;
    justify-content: space-between;

    ul{
        display: flex;
        list-style: none;

        a{
            text-decoration: none;
            color: #fff;
            :hover{
                color:#0970e6;
            }
        }
    }
}

</style>
