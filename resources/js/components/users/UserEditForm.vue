<template>
<div class="card m-t-100">
    <div class="card-content">
        <h1 class="title"> Edit account information </h1>

        <nav class="level">
            <div class="level-item has-text-centered">
                <figure class='image is-128x128'><img class="is-rounded" :src="imageUrl"></figure>
            </div>
        </nav>

        <form :action="editRoute" method="post" role="form" enctype="multipart/form-data">
            <input type="hidden" name="_token" :value="csrfToken">
            <input type="hidden" name="_method" value="PUT">

            <b-field label="Name" :type="errors.name ? 'is-danger': ''" :message="errors.name ? errors.name[0] : ''">
                <b-input v-model="user.name" name="name" icon-pack="fas" icon="user">
                </b-input>
            </b-field>

            <b-field label="Email" :type="errors.email ? 'is-danger': ''" :message="errors.email ? errors.email[0] : ''">
                <b-input v-model="user.email" name="email" icon-pack="fas" icon="envelope">
                </b-input>
            </b-field>


            <b-field class="file" :type="errors.image ? 'is-danger': ''" :message="errors.image ? errors.image[0] : ''">
                <b-upload v-model="file" name="image">
                    <a class="button is-info">
                       <b-icon icon="upload"></b-icon>
                       <span>Store image upload</span>
                   </a>
                </b-upload>
                <span class="file-name" v-if="file">
                   {{ file.name }}
                 </span>
            </b-field>

            <b-field grouped position="is-centered">
                <p class="control">
                    <button type="submit" name="button" class="button is-primary"> Save </button>
                </p>

                <p class="control">
                    <a class="button is-light" :href="previousUrl"> Cancel </a>
                </p>
            </b-field>

        </form>
    </div>
</div>
</template>

<script>
export default {
    props: {
        imageUrl: {
            type: String,
            required: true,
        },
        editRoute: {
            type: String,
            required: true,
        },
        csrfToken: {
            type: String,
            required: true,
        },
        errorsProps: {
            type: String,
            required: true,
        },
        userProps: {
            type: String,
            required: true,
        },
        previousUrl: {
            type: String,
            required: true,
        }
    },
    data() {
        return {
            file: null,
            errors: JSON.parse(this.errorsProps),
            user: JSON.parse(this.userProps),
        }
    }
}
</script>

<style scoped>
</style>
