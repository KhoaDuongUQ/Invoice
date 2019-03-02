<template>
<a :href="changePasswordRoute" class="button is-small is-warning">
    <span class="icon is-small">
      <i class="fas fa-key"></i>
    </span>
    <span>Change Password</span>
  </a>
</template>

<script>
export default {
    props: {
        changePasswordRoute: String
    }
}
</script>

<style scoped>
</style>
