<template>
    <div class="container-categories">
        <div class="categories">

            <div class="icon">
                {{icon}}
            </div>

            <span class="category-name">
                {{name}}
            </span>
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
    justify-content: center;
    align-items: center;
    flex-direction: column;

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