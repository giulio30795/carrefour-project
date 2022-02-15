<template>
  
    <section>

        <div class="scroll_container">

            <ul class="ContainerForCategory categorySlides">
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
    name:  'Categories',
    components: {

        CardForCategories,
    },
    props: {
		categories: Array,
	},
    data() {
        return {
            carouselScroll: 0,
            carousel: document.querySelector('.categorySlides'),
        }
    },
    created() {

    },
    methods: {

        carouselScrollTo(quantity) {
            let carousel = document.querySelector('.categorySlides');
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
            console.log(this.$refs.productsSlide);
        },
        
    }

}
</script>

<style lang="scss" scoped>

.scroll_container{
    padding: 0 20px;
    position: relative;
}

.prev, .next{
    position: absolute;
    background-color: #0970e5;
    transform: translateY(-50%);
    padding: 8px 14px;
    border-radius: 50%;
    color: white;
}
.prev{
    top: 50%;
    left: 20px;
}
.next{
    top: 50%;
    right: 20px;
}


.ContainerForCategory{
    display: flex;
    overflow-x: scroll;
    -ms-overflow-style: none;
    scrollbar-width: none;
    box-shadow: inset 50px 2px 50px -6px white;

    &::-webkit-scrollbar {
        display: none;
    }

    li{
        list-style: none;
    }
}

.categorySlides {
		display: flex;
		flex-wrap: nowrap;
		align-items: stretch;
		overflow-x: auto;
		// hiding scrollbars
		-ms-overflow-style: none;
		scrollbar-width: none;
		// //hiding scrollbars
		&::-webkit-scrollbar {
			display: none;
		}
}
</style>