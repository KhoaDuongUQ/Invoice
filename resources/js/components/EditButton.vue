<template >
<a :href="deleteRoute" class="button is-small is-primary">
  <span class="icon is-small">
    <i class="fas fa-edit"></i>
  </span>
  <span>Edit</span>
</a>
</template>

<script>
export default {
    props: {
        deleteRoute: String
    }
}
</script>

<style scoped>
</style>
