function sendEmail() {
    const name = document.getElementById("name")?.value.trim();
    const email = document.getElementById("email")?.value.trim();
    const companyName = document.getElementById("company_name")?.value.trim();
    const productSelect = document.getElementById("product_id");
    const productInterest =
        productSelect?.options[productSelect.selectedIndex]?.text || "";
    const brief = document.getElementById("brief")?.value.trim();

    // Check if all required fields are filled
    if (!name || !email || !companyName || !productInterest || !brief) {
        alert("Please fill in all required fields.");
        return; // Exit the function if validation fails
    }

    const subject = "New Appointment Request";
    const body = `
        Name: ${name}
        Email: ${email}
        Company Name: ${companyName}
        Product Interest: ${productInterest}
        Brief: ${brief}
    `;

    const mailtoLink = `mailto:admin@setiaprimatamas.com?subject=${encodeURIComponent(
        subject
    )}&body=${encodeURIComponent(body)}`;

    window.location.href = mailtoLink;
}
