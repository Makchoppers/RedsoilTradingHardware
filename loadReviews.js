async function loadApprovedReviews() {
  try {
    const response = await fetch('get_approved_reviews.php');
    if (!response.ok) throw new Error('Failed to fetch reviews');
    const html = await response.text();
    document.getElementById('approvedReviewsContainer').innerHTML = html;
  } catch (err) {
    document.getElementById('approvedReviewsContainer').innerText = 'Unable to load reviews.';
    console.error(err);
  }
}

document.addEventListener('DOMContentLoaded', loadApprovedReviews);