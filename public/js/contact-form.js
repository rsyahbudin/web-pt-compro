// document.addEventListener('DOMContentLoaded', function() {
//     const dateButton = document.getElementById('dateButton');
//     const dateInput = document.getElementById('dateInput');

//     // Function to trigger date selection from the hidden input
//     function triggerDateSelection() {
//         dateInput.showPicker();
//         console.log("input clicked");
//     }

//     // Function to update button text with selected date value
//     function updateButtonText() {
//         dateButton.textContent = dateInput.value;
//         dateButton.classList.add('font-semibold');
//     }

//     // Event listener for button click to trigger date selection
//     dateButton.addEventListener('click', function() {
//         triggerDateSelection();
//     });

//     // Event listener for input change to update button text
//     dateInput.addEventListener('change', function() {
//         updateButtonText();
//     });
// });

document.addEventListener("DOMContentLoaded", function () {
    const dateButton = document.getElementById("dateButton");
    const dateInput = document.getElementById("dateInput");

    dateButton.addEventListener("click", () => dateInput.showPicker());
    dateInput.addEventListener("change", () => {
        dateButton.textContent = dateInput.value;
        dateButton.classList.add("font-semibold");
    });
});

function sendEmail() {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const companyName = document.getElementById("company_name").value; // Get the company name
    const productSelect = document.getElementById("product_id");
    const productInterest =
        productSelect.options[productSelect.selectedIndex].text; // Get the selected option's text
    const brief = document.getElementById("brief").value;

    const subject = "New Appointment Request";
    const body = `
        Name: ${name}
        Email: ${email}
        Company Name: ${companyName} 
        Product Interest: ${productInterest}
        Brief: ${brief}
    `;

    // Update the email address with the correct recipient
    const mailtoLink = `mailto:alghifari@setiaprimatamas.com?subject=${encodeURIComponent(
        subject
    )}&body=${encodeURIComponent(body)}`;

    window.location.href = mailtoLink;
}
