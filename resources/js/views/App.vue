<template>
<div>


	<Header />
	<Categories />
	<!-- <Main /> -->
	<main>
		<ProductsCarousel />
	</main>
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
			products: null,
		}
	},
	created() {
		
	},
	methods: {
		fetchProducts() {
			axios.get('http://127.0.0.1:8000/api/foods')
			.then()
			.catch();
		},
	},
}
</script>

<style>

</style>