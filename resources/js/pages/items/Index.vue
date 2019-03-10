<template>
<div class="container is-fluid">
	<div class="columns is-centered">
		<div class="column is-half">
			<flash-message :message="flashMessage"></flash-message>
		</div>
	</div>

	<div class="columns">
		<div class="column is-9 content">
			<div class="media" v-for="item in items">
				<div class="media-left">
					<figure class='image is-64x64'><img :src='item.image.url'></figure>
				</div>
				<div class="media-content">
					<h4> <a :href="route('stores.items.show', [store.id, item.id])"> {{ item.name }} </a></h4>
					<span class="tag is-light"> Created {{ item.created_at }} </span>
				</div>
				<div class="media-right buttons">
					<a class="button is-primary is-small" :href="route('stores.items.edit', [store.id, item.id])">
            <b-icon pack="fas" icon="edit"></b-icon>
            <span>Edit</span>
          </a>
					<delete-button object-name="item" :delete-route="route('stores.items.destroy', [store.id, item.id])" :csrf-token="csrfToken">
					</delete-button>
				</div>
			</div>
		</div>
		<div class="column is-3">
			<a :href="route('stores.items.create', [store.id])" class="button is-info"> New item </a>
		</div>
	</div>
</div>
</template>

<script>
export default {
	props: {
		flashMessage: String,
		csrfToken: String,
		store: Object,
		items: Array
	}
}
</script>

<style scoped>
</style>
