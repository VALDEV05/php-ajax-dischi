const app = new Vue({
    el: '#app',
    data: {
        disks: null,
        error: null,
    },
    mounted() {
        axios
            .get('assets/api/disks.php')

        .then(response => {
            this.disks = response.data
            console.log(this.disks);
        }).catch(error => {
            this.error = error
            console.log(this.error);
        })
    }
})