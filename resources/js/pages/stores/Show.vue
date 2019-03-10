<template>
<div class="container is-fluid">
	<div class="columns is-centered">
		<div class="column is-half">
			<flash-message :message="flashMessage"></flash-message>
		</div>
	</div>

	<div class="columns">

		<div class="column is-4">
			<div class="card">
				<div class="card-image">
					<nav class="level">
						<div class="level-item has-text-centered">
							<figure class='image is-128x128'><img class="is-rounded" :src="store.image.url"></figure>
						</div>
					</nav>
				</div>
				<div class="card-content">
					<div class="content">
						<h5>Name</h5>
						<blockquote>{{store.name}}</blockquote>

						<h5>Address</h5>
						<blockquote>{{store.address}}</blockquote>

						<h5>Description</h5>
						<blockquote>{{store.description}}</blockquote>

					</div>
				</div>

				<footer class="card-footer">
					<div class="card-footer-item buttons is-centered">
						<a class="button is-primary is-small" :href="route('users.stores.edit', [user.id, store.id])">
              <b-icon pack="fas" icon="edit"></b-icon>
              <span>Edit</span>
            </a>
						<delete-button object-name="store" :delete-route="route('users.stores.destroy', [user.id, store.id])" :csrf-token="csrfToken">
						</delete-button>
					</div>
				</footer>
			</div>
		</div>

		<div class="column is-8">
			<nav class="level">
				<div class="level-left">
					<div class="level-item">
						<p class="subtitle is-5">
							<strong> {{ items.length }} </strong> items
						</p>
					</div>
					<div class="level-item">
						<b-field>
							<b-input placeholder="Search..." type="search" icon="magnify">
							</b-input>
							<p class="control">
								<button class="button is-primary">Search</button>
							</p>
						</b-field>
					</div>
				</div>

				<div class="level-right">
					<div class="level-item">
						<a class="button is-primary" :href="route('stores.items.create', [store.id])"> New item </a>
					</div>
				</div>
			</nav>

			<div class="card stores-card">
				<header class="card-header">
					<p class="card-header-title">
						Items
					</p>
				</header>
				<div class="card-content">
					<table class="table is-fullwidth is-bordered is-striped">
						<thead>
							<tr>
								<th> Image </th>
								<th> Name </th>
								<th> Description </th>
								<th> Price </th>
								<th> Date Created </th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="item in items">
								<td>
									<figure class='image is-48x48'><img :src="item.image.url"></figure>
								</td>
								<td> <a :href="route('stores.items.show',[store.id,item.id])"> {{ item.name }} </a> </td>
								<td> {{ item.description }} </td>
								<td> {{ item.price }} </td>
								<td> {{ item.created_at }} </td>
							</tr>
						</tbody>

					</table>
				</div>
				<footer class="card-footer">
					<a :href="route('stores.items.index',[store.id])" class="button is-info card-footer-item">View All</a>
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
		user: Object,
		store: Object,
		items: Array
	}
}
</script>

<style scoped>
</style>
