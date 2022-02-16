<template>
	<div class="add_carousel">
		<div class="heading">
			<h2 class="section_title">I Nostri Partner</h2>
			<div class="nav_btns">
					<div class="prev_wrap" @click="carouselScrollTo(-500)">
						<i class="fa-solid fa-chevron-left prev" ></i>
					</div>
					<div class="next_wrap" @click="carouselScrollTo(500)">
						<i class="fa-solid fa-chevron-right next" ></i>
					</div>
			</div>
		</div>
		<ul class="addslides" ref="addsSlide">
			<AddCard
			v-for="(add, i) in adds"
			:key="`add_${i}`"
			:url="add.cover"
			/>
		</ul>
	</div>
</template>

<script>
import AddCard from "./AddCard.vue";
export default {
	name: 'AddCarousel',
	data() {
		return {
			carouselScroll: 0,
			carousel: document.querySelector('.addslides'),
			
		}
	},

	components: {
		AddCard,
	},
	props: {
		adds:Array,
	},
	methods: {
		carouselScrollTo(quantity) {
			let carousel = document.querySelector('.addslides');
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
		},
	},
	// TODO - computed da usare per una classe dinamica disabled sui tasti per lo scroll
}
</script>

<style lang="scss" scoped>
@import '../../sass/app.scss';

.add_carousel {
	width: 80%;
	padding-bottom: 2.5rem;
	border-bottom: 1px solid $disabled-bg;
	margin: 2rem auto;
	.heading {
	display: flex;
	align-items: center;
	justify-content: space-between;
	margin-bottom: 2rem;
		.section_title {
			color: $primary-400;
		}
		.nav_btns {
			display: flex;
			align-items: center;
			justify-content: flex-end;
			.prev_wrap,
			.next_wrap {
				cursor: pointer;
				padding: 1rem;
				aspect-ratio: 1;
				border-radius: 50%;
				display: grid;
				place-content: center;
				background-color: $enabled;
				color: $clear-100;
				box-shadow: 0 0 8px rgba($dark-900, .3);
				margin-left: 2.5rem;
				&.disabled {
					background-color: $disabled-bg;
					pointer-events: none;
				}
			}
		}
	}
	.addslides {
		display: flex;
		flex-wrap: nowrap;
		height: 250px;
		padding-inline: 0;
		overflow-x: auto;
		-ms-overflow-style: none;
		scrollbar-width: none;
		&::-webkit-scrollbar {
			display: none;
		}
	}
}
</style>