<template>
<div class="container">
	<div class="columns">
		<div class="column is-one-third is-offset-one-third">
			<div class="card m-t-100">
				<div class="card-content">

					<h1 class="title"> Log In </h1>

					<form class="" :action="route('login')" method="post" role="form">

						<input type="hidden" name="_token" :value="csrfToken">

						<b-field label="Email" :type="errors.email ? 'is-danger': ''" :message="errors.email ? errors.email[0] : ''">
							<b-input type="email" placeholder="Email" name="email" icon-pack="fas" icon="envelope">
							</b-input>
						</b-field>

						<b-field label="Password" :type="errors.password ? 'is-danger': ''" :message="errors.password ? errors.password[0] : ''">
							<b-input type="password" placeholder="Password" name="password" icon-pack="fas" icon="lock">
							</b-input>
						</b-field>

						<b-checkbox name="remember_me">
							Rememeber Me
						</b-checkbox>

						<button class="button is-primary is-outlined is-fullwidth"> Login </button>
						<a class="button is-info is-small is-outlined m-t-10" :href="route('password.request')"> Forgot Your Password? </a>
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
		errors: Object
	}
}
</script>

<style scoped>
</style>
