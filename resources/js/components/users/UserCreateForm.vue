<template>
<div class="card">
    <div class="card-content">

        <h1 class="title"> Register </h1>

        <form class="" :action="registerRoute" method="post" role="form">
            <input type="hidden" name="_token" :value="csrfToken">

            <b-field label="Name" :type="errors.name ? 'is-danger': ''" :message="errors.name ? errors.name[0] : ''">
                <b-input placeholder="Name" name="name" icon-pack="fas" icon="user">
                </b-input>
            </b-field>

            <b-field label="Email" :type="errors.email ? 'is-danger': ''" :message="errors.email ? errors.email[0] : ''">
                <b-input placeholder="Email" name="email" icon-pack="fas" icon="envelope">
                </b-input>
            </b-field>

            <b-field label="Password" :type="errors.password ? 'is-danger': ''" :message="errors.password ? errors.password[0] : ''">
                <b-input type="password" placeholder="Password" name="password" icon-pack="fas" icon="lock">
                </b-input>
            </b-field>

            <b-field label="Password Confirmation" :type="errors.password_confirmation ? 'is-danger': ''" :message="errors.password_confirmation ? errors.password_confirmation[0] : ''">
                <b-input type="password" placeholder="Store password" name="password_confirmation" icon-pack="fas" icon="lock">
                </b-input>
            </b-field>

            <b-field class="file" :type="errors.image ? 'is-danger': ''" :message="errors.image ? errors.image[0] : ''">
                <b-upload v-model="file" name="image">
                    <a class="button is-info">
                 <b-icon icon="upload"></b-icon>
                 <span>Account image upload</span>
             </a>
                </b-upload>
                <span class="file-name" v-if="file">
                  {{ file.name }}
                </span>
            </b-field>


            <button class="button is-primary is-outlined is-fullwidth"> Register </button>
            <a class="button is-info is-small is-outlined" :href="loginRoute"> Already have an account? </a>
        </form>


    </div>
</div>
</template>

<script>
export default {
    props: {
        registerRoute: {
            type: String,
            required: true,
        },
        csrfToken: {
            type: String,
            required: true,
        },
        loginRoute: {
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
