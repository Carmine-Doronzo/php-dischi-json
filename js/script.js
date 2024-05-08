const { createApp } = Vue

createApp({
    data() {
        return {
            //message: 'Hello Vue!'
            discs:[],
            currentIndex:0,
            dNone:false
        }
    },
    methods: {
        fetchData(){
            axios.get('./server.php').then((res) => {
                //console.log(res.data);
                this.discs = res.data.results;
                console.log(this.discs)
            })
        },
        modal(i){
            this.currentIndex = i 
            this.dNone = true
            console.log(this.currentIndex)
        },
        closeModal(){
            this.dNone = false
        }


    },created(){
        this.fetchData()
    }
}).mount('#app')