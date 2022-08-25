const root = new Vue(
    {
        el: '#root',
        data: {
            listDisc: [],
        },


        methods: {
            getDiscs: function () {
                axios.get('http://localhost/CORSO/Repository/php-ajax-dischi/second-version/controller/controller.php')
                    .then( (response) => {

                        this.listDisc = response.data;

                        this.filteredCardGenre = this.listDisc;

                        console.log(this.listDisc);

                    });
            },
        },
        
        created(){
            this.getDiscs();
        }
    },
);