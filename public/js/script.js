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
}
function naoPossuiConjugue(){
    document.getElementById("conjugue").disabled = true;
}