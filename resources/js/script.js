// Ensure this code is in script.js
document.addEventListener('DOMContentLoaded', function () {
    const togglePassword = document.querySelector('#togglePassword');
    const passwordField = document.querySelector('#password');

    console.log('Toggle Password Element:', togglePassword);
    console.log('Password Field Element:', passwordField);

    if (togglePassword && passwordField) {
        togglePassword.addEventListener('click', function () {

            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    } else {
        console.error('Toggle password or password field not found');
    }
});


// Pagination logic
let currentPage = 1;
const totalPages = 10; // You can dynamically set this based on data

document.getElementById('totalPages').textContent = totalPages;

// Event listeners for pagination buttons
document.getElementById('prevPage').addEventListener('click', function () {
    if (currentPage > 1) {
        currentPage--;
        document.getElementById('currentPage').value = currentPage;
        loadTableData(currentPage);
    }
});

document.getElementById('nextPage').addEventListener('click', function () {
    if (currentPage < totalPages) {
        currentPage++;
        document.getElementById('currentPage').value = currentPage;
        loadTableData(currentPage);
    }
});

// Handle manual input for the page number
document.getElementById('currentPage').addEventListener('change', function () {
    const inputPage = parseInt(this.value);
    if (inputPage >= 1 && inputPage <= totalPages) {
        currentPage = inputPage;
        loadTableData(currentPage);
    } else {
        this.value = currentPage; // Reset if the input is invalid
    }
});

// Function to load data for the current page (for demo purposes)
function loadTableData(page) {
  const tbody = document.getElementById('resultBody');
  tbody.innerHTML = ''; // Clear the table body
  // For demo purposes, we're just adding placeholder rows
  for (let i = 0; i < 5; i++) {
      const row = `
          <tr>
              <td>${page}123456${i}</td>
              <td>Nama ${i}</td>
              <td>202${i}</td>
              <td>Universitas ${i}</td>
              <td>Program ${i}</td>
          </tr>
      `;
      tbody.insertAdjacentHTML('beforeend', row);
  }
}


// Load the first page by default
loadTableData(1);

    
