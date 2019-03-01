<template>
<section>
    <b-message title="Success" type="is-success" has-icon :active.sync="show">
        {{ body }}
    </b-message>
</section>
</template>

<script>
export default {
    props: {
        message: String
    },
    data() {
        return {
            body: "",
            show: false,
        }
    },
    created() {
        if (this.message) {
            this.body = this.message;
            this.show = true;
        }
    }
}
</script>

<style scoped>
</style>
