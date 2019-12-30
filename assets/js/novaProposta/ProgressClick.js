$(document).ready(function(){

    $("#nav-dadosDaOperacao-tab").css("background", "#3CB371");
    
      // $("#dadosP").click(function(){
      //   $("#progress-bar").css("width" ,"50%");
      //   $("#nav-dadosPessoais-tab").css("background", "#3CB371");
      //   $("#nav-dadosPessoais-tab").click();
      //   $("#progress-bar").text("2/4");
      // })

    $("#back-dadosO").click(function(){
      $("#progress-bar").css("width" ,"25%");
      $("#nav-dadosPessoais-tab").css("background", "#DCDCDC");
      $("#nav-dadosDaOperacao-tab").click();
      $("#progress-bar").text("1/4");
    })

    // $("#dadosB").click(function(){
    //   $("#progress-bar").css("width" ,"75%");
    //   $("#nav-dadosBancarios-tab").css("background", "#3CB371");
    //   $("#nav-dadosBancarios-tab").click();
    //   $("#progress-bar").text("3/4");
    // })

    $("#back-dadosP").click(function(){
      $("#progress-bar").css("width" ,"50%");
      $("#nav-dadosBancarios-tab").css("background", "#DCDCDC");
      $("#nav-dadosPessoais-tab").click();
      $("#progress-bar").text("2/4");
    })

    // $("#anexos").click(function(){
    //  $("#progress-bar").css("width" ,"100%");
    //   $("#nav-anexos-tab").css("background", "#3CB371");
    //   $("#nav-anexos-tab").click();
    //   $("#progress-bar").text("4/4"); 
    // })

    $("#back-dadosB").click(function(){
      $("#progress-bar").css("width" ,"75%");
      $("#nav-anexos-tab").css("background", "#DCDCDC");
      $("#nav-dadosBancarios-tab").click();
      $("#progress-bar").text("3/4");
    })
});