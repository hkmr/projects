<template>
	
	<div>
		<div v-if="isFollowed">
            <button class="uk-button uk-button-default uk-button-small" @click.prevent="unfollow(category)">
                <span style="color:green" uk-icon="icon:check"></span> FOLLOWING
            </button><br>
            <span class="uk-text-meta"> {{ followers }} Following </span>      
        </div>
        
        <div v-else>
            <button class="uk-button uk-button-default uk-button-small" @click.prevent="follow(category)">FOLLOW
            </button><br>
            <span class="uk-text-meta uk-text-center"> {{ followers }} Following</span>
        </div>

	</div>

</template>

<script>
	
	export default {
        props: ['category', 'followed', 'followers'],

        data: function() {
            return {
                isFollowed: '',
                count: 0,
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

                        if (this.count < 1) {

                        axios.post('/follow/'+category)
                            .then(response => this.isFollowed = true)
                            .catch(response => console.log(response.data));
                        this.followers++;
                        this.count++;
                        }

            },

            unfollow(category) {
                        
                        if (this.count > 0) {

                        axios.post('/unfollow/'+category)
                            .then(response => this.isFollowed = false)
                            .catch(response => console.log(response.data));
                        this.followers--;
                        this.count--;
                        }

            }
        }
    }

</script>