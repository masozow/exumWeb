new Vue({
	el: "#main",
	data: {
		correo: {'remitenteCorreo':'','remitenteNombre':'','mensaje':''},
		errors: []
	},
	methods: {
		validarFormulario: function(){
			errors=[];
			if (!this.correo.remitenteNombre) {
		    	this.errors.push("Se requiere nombre.");
		    }
		    if (!this.correo.mensaje) {
		    	this.errors.push("Por favor escriba lo que desea comunicarnos.");
		    }
		    if (!this.correo.remitenteCorreo) {
		    	this.errors.push('Correo electrónico requerido.');
		    } else if (!this.validEmail(this.correo.remitenteCorreo)) {
		    	this.errors.push('Coloque un correo válido.');
		    }

		    if (!this.errors.length) {
		        return true;
		    }
		    else{
		    	return false;
		    }
		},
		enviarEmail: function(){
			var url='/send/email';
			//alert('Correo: '+this.remitenteCorreo+', Nombre: '+this.remitenteNombre+', Mensaje: '+this.mensaje);
			if(this.validarFormulario()){
				axios.post(url, this.correo).then(response=>{
					this.correo= {'remitenteCorreo':'','remitenteNombre':'','mensaje':''};
					this.errors = [];
					toastr.success('Correo enviado');
				}).catch(error => {
					this.errors = error.response.data;
				});
			}
		},
	    validEmail: function (email) {
	      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	      return re.test(email);
	    }
	}

})