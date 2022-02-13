<template>
	<div class="product_carousel">
		<div class="heading">
			<h2 class="section_title">I Nostri Prodotti</h2>
			<div class="nav_btns">
					<div class="prev_wrap" @click="carouselScrollTo(-200)">
						<i class="fa-solid fa-chevron-left prev" ></i>
					</div>
					<div class="next_wrap" @click="carouselScrollTo(200)">
						<i class="fa-solid fa-chevron-right next" ></i>
					</div>
			</div>
		</div>
		<ul class="slides" ref="productsSlide">
			<ProductCard
			v-for="(product, i) in products"
			:key="`product_${i}`"
			:discount="product.discount"
			:name="product.product_name"
			:brand="product.brand"
			:cover="product.cover"
			:price="product.price"
			:quantity="product.quantity"
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
			carouselScroll: 0,
			carousel: document.querySelector('.slides'),
		}
	},
	props: {
		products: Array,
	},
	components: {
		ProductCard,
	},
	methods: {
		carouselScrollTo(quantity) {
			let carousel = document.querySelector('.slides');
			let scrolled = carousel.scrollLeft;

			if (quantity < 0 && scrolled + (quantity) < 0) {
				carousel.scroll({
					left: 0,
					behavior: 'smooth',
				});
			} else if (quantity > 0 && + scrolled + (quantity) > carousel.scrollLeftMax) {
				carousel.scroll({
					left: carousel.scrollLeftMax,
					behavior: 'smooth',
				});
			} else {
				carousel.scroll({
					left: scrolled + (quantity),
					behavior: 'smooth',
				});
			}
			console.log(this.$refs.productsSlide);
		},
	},
	// TODO - computed da usare per una classe dinamica disabled sui tasti per lo scroll
}
</script>

<style lang="scss" scoped>

.product_carousel {
	width: 80%;
	padding-bottom: 2.5rem;
	border-bottom: 1px solid lightgray;
	margin: 2rem auto;
	.heading {
	display: flex;
	align-items: center;
	margin-bottom: 2rem;
		.section_title {
			width: 92%;
		}
		.nav_btns {
			width: 8%;
			display: flex;
			align-items: center;
			justify-content: space-between;
			.prev_wrap,
			.next_wrap {
				cursor: pointer;
				padding: 1rem;
				aspect-ratio: 1;
				border-radius: 50%;
				display: grid;
				place-content: center;
				background-color: red;
				box-shadow: 0 0 8px rgba(0, 0, 0, .3);
				&.disabled {
					background-color: lightgray;
					pointer-events: none;
				}
			}
		}
	}
	.slides {
		display: flex;
		flex-wrap: nowrap;
		align-items: stretch;
		overflow-x: auto;
		// hiding scrollbars
		-ms-overflow-style: none;
		scrollbar-width: none;
		// //hiding scrollbars
		&::-webkit-scrollbar {
			display: none;
		}
	}
}
</style>