<template>
    <div>
        <button class="btn btn-light pr-5 pl-5 " @click="likeUser" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {
        name: "LikeButton",

        props: ['userId','likes'],

        data: function(){
          return {
              status: this.likes,
          }
        },

        methods: {
            likeUser() {
                axios.post('/like/1')
                .then(response => {
                    this.status = ! this.status;
                    console.log(response.data);
                })

                    .catch(errors => {
                        if(errors.response.status === 401) {
                            window.location = '/login';
                        }

                    });

            }
        },

        computed:{
            buttonText() {
                return (this.status) ? 'Liked' : 'Like';
            }
        }

    }
</script>

<style scoped>

</style>
