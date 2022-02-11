<template>
	<div class="product_carousel">
		<div class="heading">
			<h2 class="section_title">I Nostri Prodotti</h2>
			<div class="nav_btns">
				<div class="prev">
					<i class="fa-solid fa-chevron-left"></i>
				</div>
				<div class="next">
					<i class="fa-solid fa-chevron-right"></i>
				</div>
			</div>
		</div>
		<ul class="slides">
			<ProductCard
			v-for="(product, i) in products"
			:key="`product_${i}`"
			:discount="product.discount"
			:name="product.product_name"
			:brand="product.brand"
			:cover="product.cover"
			:price="product.price"
			/>
		</ul>
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
	height: 100%;
	width: 100%;
	padding: 2rem 5%;
	.heading {
	display: flex;
	align-items: center;
	margin-bottom: 2rem;
		.section_title {
			width: 80%;
		}
		.nav_btns {
			width: 20%;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
	}
	.slides {
		display: flex;
		flex-wrap: nowrap;
		align-items: stretch;
		overflow-x: auto;
	}
}
</style>