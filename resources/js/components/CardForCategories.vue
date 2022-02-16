<template>
	<div class="container-categories">
		<div class="categories">
			<div v-html="icon" class="icon"></div>
			<div class="category-name">
					{{name}}
			</div>
		</div>
	</div>
</template>

<script>
export default {

		name: 'CardForCategories',
		props: {
		icon: String,
		name: String,
	},

}
</script>

<style lang="scss" scoped>

.container-categories{
		padding: 10px;
}

.categories{
		width: 100px;
		height: 100px;
		border-radius: 10px;
		background-color: white;
		box-shadow: 6px 8px 50px -20px rgba(0,0,0,0.30);
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		cursor: pointer;
		transition: all .2s ease-in-out;
		&:hover {
				transform: translateY(-15px);
		}

		.icon{
				margin-bottom: 3px;
				font-size: 26px;
		}
		.category-name{
				font-size: 14px;
				text-align: center;
		}
}

</style>