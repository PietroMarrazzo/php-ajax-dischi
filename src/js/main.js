import Vue from 'vue';
import axios from 'axios';

const app = new Vue({
    el: '#app',

    data: {

    },

    created() {
        // get album from server
        axios.get('http://localhost/php-ajax-dischi/data/database-ajax.php')
        .then(response => {
            // handle success
            console.log(response.data);
        })
        .catch(error => {
            // handle error
            console.log(error);
        });
    }
});