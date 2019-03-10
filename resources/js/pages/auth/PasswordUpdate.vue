<template >
<div class="container">
	<div class="columns is-centered">
		<div class="column is-half">

			<flash-message :message="flashMessage"> </flash-message>

			<div class="card">
				<div class="card-content">
					<h1 class="title"> Change password </h1>
					<form :action="route('updatepassword')" method="post" role="form" enctype="multipart/form-data">
						<input type="hidden" name="_token" :value="csrfToken">

						<b-field label="Current Password" :type="errors.current_password ? 'is-danger': ''" :message="errors.current_password ? errors.current_password[0] : ''">
							<b-input type="password" name="current_password" password-reveal></b-input>
						</b-field>

						<b-field label="New Password" :type="errors.new_password ? 'is-danger': ''" :message="errors.new_password ? errors.new_password[0] : ''">
							<b-input type="password" name="new_password" password-reveal></b-input>
						</b-field>

						<b-field label="Confirm New Password" :type="errors.new_password_confirmation ? 'is-danger': ''" :message="errors.new_password_confirmation ? errors.new_password_confirmation[0] : ''">
							<b-input type="password" name="new_password_confirmation" password-reveal></b-input>
						</b-field>


						<b-field grouped position="is-centered">
							<p class="control">
								<button type="submit" name="button" class="button is-primary"> Change Password </button>
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
		flashMessage: String,
		csrfToken: String,
		errors: Object
	}
}
</script>

<style scoped>
</style>
