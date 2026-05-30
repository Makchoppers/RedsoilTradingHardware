const productSizeData = {
  "PPR REDUCER": {
    "1/2 inch": { price: 20, stock: 15 },
    "3/4 inch": { price: 30, stock: 10 },
    "1 inch": { price: 50, stock: 5 },
  },
  "PPR COUPLING": {
    "1/2 inch": { price: 10, stock: 25 },
    "3/4 inch": { price: 15, stock: 20 },
    "1 inch": { price: 25, stock: 15 },
  },
  "PPR FEMALE ADAPTOR":{
    "1/2 inch":{price: 130, stock: 15},
    "3/4 inch":{price: 180, stock: 10},
    "1 inch":{price: 250, stock: 5},
  },
  "PPR TEE":{
    "1/2 inch":{price: 30, stock: 25},
    "3/4 inch":{price: 80, stock: 20},
    "1 inch":{price: 120, stock: 12},
  },
  "PPR MALE ADAPTOR":{
    "1/2 inch":{price: 130, stock: 25},
    "3/4 inch":{price: 180, stock: 20},
    "1 inch":{price: 250, stock: 12},
  },
  "PPR MALE ELBOW":{
    "1/2 inch":{price: 80, stock: 15},
    "3/4 inch":{price: 120, stock: 10},
    "1 inch":{price: 170, stock: 5},
  },
  "PPR ELBOW":{
    "1/2 inch":{price: 10, stock: 30},
    "3/4 inch":{price: 15, stock: 5},
    "1 inch":{price: 20, stock: 10},
  },
  "PPR CAP":{
    "1/2 inch":{price: 8, stock: 28},
    "3/4 inch":{price: 14, stock: 15},
    "1 inch":{price: 18, stock: 18},
  },
  "PE ELBOW":{
    "1/2 inch":{price: 72, stock: 21},
    "3/4 inch":{price: 92, stock: 16},
    "1 inch":{price: 120, stock: 11},
  },
  "PE REDUCER":{
    "1/2 inch":{price: 60, stock: 5},
    "3/4 inch":{price: 80, stock: 3},
    "1 inch":{price: 100, stock: 2 },
  },
  "PE MALE COUPLING":{
    "1/2 inch":{price: 65, stock: 9},
    "3/4 inch":{price: 85, stock: 10},
    "1 inch":{price: 110, stock: 2 },
  },
  "PE TEE":{
    "1/2 inch":{price: 125, stock: 11},
    "3/4 inch":{price: 170, stock: 10},
    "1 inch":{price: 210, stock: 2 },
  },
  "PVC COUPLING":{
    "1/2 inch":{price: 8, stock: 20},
    "3/4 inch":{price: 12, stock: 20},
    "1 inch":{price: 15, stock: 20 },
  },
  "PVC CAP":{
    "1/2 inch":{price: 10, stock: 25},
    "3/4 inch":{price: 15, stock: 20},
    "1 inch":{price: 20, stock: 15 },
  },
  "PVC TEE":{
    "1/2 inch":{price: 18, stock: 28},
    "3/4 inch":{price: 22, stock: 23},
    "1 inch":{price: 25, stock: 12 },
  },
  "PVC GATE VALVE":{
    "1/2 inch":{price: 50, stock: 50},
    "3/4 inch":{price: 100, stock: 45},
    "1 inch":{price: 150, stock:  22},
  },
  "A-PLUS QDE EMERALD GREEN": {
    "1/4 Liter": { price: 64, stock: 50 },
    "1 Liter": { price: 180, stock: 20 },
    "1 Gallon": { price: 650, stock: 10 },
  },
  "A-PLUS QDE MAPLE": {
    "1/4 Liter": { price: 72, stock: 50 },
    "1 Liter": { price: 170, stock: 24 },
    "1 Gallon": { price: 680, stock: 16 },
  },
  "A-PLUS QDE YELLOW": {
    "1/4 Liter": { price: 60, stock: 50 },
    "1 Liter": { price: 150, stock: 24 },
    "1 Gallon": { price: 650, stock: 16 },
  },   
  "A-PLUS QDE ORANGE": {
    "1/4 Liter": { price: 65, stock: 50 },
    "1 Liter": { price: 170, stock: 24 },
    "1 Gallon": { price: 670, stock: 16 },
  },
  "DAVIES ACRYLIC COLOR TOULODINE RED": {
    "1/8 Liter": { price: 18, stock: 50 },
    "1/4 Liter": { price: 65, stock: 30 },
  },
  "ALPHA ACRYLIC COLOR PTHALO GREEN": {
    "1/8 Liter": { price: 20, stock: 50 },
    "1/4 Liter": { price: 70, stock: 30 },
  },
  "ALPHA ACRYLIC COLOR BURNT UMBER": {
    "1/8 Liter": { price: 22, stock: 50 },
    "1/4 Liter": { price: 74, stock: 30 },
  },
  "ALPHA ACRYLIC COLOR RAW SIENNA": {
    "1/8 Liter": { price: 25, stock: 50 },
    "1/4 Liter": { price: 80, stock: 30 },
  },
};
const bulbData = {
  "ECOLUM LIGHT BULB 3W": { price: 150, stock: 20 },
}

