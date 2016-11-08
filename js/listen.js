// Fazemos que o código só funcione apos o carregamento completo da pagina
window.addEventListener('DOMContentLoaded', function(){
  // Instanciamos o nosso botão
  var btn_gravacao = document.querySelector('#btn_gravar_audio');
  // Crio a variavel que amarzenara a transcrição do audio
  var transcricao_audio =  '';
  // Seto o valor false para a variavel esta_gravando para fazermos a validação se iniciou a gravação
  var esta_gravando = false;
  var risadinha = false;
  console.log("risadinha => " + risadinha);
  // Verificamos se o navegador tem suporte ao Speech API
  if(window.SpeechRecognition || window.webkitSpeechRecognition){
    // Como não sabemos qual biblioteca usada pelo navegador 
    // Atribuimos a api retornada pelo navegador
    var speech_api = window.SpeechRecognition || window.webkitSpeechRecognition;
     // Criamos um novo objeto com a API Speech
    var recebe_audio = new speech_api();
    // Defino se a gravação sera continua ou não
    // Caso deixamos ela definida como false a gravação tera um tempo estimado 
    // de 4 a 5 segundos
    recebe_audio.continuous = true;
    // Especifico se o resultado final pode ser alterado ou não pela compreenção da api
    recebe_audio.interimResults = true;
    // Especifico o idioma utilizado pelo usuario
    recebe_audio.lang = "pt-BR";
    // uso o metodo onstart para setar a minha variavel esta_gravando como true
    // e modificar o texto do botão
    recebe_audio.onstart = function(){
      console.log("start");
      esta_gravando = true;
      btn_gravacao.innerHTML = 'Gravando! Parar gravação.';
    };
     // uso o metodo onend para setar a minha variavel esta_gravando como false
    // e modificar o texto do botão
    recebe_audio.onend = function(){
      esta_gravando = false;
      btn_gravacao.innerHTML = 'Iniciar Gravação';
    };
    // Com o metodo onresult posso capturar a transcrição do resultado 
    recebe_audio.onresult = function(event){
      // Defino a minha variavel interim_transcript como vazia
      var interim_transcript = '';
      // Utilizo o for para contatenar os resultados da transcrição 
      for(var i = event.resultIndex; i < event.results.length; i++){
        // console.log(event.results[0][0]);
        var resultado = event.results[0][0].transcript;
        if(resultado == "risadinha"){
          $("#busca").focus();
        }
        console.log(resultado);
        resultado = resultado.replace("risadinha","");
      }
      $("#busca").val(resultado);
    };
    // Capturamos a ação do click no botão e iniciamos a gravação ou a paramos
    // dependendo da variavel de controle esta_gravando
    btn_gravacao.addEventListener('click', function(e){
      // Verifico se esta gravando ou não
      if(esta_gravando){
        // Se estiver gravando mando parar a gravação
        recebe_audio.stop();
        // Dou um retun para sair da função
        return;
      }
      // Caso não esteja capturando o audio inicio a transcrição
      recebe_audio.start();
    }, false);

  }else{
    // Caso não o navegador não apresente suporte ao Speech API apresentamos a seguinte mensagem
    console.log('navegador não apresenta suporte a web speech api');
    // alert('Este navegador não apresenta suporte para essa funcionalidade ainda');
  }
  recebe_audio.start();
}, false);

