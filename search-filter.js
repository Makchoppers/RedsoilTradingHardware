document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.querySelector('.search-input');
  const productCards = document.querySelectorAll('.product-card');

  searchInput.addEventListener('input', () => {
    const searchValue = searchInput.value.toLowerCase();

    productCards.forEach(card => {
      const title = card.getAttribute('data-title').toLowerCase();
      if (title.includes(searchValue)) {
        card.style.display = '';
      } else {
        card.style.display = 'none';
      }
    });
  });
});