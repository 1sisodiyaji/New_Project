const SearchItem = document.getElementById("form1");
const Wheat = document.getElementById("Wheat");
const display = document.getElementById("display");

const url = 'https://commodity-rates-api.p.rapidapi.com/open-high-low-close/2022-01-10?base=USD&symbols=BRENTOIL';
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '8274bf207bmsh1f70c89e32c6c62p12917cjsnca31885f7433',
		'X-RapidAPI-Host': 'commodity-rates-api.p.rapidapi.com'
	}
};
async function SearchData() {
try {
	const response = await fetch(url, options);
	const result = await response.text();
	console.log(result);
	display.innerHTML = result;
} catch (error) {
	console.error(error);
}
}


