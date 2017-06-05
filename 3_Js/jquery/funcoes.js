// Sintaxe:
//$(seletor).acao()
//versao simplificada Document.ready ()
//$(function(){
//});

$(document).ready(function(){
  //todo código jquery-3
  console.log("Inicializando jquery-3");

  $("p").click(function(){
    //para apenas um elemento
    $(this).hide();
    //pode ser para todos os elementos p
    //$("p")
  });
  //ocultar eventos exibir e ocultar
  $("button[name='exibir']").click(function(){
    $("#links").show();
  });
  $("button[name='ocultar']").click(function(){
    $("#links").hide();
  });
  //adicionar classe css
  $("button[name='mudar']").click(function(){
    $("#titulo").addClass("jumbotron");
    $("button").addClass("btn btn-primary");
    $("p").removeClass("h2");
    $("#links").addClass("alert alert-info");
    $("a").toggleClass("btn btn-warning");
  });

});
