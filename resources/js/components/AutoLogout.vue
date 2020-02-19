<template>
    <div v-if = "warningZone" class="text-center font-weight-bold">Are you still there?</div>
</template>

<script>
    export default {
        name: "AutoLogout",

        data: function(){
            return {
                events : ['click' , 'mousemove' , 'mousedown' , 'scroll' , 'keypress', 'load'],
                warningTimer: null,
                logoutTimer: null,
                warningZone: false,

            }
        },

        mounted() {
            this.events.forEach(function(event){
               window.addEventListener(event , this.resetTimer);
            }, this);

            this.setTimers();
        },

        destroyed() {
            this.events.forEach(function(event){
                window.removeEventListener(event , this.resetTimer);
            }, this);

            this.resetTimer();
        },

        methods: {

            setTimers: function(){
                this.waringTimer = setTimeout(this.warningMessage, 14 * 60 * 1000);
                this.logoutTimer = setTimeout(this.logoutUser, 15 * 60 * 1000);

                this.warningZone = false;
            },

            warningMessage: function(){
              this.warningZone = true;
            },

            logoutUser: function(){
                document.getElementById('logout-form').submit();


            },

            resetTimer: function () {
                clearTimeout(this.warningTimer);
                clearTimeout(this.logoutUser);

                this.setTimers();

            }
        }

    }

</script>

<style scoped>

</style>
