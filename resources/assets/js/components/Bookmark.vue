<template>

    <div class="uk-child-width-auto">
        
        <div v-if="isLogged">
            <a class="uk-link-reset" v-if="isBookmarked" @click.prevent="unBookmark(post)">
                <span style="color:red" uk-icon="icon: bookmark" title="Unbookmark" uk-tooltip></span>
                <span> {{ bookmarks }} </span>
            </a>

            <a class="uk-link-reset" v-else @click.prevent="bookmark(post)">
                <span  uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></span>
                <span> {{ bookmarks }} </span>
            </a>
        </div>
        <div v-else>
            <a href="/login" class="uk-link-reset">
                <span  uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></span>
                <span> {{ bookmarks }} </span>
            </a>
        </div>

    </div>

</template>


<script>

	export default {
        props: ['post', 'bookmarked' ,'bookmarks', 'user'],

        data: function() {
            return {
                isBookmarked: '',
                count : 0,
                isLogged: '',
            }
        },

        mounted() {
            this.isBookmarked = this.isBookmark ? true : false;
            this.isLogged = this.isLogin ? true : false ;
        },

        computed: {
            isBookmark() {
                return this.bookmarked;
            },
            isLogin() {

                return this.user;
            }
        },

        methods: {
            bookmark(post) {

                        if (this.count < 1) {

    		                axios.post('/bookmark/'+post)
    		                    .then(response => this.isBookmarked = true);
    		                    // .catch(response => console.log(response.data));
    	                    this.bookmarks++;
                            this.count++;
                        }

            },

            unBookmark(post) {

                        if (this.count >0) {

    		                axios.post('/unbookmark/'+post)
    		                    .then(response => this.isBookmarked = false)
    		                    .catch(response => console.log(response.data));
                        	
    	                    this.bookmarks--;
                            this.count--;
                        }

            }
        }
    }

</script>