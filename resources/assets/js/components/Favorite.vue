<template>
    <div class="uk-child-width-auto">
        <a class="uk-link-reset" v-if="isFavorited" @click.prevent="unFavorite(post)">
            <span style="color:red;" uk-icon="icon: heart" title="Unlike" uk-tooltip></span>
            <span class="uk-text-meta uk-text-small"> {{likes}}</span>
        </a>
        <a class="uk-link-reset" v-else @click.prevent="favorite(post)">
            <span uk-icon="icon: heart" title="Like" uk-tooltip></span>
            <span class="uk-text-meta uk-text-small"> {{likes}} </span>
        </a>
    </div>
</template>

<script>
    export default {
        props: ['post', 'favorited' ,'likes'],

        data: function() {
            return {
                isFavorited: '',
                count : 0,
            }
        },

        mounted() {
            this.isFavorited = this.isFavorite ? true : false;
        },

        computed: {
            isFavorite() {
                return this.favorited;
            },
        },

        methods: {
            favorite(post) {

                        axios.post('/favorite/'+post)
                            .then(response => this.isFavorited = true);
                            // .catch(response => console.log(response.data));
                        this.likes++;
                        this.count++;

            },

            unFavorite(post) {
                        
                        axios.post('/unfavorite/'+post)
                            .then(response => this.isFavorited = false);
                            // .catch(response => console.log(response.data));
                        this.likes--;
                        this.count--;
                
            }
        }
    }
</script>