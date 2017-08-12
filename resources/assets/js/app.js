
new Vue({
 		el: '#crud',
 		created: function() {
 			this.getKeeps();
 		},
 		data: { // LLave que encapsula los datos 
 			keeps: []
 		},
 		methods: {
 			getKeeps: function() {
 				let urlKeeps = 'tasks';
 				axios.get(urlKeeps).then(response => {
 					this.keeps = response.data
 				})
 			}
  		}
});