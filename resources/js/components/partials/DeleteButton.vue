<template >
<form custom :action="deleteRoute" method="POST" ref="deleteForm">
    <input type="hidden" name="_token" :value="csrfToken">
    <input type="hidden" name="_method" value="DELETE">
    <p class="control">
        <button type="submit" class="button is-small is-danger" @click="confirm($event, objectName)">
            <span class="icon is-small">
              <i class="far fa-times-circle"></i>
            </span>
            <span>Delete</span>
          </button>
    </p>
</form>
</template>

<script>
export default {
    props: {
        deleteRoute: String,
        csrfToken: String,
        objectName: String,
    },
    methods: {
        confirm: function(event, objectName) {
            this.$dialog.confirm({
                title: 'Deleting ' + objectName,
                message: 'Are you sure you want to <b>delete</b> your ' + objectName + '?',
                confirmText: 'Delete ' + objectName,
                type: 'is-danger',
                hasIcon: true,
                size: 'is-small',
                onConfirm: () => {
                    this.$refs.deleteForm.submit();
                }
            })
            event.preventDefault();
        }
    }
}
</script>

<style scoped>
</style>
