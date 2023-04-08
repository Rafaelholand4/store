const toggleSwitch = document.querySelector('.switch input[type="checkbox"]');
const currentTheme = localStorage.getItem('theme');

if (currentTheme) {
  document.documentElement.setAttribute('data-theme', currentTheme);
  if (currentTheme === 'dark') {
    toggleSwitch.checked = true;
  }
}

function switchTheme(e) {
  if (e.target.checked) {
    document.documentElement.setAttribute('data-theme', 'dark');
    localStorage.setItem('theme', 'dark');
  } else {
    document.documentElement.setAttribute('data-theme', 'light');
    localStorage.setItem('theme', 'light');
  }
}

toggleSwitch.addEventListener('change', switchTheme, false);


		function exibirMenu1() {
			// esconde todos os menus
			var menus = document.querySelectorAll(".menu");
			for (var i = 0; i < menus.length; i++) {
				menus[i].style.display = "none";
			}
			// exibe o menu correspondente à primeira imagem
			var menu1 = document.getElementById("menu1");
			menu1.style.display = "block";
		}
		
		function exibirMenu2() {
			// esconde todos os menus
			var menus = document.querySelectorAll(".menu");
			for (var i = 0; i < menus.length; i++) {
				menus[i].style.display = "none";
			}
			// exibe o menu correspondente à segunda imagem
			var menu2 = document.getElementById("menu2");
			menu2.style.display = "block";
		}



    function calcularPrecoNotebook() {
      // Obter as opções selecionadas pelo usuário
      var memoria = parseInt(document.getElementById("memoria").value);
      var processador = document.getElementById("processador").value;
      var armazenamento = document.getElementById("armazenamento").value;
      var sistema = document.getElementById("sistema").value;
      // Calcular o preço total do notebook
var preco = 0;

if (memoria == "4") {
preco += 300;
} else if (memoria == "8") {
preco += 500;
} else if (memoria == "16") {
preco += 800;
} else if (memoria == "32") {
preco += 1000;
}
if (processador == "Core i3") {
preco += 300;
} else if (processador == "Core i5") {
preco += 500;
} else if (processador == "Core i7") {
preco += 800;
} else if (processador == "AMD Ryzen 5") {
preco += 400;
}
if (armazenamento == "128GB") {
preco += 350;
} else if (armazenamento == "256GB") {
preco += 500;
} else if (armazenamento == "512GB") {
preco += 600;
} else if (armazenamento == "1TB") {
preco += 800;
}
if (sistema == "10") {
preco += 350;
} else if (sistema == "11") {
preco += 500;
}

// Atualize o resumo do notebook e o preço na página HTML
document.getElementById("resumo").innerHTML = "Memória RAM: " + memoria + " GB<br>Processador: " + processador + "<br>Armazenamento: " + armazenamento + " <br>Sistema operacional: Windows " + sistema;
    document.getElementById("preco").innerHTML = "Preço total: R$ " + preco.toFixed(2);
    }


function calcularPrecoComputador() {
      // Obter as opções selecionadas pelo usuário
      var memoriaP = parseInt(document.getElementById("memoriaP").value);
      var processadorP = document.getElementById("processadorP").value;
      var armazenamentoP = document.getElementById("armazenamentoP").value;
      var telaP = document.getElementById("telaP").value;
      var sistemaP = document.getElementById("sistemaP").value;
      // Calcular o preço total do computador
var precoP = 0;

if (memoriaP == "4") {
precoP += 300;
} else if (memoriaP == "8") {
precoP += 500;
} else if (memoriaP == "16") {
precoP += 800;
} else if (memoriaP == "32") {
precoP += 1000;
}
if (processadorP == "Core i3") {
precoP += 300;
} else if (processadorP == "Core i5") {
precoP += 500;
} else if (processadorP == "Core i7") {
precoP += 800;
} else if (processadorP == "AMD Ryzen 5") {
precoP += 400;
}
if (armazenamentoP == "128GB") {
precoP += 350;
} else if (armazenamentoP == "256GB") {
precoP += 500;
} else if (armazenamentoP == "512GB") {
precoP += 600;
} else if (armazenamentoP == "1TB") {
precoP += 800;
}
if (sistemaP == "10") {
precoP += 350;
} else if (sistemaP == "11") {
precoP += 500;
}
if (telaP == "14") {
precoP += 800;
} else if (telaP == "15") {
preprecoPco += 900;
} else if (telaP == "17") {
precoP += 1000;
} else if (telaP == "39") {
precoP += 1500;
}
// Atualize o resumo do computador e o preço na página HTML
document.getElementById("resumoP").innerHTML = "Memória RAM: " + memoriaP + " GB<br>Processador: " + processadorP + "<br>Armazenamento: " + armazenamentoP + " <br>Sistema operacional: Windows " + sistemaP + "<br>Tela: " + telaP + " Polegadas";
    document.getElementById("precoP").innerHTML = "Preço total: R$ " + precoP.toFixed(2);
    }

