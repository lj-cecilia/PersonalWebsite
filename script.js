const hamburgerButton = document.querySelector('hamburger')[0]
const directoryLinks = document.querySelector('link')[0]

hamburgerButton.addEventListener('click', () => {
    directoryLinks.classList.toggle('active');
});

