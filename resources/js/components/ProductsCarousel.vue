<template>
	<ProductCard :product="products[i]"/>
</template>

<script>
import ProductCard from './ProductCard.vue';
export default {
	name: 'Product_Carousel',
	data() {
		return {
			
		}
	},
	components: {
		ProductCard,
	},
}
</script>

<style scoped lang="scss">

</style>