export function initContactForm() {
  const form = document.querySelector('.contact-form');

  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    const formData = new FormData(form);

    try {
      const response = await fetch(form.action, {
        method: 'POST',
        body: formData
      });

      const result = await response.json();

      if (result.success) {
        showSuccessMessage(form);
        form.reset();
      }
    } catch (error) {
      alert('Something went wrong.');
    }
  });
}

function showSuccessMessage(form) {
  const msg = document.createElement('div');
  msg.className = 'form-success';
  msg.textContent = 'Message sent successfully 💌';

  form.prepend(msg);
  setTimeout(() => msg.remove(), 4000);
}
