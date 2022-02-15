<template>
<div>


	<Header />
	<Categories />
	<CarouselPubblicita />
	<!-- <Main /> -->
	<main>
		<ProductsCarousel :products="products"/>
	</main>
	<Footer />

</div>


</template>

<script>
import axios from 'axios';
import Header from '../components/Header';
import Categories from '../components/Categories';
// import Main from '../components/Main';
import CarouselPubblicita from '../components/CarouselPubblicita';
import Footer from '../components/Footer';
import ProductsCarousel from '../components/ProductsCarousel';

export default {

	name: 'App',
	components: {
		Header,
		CarouselPubblicita,
		ProductsCarousel,
		Categories,
		Footer,
	},
	data() {
		return {
			products: null,
		}
	},
	created() {
		this.fetchProducts();
	},
	methods: {
		fetchProducts() {
			axios.get('http://127.0.0.1:8000/api/foods')
			.then(response => {
				console.log(response);
				this.products = response.data;
			})
			.catch(err => {
				console.log(err);
			});
		},
	},
}
</script>

<style>
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body {
background-color: #f7f7f7;
font-family: sans-serif;
}
</style>