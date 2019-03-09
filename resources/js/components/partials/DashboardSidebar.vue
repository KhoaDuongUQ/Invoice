<template>
<aside class="box m-t-20">
    <div class="level">
        <div class="level-left">
            <p class="level-item subtitle is-5">
                <strong> {{ storesCount }} </strong> &nbsp; Stores
            </p>
        </div>
        <div class="level-right">
            <a class="level-item button is-small is-primary" :href="createStoreRoute">
            <span class="icon is-small">
              <i class="fas fa-store"></i>
            </span>
            <span>New</span>
          </a>
        </div>
    </div>
    <div class="field">
        <p class="control has-icons-left">
            <input class="input" type="text" placeholder="Find a store" v-model="searchString">
            <span class="icon is-small is-left">
              <i class="fas fa-search"></i>
            </span>
        </p>
    </div>
    <div class="card">
        <ul class="card-content">
            <ul class="">
                <li v-for="store in filteredStores" :key="store.id">
                    <div class="media">
                        <span class="media-left icon">
                          <i class="fas fa-store"></i>
                        </span>
                        <a class="media-content has-text-weight-semibold" :href="'users/'+user.id+'/stores/'+store.id"> {{ store.name }}</a>
                    </div>
                </li>
            </ul>
        </ul>
    </div>
</aside>
</template>

<script>
export default {
    props: {
        storesCount: Number,
        storesProps: String,
        userProps: String,
        createStoreRoute: String
    },
    data() {
        return {
            stores: JSON.parse(this.storesProps),
            user: JSON.parse(this.userProps),
            searchString: ''
        }
    },
    computed: {
        filteredStores: function() {
            const searchString = this.searchString.toLowerCase();
            return this.stores.filter(item => item.name.toLowerCase().includes(searchString));
        }
    }
}
</script>

<style scoped>
</style>
