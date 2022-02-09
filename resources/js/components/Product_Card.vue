<template>
	<article class="product_card">
		<div class="fav">
			<i v-if="favorite === true" class="fa-solid fa-heart"></i>
			<i v-if="favorite === false" class="fa-solid fa-heart-crack"></i>
		</div>
		<div class="top_details">
			<div class="brand">{{}}</div>
			<div class="product_name">{{}}</div>
		</div>
		<figure>
			<img src="" alt="">
			<img src="" alt="">
		</figure>
		<div class="bottom_details">
			<div class="stock_price"></div>
			<div class="detail_price"></div>
		</div>
		<div class="add_to_cart">

		</div>
	</article>
</template>

<script>
	export default {
		name: 'Product_Card',
		data() {
			return {
				favorite: false,
			}
		},
	}
</script>

<style lang="sass" scoped>

</style>