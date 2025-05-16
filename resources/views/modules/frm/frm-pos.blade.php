<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order History - POS System</title>
    <!-- Import Raleway font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!-- Import Font Awesome for icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      /* Ensure full height if needed */
      html,
      body {
        height: 100%;
      }
      body {
        font-family: "Raleway", sans-serif;
        margin: 0;
        background-color: #f3f4f6;
        padding-top: 20px; /* Adjust top spacing if desired */
        padding-left: 80px; /* To leave room for the fixed sidebar */
        box-sizing: border-box;
      }
      /* Main content container styling */
      .content-container {
        padding: 1.5rem;
        max-width: 1280px; /* Tailwind max-w-7xl = 1280px */
        width: 100%;
        margin: 0 auto; /* Horizontally center the container */
        box-sizing: border-box;
      }
      .hide-scrollbar::-webkit-scrollbar {
        height: 0px;
      }
      .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
    </style>
  </head>
  <body>
    <!-- Left Sidebar (unchanged) -->
    <div class="fixed left-0 top-0 h-screen w-20 bg-white shadow-md p-4">
      <div class="flex flex-col items-center space-y-4 w-full">
        <a href="home.html" class="hover:bg-gray-200 transition-colors duration-200">
          <img src="images/logo2.png" alt="Logo" class="w-12 h-12 object-contain" />
        </a>
        <!-- Home icon: not active -->
        <a
          href="pos.html"
          class="text-xl text-gray-800 hover:bg-gray-200 transition-colors duration-200 rounded-full p-2"
          aria-label="Go to POS"
        >
          <i class="fa-solid fa-house"></i>
        </a>
        <!-- History icon: ACTIVE with bg and shadow -->
        <a
          href="history.html"
          class="text-xl text-gray-800 bg-[#e8d9c7] rounded-full p-2 shadow transition-colors duration-200"
          aria-label="Go to Order History"
        >
          <i class="fa-solid fa-pen-to-square"></i>
        </a>
      </div>
    </div>

    <!-- Main Content -->
    <div class="content-container">
      <h1 class="text-4xl font-extrabold text-gray-800 mb-6 text-center">Order History</h1>
      <p class="text-gray-600 mb-6 text-center">
        Review your previous orders. Click "View" to see details or "Delete" to remove an order.
      </p>

      <!-- Search Bar -->
      <div class="max-w-md mx-auto mb-8">
        <label for="search-input" class="sr-only">Search Orders</label>
        <div class="relative text-gray-600 focus-within:text-gray-400">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3">
            <i class="fa-solid fa-magnifying-glass"></i>
          </span>
          <input
            id="search-input"
            type="search"
            placeholder="Search orders..."
            class="w-full py-3 pl-10 pr-4 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-800 transition"
            autocomplete="off"
            aria-label="Search orders"
          />
        </div>
      </div>

      <!-- Orders Table -->
      <div class="overflow-x-auto hide-scrollbar rounded-xl shadow-lg bg-white">
        <table class="min-w-full divide-y divide-gray-200 table-auto">
          <thead class="bg-[#f3e9dc]">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Order ID</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Date</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Items</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Total</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Payment Method</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Status</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Actions</th>
            </tr>
          </thead>
          <tbody id="order-table-body" class="divide-y divide-gray-200"></tbody>
        </table>
      </div>
    </div>

    <!-- Order Details Modal -->
    <div
      id="order-details-modal"
      class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50"
    >
      <div class="bg-white rounded-xl shadow-xl w-11/12 max-w-lg p-6 max-h-[90vh] overflow-y-auto">
        <div class="flex justify-between items-center mb-4">
          <h3 id="modal-order-id" class="text-xl font-bold text-gray-800">Order Details</h3>
          <button onclick="closeOrderDetailsModal()" aria-label="Close Modal" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">
            <i class="fa-solid fa-xmark fa-lg"></i>
          </button>
        </div>
        <div id="modal-order-content" class="text-gray-700"></div>
        <div class="mt-6 flex justify-end">
          <button onclick="closeOrderDetailsModal()" class="px-4 py-2 bg-[#f3e9dc] hover:bg-[#e8d9c7] rounded-xl font-semibold transition-colors duration-200">
            Close
          </button>
        </div>
      </div>
    </div>

    <script>
      let orders = [
        {
          id: "#1001",
          date: "2025-05-14 14:30",
          items: [
            { name: "Americano (12oz)", qty: 2, price: 99 },
            { name: "Cafe Latte (16oz)", qty: 1, price: 145 }
          ],
          total: 343.0,
          payment: "Cash",
          status: "Completed"
        },
        {
          id: "#1002",
          date: "2025-05-15 10:15",
          items: [
            { name: "Caramel Macchiato (16oz)", qty: 1, price: 160 }
          ],
          total: 160.0,
          payment: "Debit/Credit Card",
          status: "Pending"
        },
        {
          id: "#1003",
          date: "2025-05-15 11:45",
          items: [
            { name: "Dirty Cream (Iced 12oz)", qty: 1, price: 180 },
            { name: "Vanilla (12oz)", qty: 1, price: 140 }
          ],
          total: 320.0,
          payment: "Cash",
          status: "Cancelled"
        }
      ];

      function renderOrders(filteredOrders = null) {
        const tbody = document.getElementById("order-table-body");
        tbody.innerHTML = "";
        const data = filteredOrders || orders;
        data.forEach((order, index) => {
          const statusColor = getStatusColor(order.status);
          const tr = document.createElement("tr");
          tr.classList.add("hover:bg-[#f3f1e7]", "transition-colors", "duration-200");

          tr.innerHTML = `
            <td class="px-6 py-4 whitespace-nowrap text-gray-800 font-semibold">${order.id}</td>
            <td class="px-6 py-4 whitespace-nowrap text-gray-600">${order.date}</td>
            <td class="px-6 py-4 max-w-xs truncate whitespace-nowrap text-gray-600">${order.items.map(i => i.name + " x" + i.qty).join(", ")}</td>
            <td class="px-6 py-4 whitespace-nowrap text-gray-800 font-semibold">₱${order.total.toFixed(2)}</td>
            <td class="px-6 py-4 whitespace-nowrap text-gray-600">${order.payment}</td>
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="inline-flex px-2 py-1 rounded-full text-xs font-semibold ${statusColor.bg} ${statusColor.text}">${order.status}</span>
            </td>
            <td class="px-6 py-4 whitespace-nowrap space-x-2">
              <button onclick="viewOrderDetails(${orders.indexOf(order)})" class="px-3 py-1 bg-[#f3e9dc] hover:bg-[#e8d9c7] rounded-md text-gray-800 font-semibold transition-colors duration-200">View</button>
              <button onclick="deleteOrder(${orders.indexOf(order)})" class="px-3 py-1 bg-red-600 hover:bg-red-700 rounded-md text-white font-semibold transition-colors duration-200">Delete</button>
            </td>
          `;
          tbody.appendChild(tr);
        });
      }

      function getStatusColor(status) {
        switch(status.toLowerCase()) {
          case "completed":
            return { bg: "bg-green-200", text: "text-green-800" };
          case "pending":
            return { bg: "bg-yellow-200", text: "text-yellow-800" };
          case "cancelled":
            return { bg: "bg-red-200", text: "text-red-800" };
          default:
            return { bg: "bg-gray-200", text: "text-gray-800" };
        }
      }

      function viewOrderDetails(index) {
        const order = orders[index];
        const modal = document.getElementById("order-details-modal");
        const content = document.getElementById("modal-order-content");
        document.getElementById("modal-order-id").innerText = `Order Details - ${order.id}`;

        let html = `
          <p><strong>Date:</strong> ${order.date}</p>
          <p><strong>Payment Method:</strong> ${order.payment}</p>
          <p><strong>Status:</strong> <span class="inline-block px-2 py-1 rounded-full text-xs font-semibold ${getStatusColor(order.status).bg} ${getStatusColor(order.status).text}">${order.status}</span></p>
          <h4 class="mt-4 mb-2 font-semibold">Items Ordered:</h4>
          <ul class="list-disc list-inside space-y-1">
        `;

        order.items.forEach(item => {
          html += `<li>${item.name} - Quantity: ${item.qty} - Price each: ₱${item.price.toFixed(2)} - Subtotal: ₱${(item.price * item.qty).toFixed(2)}</li>`;
        });

        html += `</ul>`;
        html += `<p class="mt-4 font-semibold">Total: ₱${order.total.toFixed(2)}</p>`;

        content.innerHTML = html;
        modal.classList.remove("hidden");
      }

      function closeOrderDetailsModal() {
        document.getElementById("order-details-modal").classList.add("hidden");
      }

      function deleteOrder(index) {
        if (confirm(`Are you sure you want to delete order ${orders[index].id}? This action cannot be undone.`)) {
          orders.splice(index, 1);
          renderOrders();
        }
      }

      function filterOrders(query) {
        const lowerQuery = query.toLowerCase();
        return orders.filter(order => {
          return (
            order.id.toLowerCase().includes(lowerQuery) ||
            order.date.toLowerCase().includes(lowerQuery) ||
            order.items.some(item => item.name.toLowerCase().includes(lowerQuery)) ||
            order.payment.toLowerCase().includes(lowerQuery) ||
            order.status.toLowerCase().includes(lowerQuery)
          );
        });
      }

      document.addEventListener("DOMContentLoaded", () => {
        renderOrders();

        const searchInput = document.getElementById("search-input");
        searchInput.addEventListener("input", () => {
          const filtered = filterOrders(searchInput.value);
          renderOrders(filtered);
        });
      });
    </script>
  </body>
</html>
      