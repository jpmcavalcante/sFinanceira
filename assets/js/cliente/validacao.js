$(document).ready(function(){

   //verifica se o cpf informado é valido e não repete numeros
   jQuery.validator.addMethod("cpf", function(value, element) {
      value = jQuery.trim(value);
   
       value = value.replace('.','');
       value = value.replace('.','');
       cpf = value.replace('-','');
       while(cpf.length < 11) cpf = "0"+ cpf;
       var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
       var a = [];
       var b = new Number;
       var c = 11;
       for (i=0; i<11; i++){
           a[i] = cpf.charAt(i);
           if (i < 9) b += (a[i] * --c);
       }
       if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
       b = 0;
       c = 11;
       for (y=0; y<10; y++) b += (a[y] * c--);
       if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }
   
       var retorno = true;
       if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) retorno = false;
   
       return this.optional(element) || retorno;
   
   }, "Informe um CPF válido");

   //valida o numero de celular informado
   jQuery.validator.addMethod('celular', function (value, element) {
      value = value.replace("(","");
      value = value.replace(")", "");
      value = value.replace("-", "");
      value = value.replace(" ", "").trim();
      if (value == '0000000000') {
          return (this.optional(element) || false);
      } else if (value == '00000000000') {
          return (this.optional(element) || false);
      } 
      if (["00", "01", "02", "03", , "04", , "05", , "06", , "07", , "08", "09", "10"]
      .indexOf(value.substring(0, 2)) != -1) {
          return (this.optional(element) || false);
      }
      if (value.length < 10 || value.length > 11) {
          return (this.optional(element) || false);
      }
      if (["6", "7", "8", "9"].indexOf(value.substring(2, 3)) == -1) {
          return (this.optional(element) || false);
      }
      return (this.optional(element) || true);
  }, 'Informe um número de telefone celular válido!'); 



	//FORM CAD CLIENTE 
	$("#cadCliente").validate({
		rules:{
			foto:{
				required: true,
         },
         cpf:{
            cpf: true, 
            required: true
         },
         nome:{
            required: true,
            maxlength:100,
			},
         email:{ 
            required: true,
            email: true,
            maxlength:150,
			},
         rg:{
				required: true,
         },
         orgaoEmissor:{
				required: true,
         },
         estadoEmissor:{
				required: true,
         },
         dataExpedicao:{
				required: true,
         },
         dataNascimento:{
				required: true,
         },
         estadoCivil:{
				required: true,
         },
         sexo:{
				required: true,
         },
         telefone:{
            required: true,
            celular: true,
         },
         celular:{
            required: true,
            celular: true,
         },
         cep:{
				required: true,
         },
         endereco:{
				required: true,
			},
         numero:{
            required: true,
            maxlength: 10,
			},
         complemento:{
				required: true,
			},
         bairro:{
				required: true,
			},
         estado:{
				required: true,
         },
         cidade:{
				required: true,
			},
         tipoResidencia:{
				required: true,
         },
         tempoResidencia:{
				required: true,
         },
         naturalidade:{
				required: true,
         },
         nomePai:{
            required: true,
            maxlength:100,
         },
         nomeMae:{
            required: true,
            maxlength:100,
			},
			submitHandler: function(form){
            $("#file").removeAttr("hidden");
				form.submit()
			}
			
		},
		messages:{
			foto:{
				required: "O campo foto é obrigatório.",
         },
         cpf:{
            required: "O campo cpf é obrigatório.",
            cpf: "CPF inválido", 
			},
         nome:{
            required: "O campo nome é obrigatório.",
            maxlength: "No máximo 100 caracteres",
			},
         email:{
            required: "O campo email é obrigatório.",
            email: "Email inválido",
			},
         rg:{
				required: "O campo rg é obrigatório.",
         },
         orgaoEmissor:{
				required: "O campo O.E. é obrigatório.",
         },
         estadoEmissor:{
				required: "Este campo é obrigatório.",
         },
         dataExpedicao:{
				required: "Este campo  é obrigatório.",
         },
         dataNascimento:{
				required: "Este campo  é obrigatório.",
         },
         estadoCivil:{
				required: "Este campo é obrigatório.",
         },
         sexo:{
				required: "Este campo  é obrigatório.",
         },
         telefone:{
            required: "Este campo  é obrigatório.",
            celular: "Número inválido",
         },
         celular:{
            required: "Este campo  é obrigatório.",
            celular: "Número inválido",
         },
         cep:{
				required: "O campo cep é obrigatório.",
         },
         endereco:{
				required: "Este campo  é obrigatório.",
			},
         numero:{
            required: "Este campo  é obrigatório.",
            maxlength: "No máximo 10 cacteres",
			},
         complemento:{
				required: "Este campo  é obrigatório.",
			},
         bairro:{
				required: "Este campo  é obrigatório.",
			},
         estado:{
				required: "Este campo  é obrigatório.",
         },
         cidade:{
				required: "Este campo  é obrigatório.",
			},
         tipoResidencia:{
				required: "Este campo  é obrigatório.",
         },
         tempoResidencia:{
				required: "Este campo  é obrigatório.",
         },
         naturalidade:{
				required: "Este campo  é obrigatório.",
         },
         nomePai:{
            required: "Este campo  é obrigatório.",
            maxlength: "No máximo 100 caracteres",
         },
         nomeMae:{
            required: "Este campo  é obrigatório.",
            maxlength: "No máximo 100 caracteres",
			}
		}
				
	});
})


//JQUERY MASK

$("#nome").mask("#", {
   maxlength: false,
   translation: {
       '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
   }
});

$("#endereco").mask("#", {
   maxlength: false,
   translation: {
       '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
   }
});

$("#bairro").mask("#", {
   maxlength: false,
   translation: {
       '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
   }
});

$("#cidade").mask("#", {
   maxlength: false,
   translation: {
       '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
   }
});

$("#tipoResidencia").mask("#", {
   maxlength: false,
   translation: {
       '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
   }
});

$("#naturalidade").mask("#", {
   maxlength: false,
   translation: {
       '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
   }
});


$("#nomePai").mask("#", {
   maxlength: false,
   translation: {
       '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
   }
});

$("#nomeMae").mask("#", {
   maxlength: false,
   translation: {
       '#': {pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/, recursive: true}
   }
});