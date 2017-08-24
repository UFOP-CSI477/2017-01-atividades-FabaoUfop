$(document).ready(function(){

  $("input[name='n1']").focusout(function(){
      var n1 =parseInt($("input[name='n1']").val());
      if(isNaN(n1)){
        $("#grupoN1").addClass("has-error");
        $("#alertn1").fadeIn();
        $("input[name='n1']").val("");
        $("input[name='n1']").focus();
        return;
      }
      $("#grupoN1").removeClass("has-error");
      $("#alertn1").hide();

  });
  $("button[name='calculo']").click(function(){

      var n2 = parseInt($("input[name='n2']").val());
      //validação nos campos
      var n1 =parseInt($("input[name='n1']").val());
      if(isNaN(n1)){
        $("#grupoN1").addClass("has-error");
        $("#alertn1").fadeIn();
        $("input[name='n1']").val("");
        $("input[name='n1']").focus();
        return;
      }
      $("#grupoN1").removeClass("has-error");
      $("#alertn1").hide();

      //n2
      if(isNaN(n2)){
        $("#grupoN2").addClass("has-error");
        $("#alertn2").fadeIn();
        $("input[name='n2']").val("");
        $("input[name='n2']").focus();
        return;
      }
      $("#grupoN2").removeClass("has-error");
      $("#alertn2").hide();

      var res = n1+n2;

      $("input[name='resultado']").val(res);
    });

});
