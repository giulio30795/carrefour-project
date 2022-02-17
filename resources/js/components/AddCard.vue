<template>
	<li class="add_card">
		<img :src="url" alt="">
	</li>
</template>

<script>
	export default {
		name: 'AddCard',
		props: {
			url:String,
		},
	}
</script>

<style lang="scss" scoped>

	.add_card {
		max-width: 100%;
		height: 100%;
		display: inline-block;
		flex-shrink: 0;
		img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			object-position: center;
		}
	}
</style>