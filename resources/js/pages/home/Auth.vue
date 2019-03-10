<template>
<div class="container is-fluid">
	<div class="columns">
		<div class="column is-3">
			<dashboard-sidebar :user="this.user" :stores="this.stores">
			</dashboard-sidebar>
		</div>
	</div>
</div>
</template>

<script>
import DashboardSidebar from '@/js/components/home/auth/DashboardSidebar.vue'
export default {
	props: {
		user: Object,
		stores: Array
	},
	components: {
		DashboardSidebar
	}
}
</script>

<style scoped>
</style>
