const root = new Vue(
    {
        el: '#root',
        data: {
            listDisc: [],
        },

        created(){
            this.getDiscs();
        }
    },
);