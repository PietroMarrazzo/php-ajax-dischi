import Vue from 'vue';
import axios from 'axios';

const app = new Vue({
    el: '#app',

    data: {
        albums: [],
    },

    created() {
        // get album from server
        axios.get('http://localhost/php-ajax-dischi/data/database-ajax.php')
        .then(response => {
            // handle success
            console.log(response.data);
            this.albums = response.data;
        })
        .catch(error => {
            // handle error
            console.log(error);
        });
    }
});