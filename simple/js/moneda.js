let url = 'https://mindicador.cl/api';
const api = new XMLHttpRequest();
api.open('GET', url, true);
api.send();

api.onreadystatechange = function(){
	if(this.status == 200 && this.readyState == 4){
		let datos = JSON.parse(this.responseText);
		let resultado = document.querySelector('#resultado');
		
		resultado.innerHTML = ''
		resultado.innerHTML += '  * El valor actual de la UF es $' + datos.uf.valor + '<BR />';
		resultado.innerHTML += '  * El valor actual del Dólar observado es $' + datos.dolar.valor + '<BR />';
		resultado.innerHTML += '  * El valor actual del Dólar acuerdo es $' + datos.dolar_intercambio.valor + '<BR />';
		resultado.innerHTML += '  * El valor actual del Euro es $' + datos.euro.valor + '<BR />';
		resultado.innerHTML += '  * El valor actual del IPC es ' + datos.ipc.valor + '<BR />';
		resultado.innerHTML += '  * El valor actual de la UTM es $' + datos.utm.valor + '<BR />';
		resultado.innerHTML += '  * El valor actual del IVP es $' + datos.ivp.valor + '<BR />';
		resultado.innerHTML += '  * El valor actual del Imacec es ' + datos.imacec.valor + '<BR />';
	}
};