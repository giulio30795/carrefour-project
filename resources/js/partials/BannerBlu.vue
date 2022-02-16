<template>
	<div class="banner">
		<div class="wrapper">
			<a href="">Lavora con noi</a>
			<ul>
				<li>
					<a href=""><strong>Serve aiuto?</strong></a>
				</li>
				<li>
					<a href="">Volantini</a>
				</li>
				<li>
					<a href=""><i class="fa-solid fa-location-dot me-1"></i>Punti vendita</a>
				</li>
				<li>
					<a href="">Servizi</a>
				</li>
				<li>
					<a href="">Carta Carrefour Findomestic</a>
				</li>
			</ul>
		</div>
	</div>
</template>

<script>
export default {
	name: 'BannerBlu',
}
</script>

<style lang="scss" scoped>
@import '../../sass/_variables.scss';

.banner {
	width: 100%;
	background-color: $primary-400;
	padding: .25rem 2.5rem;
	color: $clear-100;
	font-size: .85rem;
	a {
		color: $clear-100;
		transition: all .2s linear;
		text-decoration: none;
		&:hover {
			color:$enabled;
		}
	}
	.wrapper {
		display: flex;
		justify-content: space-between;
		align-items: center;
		ul {
			display: flex;
			align-items: center;
			margin: 0;
			li {
				margin-left: .5rem;
				display: inline-block;
				&::after {
					content: "|";
					margin-left: .5rem;
					&:last-of-type {
						content: "";
					}
				}

			}
		}
	}
}

// a {
// 	text-decoration: none;
// 	padding: 0 10px;
// 	color: $clear-100;
// 	font-size: .8rem;
// 	&:hover {
// 		color:$enabled;
// 		transition: all .2s linear;
// 	}
// }
// .banner {
// 	width: 100%;
// 	height:30px;
// 	line-height:30px;
// 	background-color: $primary-400;
// 	color: $clear-100;
// 	display: flex;
// 	.wrapper {
// 		width: 100%;
// 		padding-inline: 1.5rem;
// 		display: flex;
// 		justify-content: space-between;
// 		ul {
// 		display: flex;
// 		list-style: none;
// 		}
// 	}
// }

</style>
