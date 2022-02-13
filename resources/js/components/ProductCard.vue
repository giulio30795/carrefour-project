<template>
	<li class="product_card">
		<div class="top_info">
			<div class="text-danger offer_badge" v-if="discount > 0">IN OFFERTA</div>
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
			<div class="stock_price">
				{{stockPrice(fixedPrice)}}
			</div>
			<div class="detail_price">{{fixedPrice}}€</div>
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
			quantity: Number,
		},
		data() {
			return {
				favorite: false,
				fixedPrice: parseFloat(this.price).toFixed(2),
			}
		},
		methods: {
			stockPrice(price) {
				let p = price / this.quantity;
				let sP = p * 1000;
				return `${parseFloat(sP).toFixed(2)}€ al kg/Litro`;
			},
		},
	}
</script>

<style lang="scss" scoped>

.text-danger {
	color: red;
}

.offer_badge {
	font-size: .9rem;
}
	.product_card {
		width: calc((100% - 60px) / 6);
		height: 380px;
		margin-inline: 5px;
		margin-bottom: 10px;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		padding: 10px;
		background-color: white;
		list-style-type: none;
		flex-shrink: 0;
		border-radius: 5px;
		border: 1px solid rgba(lightgray, .5);
		.top_info {
			display: flex;
			justify-content: space-between;
			.fav {
				margin-left: auto;
			}
		}
		.top_details {
			.brand {
				font-size: 1rem;
				font-weight: bold;
				margin-bottom: .5rem;
			}
		}
		.cover {
			height: 50%;
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
				font-size: .8rem;
			}
			.detail_price {
				font-size: 1.15rem;
				font-weight: bold;
			}
		}
		.add_to_cart {
			align-self: end;
			cursor: pointer;
			font-size: 1.35rem;
			color: white;
			border-radius: 100px;
			padding: .3rem 1.2rem;
			background-color: red;
		}
	}
</style>