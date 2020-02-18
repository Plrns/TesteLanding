document.getElementById('idEmail').onblur = function () {
    if (this.value.indexOf('@') == -1 || this.value.indexOf('.') == -1) {
        this.style.border = 'solid 3px red'
        document.getElementById('msg').innerHTML = 'Insira um e-mail válido'
        document.getElementById('msg').style.color = 'red'
    } else {
        this.style.border = 'solid 1.5px silver'
        document.getElementById('msg').innerHTML = ''
    }
}

document.getElementById('idNome').onblur = function() {
    if(this.value == '') {
        this.style.border = 'solid 3px red'
        document.getElementById('msg').innerHTML = 'Preencha com seu nome'
        document.getElementById('msg').style.color = 'red'
    }else if(this.value.indexOf(' ') == -1){
        this.style.border = 'solid 3px red'
        document.getElementById('msg').innerHTML = 'Preencha com seu nome completo'
        document.getElementById('msg').style.color = 'red'
    }else{
        this.style.border = 'solid 1.5px silver'
        document.getElementById('msg').innerHTML = ''
    }
}

document.getElementById('idTelefone').onblur = function(){
    if(this.value < 88888888){
        this.style.border = 'solid 3px red'
        document.getElementById('msg').innerHTML = 'Preencha com um número válido'
        document.getElementById('msg').style.color = 'red'
    }else{
        this.style.border = 'solid 1.5px silver'
        document.getElementById('msg').innerHTML = ''
    }
}

function link(){
    window.location.href = "assets/home.php";
}
