<template>
<div>


	<Header />
	<!-- <Main /> -->
	<main>
		<Categories :categories="categories"/>
		<ProductsCarousel :products="products"/>
	</main>
	<Footer />

</div>


</template>

<script>
import axios from 'axios';
import Header from '../components/Header';
// import Main from '../components/Main';
import Categories from '../components/Categories';
import Footer from '../components/Footer';
import ProductsCarousel from '../components/ProductsCarousel';

export default {

	name: 'App',
	components: {
		Header,
		ProductsCarousel,
		Categories,
		Footer,
	},
	data() {
		return {
			products: null,
			categories: null,
		}
	},
	created() {
		this.getCategories();
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
		getCategories() {

			axios.get('http://127.0.0.1:8000/api/category')

			.then(response => {
				console.log(response);
				this.categories = response.data;
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