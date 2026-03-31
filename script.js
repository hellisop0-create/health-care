const hamburger = document.getElementById('hamburger');

hamburger.addEventListener('click', () => {
  // This triggers the CSS transitions defined above
  hamburger.classList.toggle('is-active');
  
  // Also toggle your menu visibility here
  const navMenu = document.getElementById('nav-menu');
  navMenu.classList.toggle('active');
});

// find a doctor
function filterDoctors(selectedDept) {
    // 1. Get every element with the class "doctor-card"
    var cards = document.getElementsByClassName('doctor-card');

    // 2. Loop through every card
    for (var i = 0; i < cards.length; i++) {
        var card = cards[i];
        var cardDept = card.getAttribute('data-dept');

        // 3. Logic: If "all" is picked OR the card matches the selection, show it.
        if (selectedDept === "all" || selectedDept === cardDept) {
            card.style.display = "flex"; // Shows the card
        } else {
            card.style.display = "none"; // Hides the card
        }
    }
}