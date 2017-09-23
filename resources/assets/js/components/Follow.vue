<template>
	
	<div>
		<div v-if="isFollowed">
            <button class="uk-button uk-button-default uk-button-small" @click.prevent="unfollow(category)">
                <span style="color:green" uk-icon="icon:check"></span> FOLLOWING
            </button>
            <p class="uk-text-meta"> {{ followers }} </p>      
        </div>
        
        <div v-else>
            <button class="uk-button uk-button-default uk-button-small" @click.prevent="follow(category)">FOLLOW
            </button>
            <p class="uk-text-meta"> {{ followers }} </p>
        </div>

	</div>

</template>

<script>
	
	export default {
        props: ['category', 'followed', 'followers'],

        data: function() {
            return {
                isFollowed: '',
            }
        },

        mounted() {
            this.isFollowed = this.isFollow ? true : false;
        },

        computed: {
            isFollow() {
                return this.followed;
            },
        },

        methods: {
            follow(category) {

                        axios.post('/follow/'+category)
                            .then(response => this.isFollowed = true)
                            .catch(response => console.log(response.data));
                        this.followers++;

            },

            unfollow(category) {
                
                        axios.post('/unfollow/'+category)
                            .then(response => this.isFollowed = false)
                            .catch(response => console.log(response.data));
                        this.followers--;

            }
        }
    }

</script>