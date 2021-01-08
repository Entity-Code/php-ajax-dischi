var app = new Vue({
    el: "#app",
    data: {
 
       albums: [],
       
    },
    mounted: function() {
 
        axios
            .get("data.php")
            .then(risposta => {
                
                this.albums = risposta.data;

            });
    }  
    
 });
