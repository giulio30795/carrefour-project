<template>
  
	<section>

		<div class="scroll_container">

			<ul class="ContainerForCategory">
				<li v-for="(category, i) in categories" :key="`category_${i}`">

					<CardForCategories 
					:icon="category.icon"
					:name="category.name"
					/>
				</li>

			</ul>
			<span class="prev" @click="carouselScrollTo(-90)">
				<i class="fa-solid fa-chevron-left" ></i>
			</span>
			<span class="next" @click="carouselScrollTo(90)">
				<i class="fa-solid fa-chevron-right" ></i>
			</span>
		</div>

	</section>

</template>

<script>
import CardForCategories from "./CardForCategories"

export default {
	name: 'Categories',
	components: {

		CardForCategories,
	},
	props: {
		categories: Array,
	},

	data() {
		return {
			carouselScroll: 0,
			carousel: document.querySelector('.ContainerForCategory'),
		}
	},
	methods: {

		carouselScrollTo(quantity) {
			let carousel = document.querySelector('.ContainerForCategory');
			let scrolled = carousel.scrollLeft;
			console.log(carousel);

			if (quantity < 0 && scrolled + (quantity) < 0) {
				carousel.scroll({
					left: 0,
					behavior: 'smooth',
				});
			} else if (quantity > 0 && scrolled + (quantity) > carousel.scrollLeftMax) {
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
		},
	}
}
</script>

<style lang="scss" scoped>
@import '../../sass/app.scss';

.scroll_container{
	position: relative;
	background-color: $clear-100;
	padding-inline: 2.5rem;
	display: flex;
	justify-content: center;
}

.prev, .next{
	position: absolute;
	background-color: $primary-200;
	transform: translateY(-50%);
	padding: 8px 14px;
	border-radius: 50%;
	color: white;
	cursor: pointer;
}
.prev{
	top: 50%;
	left: 20px;
}
.next{
	top: 50%;
	right: 20px;
}

@media screen and (min-width:1589px) {
	.prev, .next {
		display: none;
	}
}


.ContainerForCategory{
	display: flex;
	justify-content: flex-start;
	scrollbar-width: none;
	background-color: $clear-100;
	max-width: 90%;
	flex-wrap: nowrap;
	align-items: center;
	overflow-x: auto;
	// hiding scrollbars;
	-ms-overflow-style: none;
	scrollbar-width: none;
	//hiding scrollbars
	&::-webkit-scrollbar {
		display: none;
	}

	li{
		list-style: none;
	}
}
</style>