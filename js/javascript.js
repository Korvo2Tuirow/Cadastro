let nome;
function pegardados(id, nome) {         
   document.getElementById('id').value = id;
   document.getElementById('nome_pessoa').innerHTML = nome;   
};

function verSenha(){
let senha = document.querySelector("#senha");
let textoSenha = document.querySelector("#btn-senha");
if(senha.type == "password"){
   senha.type="text";

   textoSenha.innerHTML = "Ocutar Senha";
   
}else{
   senha.type='password';
   textoSenha.innerHTML = "Visualizar Senha";
};

};

