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
		width: calc((100% - 60px) / 4);
		height:100px;
		margin-inline: 5px;
		margin-bottom: 10px;
		padding: 10px;
		list-style-type: none;
		border-radius: 5px;
	}
</style>