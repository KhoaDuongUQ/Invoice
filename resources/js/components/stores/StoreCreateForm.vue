<template>
<div class="card">
    <div class="card-content">
        <h1 class="title"> Create a new store </h1>

        <form :action="createRoute" method="post" role="form" enctype="multipart/form-data">
            <input type="hidden" name="_token" :value="csrfToken">

            <b-field label="Name" :type="errors.name ? 'is-danger': ''" :message="errors.name ? errors.name[0] : ''">
                <b-input placeholder="Store name" name="name" icon-pack="fas" icon="store">
                </b-input>
            </b-field>

            <b-field label="Address" :type="errors.address ? 'is-danger': ''" :message="errors.address ? errors.address[0] : ''">
                <b-input placeholder="Store address" name="address" icon-pack="fas" icon="location-arrow">
                </b-input>
            </b-field>

            <b-field label="Description" :type="errors.description ? 'is-danger': ''" :message="errors.description ? errors.description[0] : ''">
                <b-input type="textarea" placeholder="Store description" name="description" icon-pack="fas" icon="info-circle">
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
                    <button type="submit" name="button" class="button is-primary"> Create </button>
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
        createRoute: {
            type: String,
            required: true,
        },
        csrfToken: {
            type: String,
            required: true,
        },
        previousUrl: {
            type: String,
            required: true,
        },
        errorsProps: {
            type: String,
            required: true,
        },
    },
    data() {
        return {
            file: null,
            errors: JSON.parse(this.errorsProps)
        }
    }
}
</script>

<style scoped>
</style>
