<template>
    <header>
        <BannerBlu />
        <Navbar />
    </header>    
</template>

<script>
import BannerBlu from '../partials/BannerBlu';
import Navbar from '../partials/Navbar';

export default {
    name: "Header",

    components:{
        BannerBlu,
        Navbar,
    }

}
</script>

<style lang="scss" scoped>



</style>