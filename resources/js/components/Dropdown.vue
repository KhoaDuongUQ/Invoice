<template>
<section>
    <b-dropdown position="is-bottom-left">
        <button class="button is-small is-rounded has-background-light" slot="trigger">
        <b-icon
          pack="fas"
          icon="cog"
          size="is-small">
        </b-icon>
        <b-icon
          pack="fas"
          icon="angle-down"
          size="is-small">
        </b-icon>
      </button>
        <b-dropdown-item>
            <a :href="editRoute" class="button is-small is-primary">
              <span class="icon is-small">
                <i class="fas fa-edit"></i>
              </span>
              <span>Edit</span>
            </a>
        </b-dropdown-item>
        <b-dropdown-item>
            <form custom :action="deleteRoute" method="POST" ref="deleteForm">
                <input type="hidden" name="_token" :value="csrfToken">
                <input type="hidden" name="_method" value="DELETE">
                <p class="control">
                    <button type="submit" name="button" class="button is-danger is-small is-overlay" @click="confirm($event, objectName)">
                    <span class="icon is-small">
                      <i class="far fa-times-circle"></i>
                    </span>
                    <span>Delete</span>
                  </button>
                </p>
            </form>
        </b-dropdown-item>
    </b-dropdown>
</section>
</template>

<style scoped>
.tag {
    cursor: pointer;
}
</style>

<script>
export default {
    props: {
        editRoute: String,
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
