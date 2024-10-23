document.addEventListener("DOMContentLoaded", function () {
    const dateButton = document.getElementById("dateButton");
    const dateInput = document.getElementById("dateInput");

    if (dateButton && dateInput) {
        dateButton.addEventListener("click", () => {
            if (typeof dateInput.showPicker === "function") {
                dateInput.showPicker();
            } else {
                alert("Date picker not supported on this browser.");
            }
        });

        dateInput.addEventListener("change", () => {
            dateButton.textContent = dateInput.value;
            dateButton.classList.add("font-semibold");
        });
    }
});

function sendEmail() {
    const name = document.getElementById("name")?.value || "";
    const email = document.getElementById("email")?.value || "";
    const companyName = document.getElementById("company_name")?.value || "";
    const productSelect = document.getElementById("product_id");
    const productInterest =
        productSelect?.options[productSelect.selectedIndex]?.text || "";
    const brief = document.getElementById("brief")?.value || "";

    const subject = "New Appointment Request";
    const body = `
        Name: ${name}
        Email: ${email}
        Company Name: ${companyName}
        Product Interest: ${productInterest}
        Brief: ${brief}
    `;

    const mailtoLink = `mailto:alghifari@setiaprimatamas.com?subject=${encodeURIComponent(
        subject
    )}&body=${encodeURIComponent(body)}`;

    window.location.href = mailtoLink;
}
