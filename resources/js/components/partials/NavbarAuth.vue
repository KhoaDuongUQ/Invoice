<template>
<nav class="navbar is-family-sans-serif">
    <div class="container">

        <div class="navbar-brand">
            <a class="navbar-item" :href="homeRoute">
              <span class="logo">Invoice</span>
            </a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>
        </div>

        <div class="navbar-menu">
            <div class="navbar-end">
                <a :href="homeRoute" class="navbar-item">Home</a>
                <a :href="storesRoute" class="navbar-item">Stores</a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link"> {{ user.name }} </a>

                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" :href="dashboardRoute">
                              <span>
                                <i class="fas fa-fw fa-bell m-r-5"></i>
                              </span> Dashboard
                            </a>
                        <a class="navbar-item" :href="profileRoute">
                              <span>
                                <i class="fas fa-fw fa-user-circle m-r-5"></i>
                              </span> Profile
                            </a>

                        <hr class="navbar-divider">

                        <logout-button :logout-route="logoutRoute" :csrf-token="csrfToken">
                        </logout-button>
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
        storesRoute: {
            type: String,
            required: true,
        },
        logoutRoute: {
            type: String,
            required: true,
        },
        dashboardRoute: {
            type: String,
            required: true,
        },
        profileRoute: {
            type: String,
            required: true,
        },
        logoUrl: {
            type: String,
            required: true,
        },
        userProps: {
            type: String,
            required: true
        },
        csrfToken: {
            type: String,
            required: true
        },
    },
    computed: {
        user() {
            return JSON.parse(this.userProps);
        }
    }
}
</script>

<style scoped>

</style>
