<template>
	<div class="container product_carousel">
		<ProductCard v-for="(product, i) in products" :key="`product_${i}`"
		:discount="product.discount"
		:name="product.name"
		:brand="product.brand"
		
		/>
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
	display: flex;
	align-items: center;
}
</style>