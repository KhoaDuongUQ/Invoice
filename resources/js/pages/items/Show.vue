<template >
<div class="container is-fluid">
	<div class="columns is-centered">
		<div class="column is-half">
			<flash-message :message="flashMessage"></flash-message>
		</div>
	</div>

	<div class="columns is-centered">
		<div class="column is-4">
			<div class="card">

				<div class="card-image">
					<nav class="level">
						<div class="level-item has-text-centered">
							<figure class='image is-128x128'><img class="is-rounded" :src="item.image.url"></figure>
						</div>
					</nav>
				</div>

				<div class="card-content">
					<div class="content">
						<p class="title is-4"> {{item.name}} </p>
						<p class="subtitle is-6 has-text-grey-light is-italic">Created {{item.created_at}} </p>
						<h5>Description</h5>
						<blockquote>{{item.description}}</blockquote>
						<h5>Price</h5>
						<blockquote>{{item.price}}</blockquote>
					</div>
				</div>

				<footer class="card-footer">
					<div class="card-footer-item buttons is-centered">
						<a class="button is-primary is-small" :href="route('stores.items.edit', [store.id, item.id])">
              <b-icon pack="fas" icon="edit"></b-icon>
              <span>Edit</span>
            </a>
						<delete-button object-name="item" :delete-route="route('stores.items.destroy', [store.id, item.id])" :csrf-token="csrfToken">
						</delete-button>
					</div>
				</footer>

			</div>
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
		item: Object
	}
}
</script>

<style lang="css" scoped>
</style>
