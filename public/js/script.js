$(document).ready(function () {
    //Disable Save Button On Page Load
    $("#savebtn").attr('disabled', 'disabled');

    //When User Name changes, enable Save Button
    $("#denominacao").keyup(function() {
        $("#savebtn").removeAttr('disabled');
    });

    //Disable Save Button once clicked
    $("#savebtn").click(function() {
        $(this).attr('disabled', 'disabled');
    });

   $("input[name=conjugue]").change(function(data){ 
    var selection = $("input[name=conjugue]:checked").val();
    console.log(selection); 
    if(selection != "1")
        $("#endereco_conjugue").hide();
    else
        $("#endereco_conjugue").show();
    });

    $("#endereco_conjugue").hide();
});
/*$(document).ready(function() {
     $('input[type="submit"]').prop('disabled', true);
     $('input[type="text"]').keyup(function() {
        if($(this).val() != '') {
           $('input[type="submit"]').prop('disabled', false);
        }
     });
 });*/

jQuery.noConflict();
jQuery(function($){
   $("#data").mask("99/99/9999");
   $("#telefone").mask("(099) 9999-9999");
   $("#cpf").mask("999.999.999-99");
   $("#cep").mask("99999-999"); 
   $("#cnpj").mask("99.999.999/9999-99");
   $("#placa").mask("aaa - 9999"); 
});
$(function() {
    $('#favoritesModal').on("show.bs.modal", function (e) {
         $("#favoritesModalLabel").html($(e.relatedTarget).data('title'));
         $("#fav-title").html($(e.relatedTarget).data('title'));
    });
});
function possuiConjugue(){
    document.getElementById("conjugue").disabled = false;
    document.getElementById("rgconjugue").disabled = false;
    document.getElementById("cpfconjugue").disabled = false;
    document.getElementById("dt_nascconjugue").disabled = false;
    document.getElementById("naturalidadeconjugue").disabled = false;
    document.getElementById("contatoconjugue").disabled = false;
    document.getElementById("cepconjugue").disabled = false;
    document.getElementById("logradouroconjugue").disabled = false;
    document.getElementById("numeroconjugue").disabled = false;
    document.getElementById("quadraconjugue").disabled = false;
    document.getElementById("bairroconjugue").disabled = false; 
    document.getElementById("distritoconjugue").disabled = false; 
    document.getElementById("municipioconjugue").disabled = false; 
    document.getElementById("estadoconjugue").disabled = false; 
    document.getElementById("paisconjugue").disabled = false;     
}
function naoPossuiConjugue(){
    document.getElementById("conjugue").disabled = true;
    document.getElementById("rgconjugue").disabled = true;
    document.getElementById("cpfconjugue").disabled = true;
    document.getElementById("dt_nascconjugue").disabled = true;
    document.getElementById("naturalidadeconjugue").disabled = true;
    document.getElementById("contatoconjugue").disabled = true;
    document.getElementById("cepconjugue").disabled = true;
    document.getElementById("logradouroconjugue").disabled = true;
    document.getElementById("numeroconjugue").disabled = true;
    document.getElementById("quadraconjugue").disabled = true;
    document.getElementById("bairroconjugue").disabled = true;
    document.getElementById("distritoconjugue").disabled = true;
    document.getElementById("municipioconjugue").disabled = true;
    document.getElementById("estadoconjugue").disabled = true;
    document.getElementById("paisconjugue").disabled = true;
}
 
// $(document).ready(function () {
//     var table = $('#tabela').DataTable({
//       //retrieve : true, 
//       "language": { "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json" }
//     });
// });
// $(document).ready(function() {
//     var table = $('#tabela').DataTable();
//     "language": { "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json" }
 
//     $('#tabela tbody').on( 'click', 'tr', function () {
//         $(this).toggleClass('selected');
//     } );
 
//     $('#button').click( function () {
//         alert( table.rows('.selected').data().length +' row(s) selected' );
//     } );
// } );

// $(document).ready(function () {
//     table = $('#tabela2').DataTable({
      
//       //retrieve : true, 
//       "language": { "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json" }
//     });
// });
$(document).ready(function() {
    var table = $('#tabela2').DataTable({
      "language": { "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json" }
    });
    
 
    $('#tabela2 tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected');
    } );
 
    $('#button').click( function () {
        alert( table.rows('.selected').data().length +' row(s) selected' );
    } );
} );