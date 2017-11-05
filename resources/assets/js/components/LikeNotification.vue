<template>

    <li>
        <a href="/blog/">
            <!-- {{ user.name }} Liked your story - {{ post.title }}  -->
            Harsh
        </a>
    </li>

</template>


<script>

	export default {
        props: ['userid', 'post'],

        data : function() {
            return {
                userid : this.userid,
                post : this.post,
            }
        },

        mounted() {

            Echo.private('App.User.' + this.userid)
                .notification((notification) => {
                    console.log(notification.type);
                });
        }
    }

</script>