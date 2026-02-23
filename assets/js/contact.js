const form = document.getElementById("contactForm");

if (form) {
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const name = document.getElementById("name").value.trim();
    const message = document.getElementById("message").value.trim();

    const template = form.dataset.message;

    const finalMessage = template
      .replace("{name}", name)
      .replace("{message}", message);

    const phone = "34654926645";

    const url = `https://wa.me/${phone}?text=${encodeURIComponent(finalMessage)}`;

    window.open(url, "_blank");
  });
}
