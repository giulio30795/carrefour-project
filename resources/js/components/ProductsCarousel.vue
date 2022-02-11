<template>
	<div class="container">
		<ProductCard class="product_carousel" v-for="(products, i) in products" :key="`product_${i}`" :product="products[i]"/>
	</div>
</template>

<script>
import ProductCard from './ProductCard.vue';
export default {
	name: 'Product_Carousel',
	data() {
		return {
		}
	},
	props: {
		products: Array,
	},
	components: {
		ProductCard,
	},
}
</script>

<style lang="scss" scoped>
.product_carousel {
	height: 130px;
	width: 100%;
	padding-inline: 5%;
}
</style>