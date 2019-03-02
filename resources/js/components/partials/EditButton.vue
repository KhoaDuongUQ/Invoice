<template >
<a :href="editRoute" class="button is-small is-primary">
  <span class="icon is-small">
    <i class="fas fa-edit"></i>
  </span>
  <span>Edit</span>
</a>
</template>

<script>
export default {
    props: {
        editRoute: String
    }
}
</script>

<style scoped>
</style>
