<template>
	<div>
		<h1>test</h1>
		<div>
			<router-link :to="{name: 'home'}">Home</router-link>
			<router-link :to="{name: 'about'}">About</router-link>
		</div>
		<div>
			<router-view></router-view>
		</div>
	</div>
		
</template>

<script>
export default {

}
</script>