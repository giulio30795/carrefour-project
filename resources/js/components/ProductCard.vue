<template>
	<article class="product_card">
		<div class="top_info">
			<div class="text-danger" v-if="product.discount > 0">IN OFFERTA</div>
			<div class="fav">
				<i @click="this.$emit('revertFavorite')" v-if="product.favorite === true" class="fa-solid fa-heart"></i>
				<i @click="this.$emit('revertFavorite')" v-if="product.favorite === false || product.favorite == null" class="fa-solid fa-heart-crack"></i>
			</div>
		</div>
		<div class="top_details">
			<div class="brand">{{product.brand}}</div>
			<div class="product_name">{{product.name}}</div>
		</div>
		<figure class="cover">
			<img class="cover_image" src="{{product.cover}}" alt="">
			<!-- TODO vogliamo mettere le iconcine di categoria/altro o lasciamo vuoto? -->
			<!-- <img src="" alt=""> -->
		</figure>
		<div class="bottom_details">
			<div class="offer_details">
				<div class="discount_badge badge badge-danger"></div>
				<!-- non abbiamo più il campo per la data di scadenza dell'offerta quindi se non vogliamo implementarla possiamo semplicemente ignorare questo campo, in quel caso questo div non lo metto più dentro il wrapper .offer_details -->
				<!-- <div class="expiring_date"></div> -->
			</div>
			<div class="stock_price"></div>
			<div class="detail_price text-danger fs-4"></div>
		</div>
		<div class="add_to_cart">
			<i class="fa-solid fa-cart-plus"></i>
		</div>
	</article>
</template>

<script>
	export default {
		name: 'ProductCard',
		props: {
			product: Object,
		},
		data() {
			return {
				favorite: false,
			}
		},
		methods: {
			
		},
	}
</script>

<style lang="scss" scoped>
	.product_card {
		height: 100%;
		width: calc(100% / 6);
		.top_info {
			display: flex;
			justify-content: space-between;
		}
		.top_details {
			.brand {

			}
			.product_name {

			}
		}
		.cover {
			.cover_image {

			}
		}
		.bottom_details {
			.offer_details {
				display: flex;
			}
			.stock_price {

			}
			.detail_price {

			}
		}
		.add_to_cart {
			
		}
	}
</style>