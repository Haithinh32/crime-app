import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// Get all dropdown buttons
const dropdownButtons = document.querySelectorAll('.dropdown-button');

// Add event listener to each dropdown button
dropdownButtons.forEach(button => {
  button.addEventListener('click', toggleDropdown);
});

function toggleDropdown(event) {
  // Get the dropdown menu associated with the clicked button
  const dropdownMenu = document.querySelector(`.dropdown-menu[data-target="${event.target.dataset.target}"]`);

  const isHidden = dropdownMenu.classList.contains('hidden');
  if (isHidden) {
    dropdownMenu.classList.remove('hidden');
    dropdownMenu.classList.add('block');

    // Add transition classes for show animation
    dropdownMenu.classList.add('transition', 'ease-out', 'duration-100');
    dropdownMenu.classList.add('transform', 'opacity-0', 'scale-95');
    dropdownMenu.classList.remove('transform', 'opacity-0', 'scale-95');
    dropdownMenu.classList.add('transform', 'opacity-100', 'scale-100');
  } else {
    dropdownMenu.classList.add('hidden');
    dropdownMenu.classList.remove('block');

    // Add transition classes for hide animation
    dropdownMenu.classList.add('transition', 'ease-in', 'duration-75');
    dropdownMenu.classList.add('transform', 'opacity-100', 'scale-100');
    dropdownMenu.classList.remove('transform', 'opacity-100', 'scale-100');
    dropdownMenu.classList.add('transform', 'opacity-0', 'scale-95');
  }
}