const modal = document.getElementById("productModal");
const closeModalBtn = document.querySelector(".close-btn");

// Modal fields
const modalImage = document.getElementById("modalImage");
const modalTitle = document.getElementById("modalTitle");
const modalUse = document.getElementById("modalUse");
const modalType = document.getElementById("modalType");
const modalColor = document.getElementById("modalColor");
const modalColorSwatch = document.getElementById("modalColorSwatch");
const modalSizeSelect = document.getElementById("modalSizeSelect");
const modalMaterial = document.getElementById("modalMaterial");
const modalPvcSizeSelect = document.getElementById("modalPvcSizeSelect");
const modalDescription = document.getElementById("modalDescription");
const modalPrice = document.getElementById("modalPrice");
const modalStock = document.getElementById("modalStock");

const paintFields = document.querySelector(".paint-fields");
const pvcFields = document.querySelector(".pvc-fields");

// Attach modal open to product cards
document.querySelectorAll(".product-card").forEach(card => {
  card.addEventListener("click", () => openModal(card));
});

const bulbFields = document.querySelector(".bulb-fields");
const modalBulbWatts = document.getElementById("modalBulbWatts");
const modalBulbType = document.getElementById("modalBulbType");

function openModal(productCard) {
  const title = productCard.getAttribute("data-title");
  const image = productCard.querySelector("img").src;
  const description = productCard.getAttribute("data-description");
  const type = productCard.getAttribute("data-type");
  const material = productCard.getAttribute("data-material");
  const use = productCard.getAttribute("data-use") || "N/A";
  const paintType = productCard.getAttribute("data-paint-type") || "N/A";
  const color = productCard.getAttribute("data-color") || "gray";

  modalImage.src = image;
  modalTitle.textContent = title;
  modalDescription.textContent = description || "No description available.";
  modalUse.textContent = use;
  modalType.textContent = paintType;
  modalMaterial.textContent = material || "PVC";
  modalColor.textContent = color;
  modalColorSwatch.style.backgroundColor = color;

  // Show/hide fields
  paintFields.style.display = "none";
  pvcFields.style.display = "none";
  bulbFields.style.display = "none";

  if (type && type.toLowerCase() === "paint") {
    paintFields.style.display = "block";
  } else if (type && (type.toLowerCase() === "ppr" || material)) {
    pvcFields.style.display = "block";
  } else if (type && type.toLowerCase() === "bulb") {
    bulbFields.style.display = "block";
    // Extract wattage from title e.g., "ECOLUM LIGHT BULB 3W"
    const wattageMatch = title.match(/\b\d+W\b/i);
    modalBulbWatts.textContent = wattageMatch ? wattageMatch[0] : "N/A";
    modalBulbType.textContent = "LED"; // You can modify this or make it dynamic
  }

  modal.style.display = "block";

  updatePriceAndStock();
}

