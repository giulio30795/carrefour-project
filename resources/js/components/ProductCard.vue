<template>
	<li class="product_card">
		<div class="top_info">
			<div class="text-danger" v-if="discount > 0">IN OFFERTA</div>
			<div class="fav">
				<i v-if="favorite === false || product.favorite == null" class="fa-solid fa-heart-crack"></i>
			</div>
		</div>
		<div class="top_details">
			<div class="brand">{{brand}}</div>
			<div class="product_name">{{name}}</div>
		</div>
		<figure class="cover">
			<img class="cover_image" :src="cover" alt="">
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
			<div class="detail_price text-danger fs-4">{{parseFloat(price).toFixed(2)}}€</div>
		</div>
		<div class="add_to_cart">
			<i class="fa-solid fa-cart-plus"></i>
		</div>
	</li>
</template>

<script>
	export default {
		name: 'ProductCard',
		props: {
			discount: Number,
			name: String,
			brand: String,
			cover: String,
			price: Number,
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
		width: calc((100% - 60px) / 6);
		margin-inline: 5px;
		margin-bottom: 10px;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		padding: 10px;
		background-color: white;
		list-style-type: none;
		flex-shrink: 0;
		.top_info {
			display: flex;
			justify-content: space-between;
			.fav {
				margin-left: auto;
			}
		}
		.top_details {
			.brand {

			}
			.product_name {

			}
		}
		.cover {
			.cover_image {
				height: 100%;
				width: 100%;
				object-fit: contain;
				object-position: position;
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
			align-self: end;
		}
	}
</style>