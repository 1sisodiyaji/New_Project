async function SearchData() {
	try {
	  const response = await fetch('data.json'); // Replace 'data.json' with the path to your JSON file
	  const data = await response.json();
  
	  // Assuming the JSON structure has an array named 'items'
	  const items = data.items;
  
	  // Display the data
	  const outputDiv = document.getElementById('display');
	  outputDiv.innerHTML = '<h2>Data from JSON File:</h2>';
  
	  items.forEach(item => {
		const itemDiv = document.createElement('div');
		itemDiv.innerHTML = `<strong>Name:</strong> ${item.name}, <strong>Price:</strong> $${item.price}`;
		outputDiv.appendChild(itemDiv);
	  });
	} catch (error) {
	  console.error('Error fetching data:', error.message);
	}
  }
  
  // Call the fetch function when the page loads
  SearchData();