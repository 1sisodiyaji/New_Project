const searchItem = document.getElementById('SearchItem');
const display = document.getElementById('display');

let http = new XMLHttpRequest();
http.open('get','data.json',true);
http.send();
http.onload = function(){
	if(this.readyState == 4 && this.status == 200 ){
		let data = JSON.parse(this.responseText);
		let output = "";

		for(let item of data){
			output += `
			<div class="product">
			<h2 class = "display1">${data.name}</h2>
			<h2 class = "display2">${data.price}</h2>
			`;
		}
		document.querySelector(".display").innerHTML = output;
	}
}