<template>
<nav class="navbar">
    <div class="container">

        <div class="navbar-brand">
            <a class="navbar-item" :href="homeRoute">
              <img :src="logoUrl" width="112" height="28">
            </a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>
        </div>

        <div class="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a :href="registerRoute" class="button is-small">
          							<span class="icon">
          								<i class="fa fa-user-plus"></i>
          							</span>
          							<span>Register</span>
          						</a>
                        <a :href="loginRoute" class="button is-small is-info is-outlined">
          							<span class="icon">
          								<i class="fa fa-user"></i>
          							</span>
          							<span>Login</span>
          						</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</nav>
</template>

<script>
export default {
    props: {
        homeRoute: {
            type: String,
            required: true,
        },
        registerRoute: {
            type: String,
            required: true,
        },
        loginRoute: {
            type: String,
            required: true,
        },
        logoutRoute: {
            type: String,
            required: true,
        },
        logoUrl: {
            type: String,
            required: true,
        },
        csrfToken: {
            type: String,
            required: true
        },
    },
    computed: {
        user() {
            return JSON.parse(this.userProps) || '';
        }
    }
}
</script>

<style scoped>
</style>
