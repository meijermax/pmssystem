<template>
    <div class="container">
        <button class="btn btn-primary" @click="followUser">follow me</button>
    </div>
</template>

<script>
    export default {
        props: ['userId'],

        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            followUser() {
                // alert( 'inside' );

                axios.post('/follow/1')
                    .then(response => {
                    });
            }
        }
    }
</script>
