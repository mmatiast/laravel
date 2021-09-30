const app = new Vue({
    el: '#app',
    data: {
        titulo: 'prueba con vue',
        frutas: [
            {nombre: 'informatica', cantidad:10},
            {nombre: 'desarrollo', cantidad:0},
            {nombre: 'redes', cantidad:11}
        ],
        nuevaFruta: ''
    },
    methods:{
        agregarFruta(){
         this.frutas.push({
             nombre: this.nuevaFruta, cantidad: 0

         });
         this.nuevaFruta = '';
        }
    }
    
})