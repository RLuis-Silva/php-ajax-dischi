/**
 * albums
 */

 const app = new Vue({
     el: '#app',
     data: {
        albums: [],
        artists: [],
        filterArtist: 'all'
     },
     created(){
        // la chiamata GET request
        axios.get('http://localhost/php-ajax-dischi/get-albums.php')
        .then(response => { // handle success
            console.log(response.data);
            this.albums = response.data.albums;
            this.artists = response.data.artists;
        })
        .catch(error => {   // handle error
            console.log(error);
        });
     },
     methods:{
        getFiltered(){
            axios.get('http://localhost/php-ajax-dischi/get-albums.php', {
                params:{
                    artist: this.filterArtist
                }
            })
        .then(response => { // handle success
            console.log(response.data);
            this.albums = response.data.albums;
            this.artists = response.data.artists;
        })
        .catch(error => {   // handle error
            console.log(error);
        });
        }
     }
 })