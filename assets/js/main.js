const app = new Vue({
    el: '#app',
    data: {
        disks: null,
        error: null,
    },
    mounted() {
        /* api call  */
        axios
            .get('assets/api/disks.php')
            .then(response => {
                /* get api data */
                this.disks = response.data
            }).catch(error => {
                /* catch api error */
                this.error = error
                console.log(this.error);
            })
    }
})