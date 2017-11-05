<template>
    <div class="uk-child-width-auto" >

        <div v-if="isLogged">
            <a class="uk-link-reset" v-if="isFavorited" @click.prevent="unFavorite(post)">
                <span style="color:red;" uk-icon="icon: heart" title="Unlike" uk-tooltip></span>
                <span class="uk-text-meta uk-text-small"> {{likes}}</span>
            </a>
            <a class="uk-link-reset" v-else @click.prevent="favorite(post)">
                <span uk-icon="icon: heart" title="Like" uk-tooltip></span>
                <span class="uk-text-meta uk-text-small"> {{likes}} </span>
            </a>
        </div>
        <div v-else>
            <a href="/login" class="uk-link-reset">
                <span uk-icon="icon: heart" title="Like" uk-tooltip></span>
                <span class="uk-text-meta uk-text-small"> {{likes}} </span>
            </a>
        </div>
        
    </div>

</template>

<script>
    export default {
        props: ['post', 'favorited' ,'likes','user'],

        data: function() {
            return {
                isFavorited: '',
                count : 0,
                isLogged: '',
            }
        },

        mounted() {
            this.isFavorited = this.isFavorite ? true : false;
            this.isLogged = this.isLogin ? true : false ;
        },

        computed: {
            isFavorite() {
                return this.favorited;
            },

            isLogin() {

                return this.user;
            }
        },

        methods: {
            favorite(post) {

                        if (this.count <1 ) {

                            axios.post('/favorite/'+post)
                                .then(response => this.isFavorited = true);
                                // .catch(response => console.log(response.data));
                            this.likes++;
                            this.count++;
                        }

            },

            unFavorite(post) {
                        
                        if (this.count >=0 ) {

                            axios.post('/unfavorite/'+post)
                                .then(response => this.isFavorited = false);
                                // .catch(response => console.log(response.data));
                            this.likes--;
                            this.count--;
                        }
                
            },

        }
    }
</script>