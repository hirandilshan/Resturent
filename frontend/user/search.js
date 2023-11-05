

function searchItems() {
    const searchQuery = document.getElementById('search-box').value.toLowerCase();
    const foodItems = document.querySelectorAll('.food-item');

    foodItems.forEach(item => {
        const itemName = item.querySelector('h3').innerText.toLowerCase();
        const itemDiv = item;

        // Check if the item matches the search query
        if (itemName.includes(searchQuery)) {
            itemDiv.style.display = 'block';  // Show the item
        } else {
            itemDiv.style.display = 'none';   // Hide the item
        }
    });
}


