<template>
    <div class="container">

        <BannerBlu />

        <Navbar />
        
    </div> 
</template>

<script>
import BannerBlu from '../section/BannerBlu';
import Navbar from '../section/Navbar';

export default {
    name: Header,
    components: {
        BannerBlu,
        Navbar,
    }
}

</script>

<style lang="scss" scoped>

</style>