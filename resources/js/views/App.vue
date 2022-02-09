<template>
<div>


      <Header />
      <Categories />
      <Main />
      <Footer />
 
</div>


</template>

<script>
import axios from 'axios';
import Header from '../components/Header';
import Main from '../components/Main';
import Categories from '../components/Categories';
import Footer from '../components/Footer';

export default {

    name: 'App',
    components: {
        Header,
        Main,
        Categories,
        Footer,
    },
    data() {
        return {

        }
    },
    created() {

    },
    methods: {

    },
}
</script>

<style>

</style>