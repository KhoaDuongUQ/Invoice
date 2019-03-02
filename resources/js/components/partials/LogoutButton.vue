<template>
<a class="navbar-item" @click.prevent="confirm">
  <span>
    <i class="fas fa-fw fa-sign-out-alt"></i>
  </span> Logout
  <form :action="logoutRoute" method="post" ref="logoutForm">
      <input type="hidden" name="_token" :value="csrfToken">
  </form>
</a>
</template>

<script>
export default {
    props: {
        logoutRoute: {
            type: String,
            required: true,
        },
        csrfToken: {
            type: String,
            required: true,
        }
    },
    methods: {
        confirm: function(event) {
            this.$dialog.confirm({
                title: 'Logout',
                message: 'Are you sure you want to <b>logout</b> ?',
                confirmText: 'Logout',
                type: 'is-danger',
                hasIcon: true,
                size: 'is-small',
                onConfirm: () => {
                    this.$refs.logoutForm.submit();
                }
            })
        }
    }
}
</script>

<style scoped>
</style>
