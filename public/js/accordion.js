const accordionButtons = document.querySelectorAll('.accordion-button');

accordionButtons.forEach(button => {
    button.addEventListener('click', () => {
        const content = button.nextElementSibling; // Select the content element directly below the button

        // Check if the content is already visible
        const isVisible = !content.classList.contains('hidden');

        // Reset all other accordion items
        accordionButtons.forEach(btn => {
            const otherContent = btn.nextElementSibling;
            if (btn !== button) {
                otherContent.classList.add('hidden');
                otherContent.style.maxHeight = null; // Collapse other items
                const otherIcon = btn.querySelector('img');
                otherIcon.classList.remove('rotate-180'); // Reset rotation for other items
            }
        });

        // Toggle the clicked accordion item
        if (isVisible) {
            content.classList.add('hidden');
            content.style.maxHeight = null; // Collapse the current item
        } else {
            content.classList.remove('hidden');
            content.style.maxHeight = content.scrollHeight + 'px'; // Expand the current item
        }

        // Rotate the icon for the clicked button
        const icon = button.querySelector('img');
        icon.classList.toggle('rotate-180', !isVisible); // Rotate based on visibility
    });
});
