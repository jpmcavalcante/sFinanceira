/*$(function () {
     $('button').on('click', function () {
         var nome = $('#nome').val();
          $.ajax({
              url:'http://localhost/sistemaFinanceira/ajax',
              type:'POST',
              data:{nome:nome},
              dataType: 'json',
              success:function (json) {
                 $('.borda').html(json.frase)
              }
          })
     })
})*/

$(function () {
    $('#addColaborador').on('click', function (e) {

        e.preventDefault();

        var nome = $('#nome').val();
        var email = $('#email').val();
        var senha = $('#senha').val();

        $.ajax({
            url:'http://localhost/financeira/colaborador/save',
            type:'POST',
            data:{
                nome:nome,
                email:email,
                senha:senha,
             },
            dataType: 'json',
            success:function (json) {
               alert("Colaborador Cadastrado com sucesso.")
            }
        })


    });
});

