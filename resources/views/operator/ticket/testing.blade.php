@extends('layouts.operatorLayout')
<div class="datatable-container">
    <table id="datatable">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Age</th>
        </tr>
      </thead>
      <tbody>
        <!-- Data will be populated here -->
      </tbody>
    </table>

    <div class="pagination">
      <button id="prev" disabled>Previous</button>
      <div id="pageNumbers"></div>
      <button id="next">Next</button>
    </div>
  </div>


<script>
    const data = [{
            name: 'John Doe',
            email: 'john@example.com',
            age: 25
        },
        {
            name: 'Jane Doe',
            email: 'jane@example.com',
            age: 29
        },
        {
            name: 'Sam Smith',
            email: 'sam@example.com',
            age: 22
        },
        {
            name: 'Lisa Ray',
            email: 'lisa@example.com',
            age: 30
        },
        {
            name: 'Tom Hardy',
            email: 'tom@example.com',
            age: 35
        },
        {
            name: 'Ana Williams',
            email: 'ana@example.com',
            age: 24
        },
        {
            name: 'Paul Walker',
            email: 'paul@example.com',
            age: 27
        },
        {
            name: 'Chris Evans',
            email: 'chris@example.com',
            age: 38
        },
        {
            name: 'Emma Watson',
            email: 'emma@example.com',
            age: 26
        },
        {
            name: 'Robert Downey',
            email: 'robert@example.com',
            age: 40
        },
        {
            name: 'Scarlett Johansson',
            email: 'scarlett@example.com',
            age: 35
        },
        {
            name: 'Brad Pitt',
            email: 'brad@example.com',
            age: 50
        }
    ];

    const rowsPerPage = 5;
    let currentPage = 1;
    const totalPages = Math.ceil(data.length / rowsPerPage);

    const datatable = document.getElementById('datatable').getElementsByTagName('tbody')[0];
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');
    const pageNumbers = document.getElementById('pageNumbers');

    function renderTable(page) {
        datatable.innerHTML = ''; // Clear previous content

        const start = (page - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        const rows = data.slice(start, end);

        rows.forEach(row => {
            const tr = document.createElement('tr');
            tr.innerHTML = `<td>${row.name}</td><td>${row.email}</td><td>${row.age}</td>`;
            datatable.appendChild(tr);
        });

        updatePagination();
    }

    // Create pagination with ellipsis for large page numbers
    function updatePagination() {
        pageNumbers.innerHTML = ''; // Clear old page numbers

        let maxPagesShown = 3; // Show first, last, and a few in between

        // Add Previous button control
        prevBtn.disabled = currentPage === 1;

        // Add first page
        addPageNumber(1);

        // Add dots if current page is far from the first page
        if (currentPage > maxPagesShown) {
            addDots();
        }

        // Add some page numbers around the current page
        let startPage = Math.max(2, currentPage - 1);
        let endPage = Math.min(totalPages - 1, currentPage + 1);

        for (let i = startPage; i <= endPage; i++) {
            addPageNumber(i);
        }

        // Add dots if there are pages not displayed before the last page
        if (currentPage < totalPages - maxPagesShown) {
            addDots();
        }

        // Add last page
        if (totalPages > 1) {
            addPageNumber(totalPages);
        }

        // Add Next button control
        nextBtn.disabled = currentPage === totalPages;
    }

    function addPageNumber(page) {
        const pageElement = document.createElement('span');
        pageElement.textContent = page;
        pageElement.classList.add('page-number');
        if (page === currentPage) {
            pageElement.classList.add('active');
        }
        pageElement.addEventListener('click', () => {
            currentPage = page;
            renderTable(currentPage);
        });
        pageNumbers.appendChild(pageElement);
    }

    function addDots() {
        const dots = document.createElement('span');
        dots.textContent = '...';
        dots.classList.add('dots');
        pageNumbers.appendChild(dots);
    }

    prevBtn.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            renderTable(currentPage);
        }
    });

    nextBtn.addEventListener('click', () => {
        if (currentPage < totalPages) {
            currentPage++;
            renderTable(currentPage);
        }
    });

    // Initial table render
    renderTable(currentPage);
</script>
@extends('layouts.footer')
