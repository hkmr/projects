<template>

    <div class="uk-child-width-auto">
        <a class="uk-link-reset" v-if="isBookmarked" @click.prevent="unBookmark(post)">
            <span style="color:red" uk-icon="icon: bookmark" title="Unbookmark" uk-tooltip></span>
            <span> {{ bookmarks }} </span>
        </a>

        <a class="uk-link-reset" v-else @click.prevent="bookmark(post)">
            <span  uk-icon="icon: bookmark" title="Bookmark" uk-tooltip></span>
            <span> {{ bookmarks }} </span>
        </a>

    </div>

</template>


<script>

	export default {
        props: ['post', 'bookmarked' ,'bookmarks'],

        data: function() {
            return {
                isBookmarked: '',
            }
        },

        mounted() {
            this.isBookmarked = this.isBookmark ? true : false;
        },

        computed: {
            isBookmark() {
                return this.bookmarked;
            },
        },

        methods: {
            bookmark(post) {

		                axios.post('/bookmark/'+post)
		                    .then(response => this.isBookmarked = true)
		                    .catch(response => console.log(response.data));
	                    this.bookmarks++;

            },

            unBookmark(post) {

		                axios.post('/unbookmark/'+post)
		                    .then(response => this.isBookmarked = false)
		                    .catch(response => console.log(response.data));
                    	
	                    this.bookmarks--;

            }
        }
    }

</script>