function updatePriceAndStock() {
  const selectedProduct = modalTitle.textContent;

  if (paintFields.style.display === "block") {
    const selectedSize = modalSizeSelect.value;
    const selectedData = productSizeData[selectedProduct]?.[selectedSize];
    if (selectedData) {
      modalPrice.textContent = `₱ ${selectedData.price}`;
      modalStock.textContent = `Stock: ${selectedData.stock}`;
    } else {
      modalPrice.textContent = "Not Available";
      modalStock.textContent = "Not Available";
    }
  } else if (pvcFields.style.display === "block") {
    const selectedSize = modalPvcSizeSelect.value;
    const selectedData = productSizeData[selectedProduct]?.[selectedSize];
    if (selectedData) {
      modalPrice.textContent = `₱ ${selectedData.price}`;
      modalStock.textContent = `Stock: ${selectedData.stock}`;
    } else {
      modalPrice.textContent = "Price not available";
      modalStock.textContent = "Stock information not available";
    }
  } else if (bulbFields.style.display === "block") {
    const bulbInfo = bulbData[selectedProduct];
    if (bulbInfo) {
      modalPrice.textContent = `₱ ${bulbInfo.price}`;
      modalStock.textContent = `Stock: ${bulbInfo.stock}`;
    } else {
      modalPrice.textContent = "Price not available";
      modalStock.textContent = "Stock information not available";
    }
  }
}

modalSizeSelect.addEventListener("change", updatePriceAndStock);
modalPvcSizeSelect.addEventListener("change", updatePriceAndStock);

// Close modal logic
closeModalBtn.onclick = () => {
  modal.style.display = "none";
};
window.onclick = (e) => {
  if (e.target === modal) {
    modal.style.display = "none";
  }
};

// Pagination
document.addEventListener("DOMContentLoaded", function () {
  const productsPerPage = 4;
  const productGrid = document.querySelector('.product-grid');
  const productCards = Array.from(document.querySelectorAll('.product-card'));
  const paginationContainer = document.querySelector('.pagination');

  const pagesToShow = 3; // show 3 page buttons at a time
  const totalPages = Math.ceil(productCards.length / productsPerPage);

  let currentPage = 1;
  let currentPageGroup = 0; // group of pages (0 = pages 1-3, 1 = pages 4-6, etc)

  function showPage(page) {
    currentPage = page;
    const start = (page - 1) * productsPerPage;
    const end = start + productsPerPage;

    productCards.forEach((card, index) => {
      card.style.display = (index >= start && index < end) ? '' : 'none';
    });

    updatePagination();
  }

  function updatePagination() {
    paginationContainer.innerHTML = '';

    // Calculate total groups
    const totalGroups = Math.ceil(totalPages / pagesToShow);

    // Create Prev group button
    const prevBtn = document.createElement('a');
    prevBtn.href = "#";
    prevBtn.textContent = "Prev";
    prevBtn.className = "prev-btn";
    prevBtn.style.pointerEvents = currentPageGroup === 0 ? "none" : "auto";
    prevBtn.style.opacity = currentPageGroup === 0 ? 0.5 : 1;
    prevBtn.addEventListener('click', e => {
      e.preventDefault();
      if (currentPageGroup > 0) {
        currentPageGroup--;
        showPage(currentPageGroup * pagesToShow + 1);
      }
    });
    paginationContainer.appendChild(prevBtn);

    // Show page buttons for current group
    const startPage = currentPageGroup * pagesToShow + 1;
    const endPage = Math.min(startPage + pagesToShow - 1, totalPages);

    for (let i = startPage; i <= endPage; i++) {
      const pageBtn = document.createElement('a');
      pageBtn.href = "#";
      pageBtn.textContent = i;
      pageBtn.className = "page-number";
      if (i === currentPage) pageBtn.classList.add("active");

      pageBtn.addEventListener('click', (e) => {
        e.preventDefault();
        showPage(i);
      });

      paginationContainer.appendChild(pageBtn);
    }

    // Create Next group button
    const nextBtn = document.createElement('a');
    nextBtn.href = "#";
    nextBtn.textContent = "Next";
    nextBtn.className = "next-btn";
    nextBtn.style.pointerEvents = currentPageGroup >= totalGroups - 1 ? "none" : "auto";
    nextBtn.style.opacity = currentPageGroup >= totalGroups - 1 ? 0.5 : 1;
    nextBtn.addEventListener('click', e => {
      e.preventDefault();
      if (currentPageGroup < totalGroups - 1) {
        currentPageGroup++;
        showPage(currentPageGroup * pagesToShow + 1);
      }
    });
    paginationContainer.appendChild(nextBtn);
  }

  showPage(1);
});