<template>
<div class="container">
	<div class="columns">
		<div class="column is-one-third is-offset-one-third">
			<div class="card">
				<div class="card-content">
					<h1 class="title"> Edit item information </h1>

					<nav class="level">
						<div class="level-item has-text-centered">
							<figure class='image is-128x128'><img class="is-rounded" :src="item.image.url"></figure>
						</div>
					</nav>

					<form :action="route('stores.items.update',[store.id, item.id])" method="post" role="form" enctype="multipart/form-data">
						<input type="hidden" name="_token" :value="csrfToken">
						<input type="hidden" name="_method" value="PUT">

						<b-field label="Name" :type="errors.name ? 'is-danger': ''" :message="errors.name ? errors.name[0] : ''">
							<b-input v-model="item.name" name="name" icon-pack="fas" icon="item">
							</b-input>
						</b-field>

						<b-field label="Description" :type="errors.address ? 'is-danger': ''" :message="errors.address ? errors.address[0] : ''">
							<b-input v-model="item.description" name="description" icon-pack="fas" icon="location-arrow">
							</b-input>
						</b-field>

						<b-field label="Price" :type="errors.description ? 'is-danger': ''" :message="errors.description ? errors.description[0] : ''">
							<b-input v-model="item.price" type="number" step="any" name="price" icon-pack="fas" icon="info-circle">
							</b-input>
						</b-field>

						<b-field class="file" :type="errors.image ? 'is-danger': ''" :message="errors.image ? errors.image[0] : ''">
							<b-upload v-model="file" name="image">
								<a class="button is-info">
                           <b-icon icon="upload"></b-icon>
                           <span>Store image upload</span>
                       </a>
							</b-upload>
							<span class="file-name" v-if="file">
                       {{ file.name }}
                     </span>
						</b-field>

						<b-field grouped position="is-centered">
							<p class="control">
								<button type="submit" name="button" class="button is-primary"> Save </button>
							</p>
						</b-field>

					</form>
				</div>
			</div>


		</div>
	</div>
</div>
</template>

<script>
export default {
	props: {
		csrfToken: String,
		store: Object,
		item: Object,
		errors: Object
	},
	data() {
		return {
			file: null
		}
	}
}
</script>

<style lang="css" scoped>
</style>
