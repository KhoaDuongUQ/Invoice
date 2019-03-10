<template>
<div class="container">
	<div class="columns is-centered">
		<div class="column is-half">
			<flash-message :message="flashMessage"></flash-message>
		</div>
	</div>

	<div class="columns">
		<div class="column is-9 content">
			<div class="media" v-for="store in stores">
				<div class="media-left">
					<figure class='image is-64x64'><img :src="store.image.url"></figure>
				</div>
				<div class="media-content">
					<h4> <a :href="route('users.stores.show',[user.id,store.id])"> {{ store.name }} </a></h4>
					<span class="tag is-light"> Created {{ store.created_at }} </span>
				</div>
				<div class="media-right buttons is-centered">
					<a class="button is-primary is-small" :href="route('users.stores.edit', [user.id, store.id])">
            <b-icon pack="fas" icon="edit"></b-icon>
            <span>Edit</span>
        	</a>
					<delete-button object-name="store" :delete-route="route('users.stores.destroy', [user.id, store.id])" :csrf-token="csrfToken">
					</delete-button>
				</div>
			</div>
		</div>
		<div class="column is-3">
			<a :href="route('users.stores.create', [user.id])" class="button is-info"> New store </a>
		</div>
	</div>
</div>
</template>

<script>
export default {
	props: {
		flashMessage: String,
		csrfToken: String,
		user: Object,
		stores: Array
	}
}
</script>

<style scoped>
</style>
