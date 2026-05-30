  const modal = document.getElementById('writeReviewModal');
  const openBtn = document.querySelector('.write-review-button');
  const closeBtn = document.querySelector('.close-modal');

  openBtn.onclick = () => modal.style.display = 'block';
  closeBtn.onclick = () => modal.style.display = 'none';
  window.onclick = (e) => { if (e.target === modal) modal.style.display = 'none'; };

  document.getElementById('reviewForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    fetch('submit_review.php', {
      method: 'POST',
      body: formData
    }).then(res => res.json()).then(data => {
      alert(data.message);
      if (data.success) modal.style.display = 'none';
    });
  });