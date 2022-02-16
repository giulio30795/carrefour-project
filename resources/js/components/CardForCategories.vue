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
@import '../../sass/_variables.scss';
.container-categories{
	padding: 10px;
	width: 100%;
}

.categories{
	width: 100px;
	aspect-ratio: 1;
	border-radius: 10px;
	background-color: $clear-100;
	box-shadow: 0 0 20px rgba($dark-900, .08);
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	cursor: pointer;
	transition: all .2s ease-in-out;
	color: $disabled-text;
	&:hover {
		transform: translateY(-.8rem);
		color: $enabled;
	}

	.icon{
		margin-bottom: .2rem;
		font-size: 1.5rem;
	}
	.category-name{
		font-size: .8rem;
		text-align: center;
		font-weight: bold;
	}
}

</style>