/*
  Subject    : CRUD – Linguagem PHP (TECNOFIT)
  Created on : 20-May-2019, 01:48:00 PM
  Author     : Marcos Freire
*/

function validate() {
    var sku_requerido = document.form.txtsku.value;
    var nome_requerido = document.form.txtnome.value;
    var x = false;

    if(sku_requerido == "") {
        document.getElementById("skuerrado").style.color = "red";
        document.getElementById("skuerrado").innerHTML = "Requerido";
        x = false;
    } else {
        document.getElementById("skuerrado").style.color = "green";
        document.getElementById("skuerrado").innerHTML = "Tudo certo";
        x = true;
    }

    if(nome_requerido == "") {
        document.getElementById("nomeerrado").style.color = "red";
        document.getElementById("nomeerrado").innerHTML = "Requerido";
        x = false;
    } else {
        document.getElementById("nomeerrado").style.color = "green";
        document.getElementById("nomeerrado").innerHTML = "Tudo certo";
        x = true;
    }
    
    return x;
}