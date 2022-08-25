const root = new Vue(
    {
        el: '#root',
        data: {
            listDisc: [],
            filteredCardGenre: [],
            selected: '',
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
            filterCard(selected){
                this.filteredCardGenre = [...this.listDisc].filter( (disc) => disc.genre.toLowerCase().includes(selected));

                console.log(this.filteredCardGenre);

                console.log(this.listDisc);

                this.listDisc = this.filteredCardGenre;
                
                if (selected == 'all') {
                    
                    this.filteredCardGenre = this.listDisc;
                }
            },
        },


        created(){
            this.getDiscs();
        }
    },
);