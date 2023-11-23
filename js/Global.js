const InputItem = document.getElementById('SearchItem');
const display = document.getElementById('display');

async function SearchData() {
	try {
	  const response = await fetch();
	  const data = await response.json();
	  data.forEach(item => {
		display.textContent = `${data}`;
		
	})

	  
	} catch (error) {
	  console.error('Error fetching data:', error.message);
	}
  }
  
  // Call the fetch function when the page loads
  SearchData();

  document.addEventListener('DOMContentLoaded', async () => {
	try {
	  // Fetch data from the server
	  const response = await fetch('http://localhost:3000/api/data');
	  const data = await response.json();
  
	  // Display the data on the webpage
	  const dataList = document.getElementById('data-list');
	  data.forEach(item => {
		const listItem = document.createElement('li');
		listItem.textContent = `${item.name} - ${item.age} years old`;
		dataList.appendChild(listItem);
	  });
	} catch (error) {
	  // Handle errors
	  console.error('Error fetching data:', error);
	}
  });
  