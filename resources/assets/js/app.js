
new Vue({
 		el: '#crud',
 		created: function() {
 			this.getKeeps();
 		},
 		data: { // LLave que encapsula los datos 
 			keeps: [],
 			newKeep: '',
 			fillKeep: {'id': '', 'keep': ''},
 			errors: []
 		},
 		methods: {
 			getKeeps: function() {
 				let urlKeeps = 'tasks';
 				axios.get(urlKeeps).then(response => {
 					this.keeps = response.data
 				});
 			},
 			editKeep: function(keep) {
 				this.fillKeep.id = keep.id;
 				this.fillKeep.keep = keep.keep;
 				$('#edit').modal('show');
 			},
 			updateKeep: function(id) {
 				// usando template strings ES6
 				let url = `tasks/${id}`;
 				axios.put(url, this.fillKeep).then(response => {
 					this.getKeeps();
 					this.fillKeep = {'id': '', 'keep': ''};
 					this.errors = [];
 					$('#edit').modal('hide');
 					toastr.success('Tarea actualizada con éxito');
 				}).catch(error => {
 					this.errors = error.response.data;
 				});
 			},
 			deleteKeep: function(keep) {
 				if(!confirm('¿Está seguro que desea eliminar el registro?')){
 					return false;
 				}
 				let url = 'tasks/' + keep.id;
 				axios.delete(url).then(response => {  // Eliminamos
 					this.getKeeps(); // Listamos
 					toastr.success('Eliminado correctamente'); // Enviamos el mensaje
 				});
 			},
 			createKeep: function() {
 				let url = 'tasks';
 				axios.post(url, {
 					keep: this.newKeep
 				}).then(response => {
 					this.getKeeps(); // Listamos
 					this.newKeep = '';
 					this.errors = [];
 					$('#create').modal('hide');
 					toastr.success('Nueva tarea creada con éxito');
 				}).catch(error => {
 					this.errors = error.response.data;
 				});
 			}
  		}
});