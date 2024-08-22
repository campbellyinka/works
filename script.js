const form = document.getElementById('contact-form');


form.addEventListener('submit', (event) => {
  event.preventDefault();
  const name = form.elements.name.value;
  const email = form.elements.email.value;
  const message = form.elements.message.value;
  if (name === '' || email === '' || message === '') {
    alert('Please fill out all the fields.');
    return;
  }
  if (!/\S+@\S+\.\S+/.test(email)) {
    alert('Please enter a valid email address.');
    return;
  }
  // Send the form data to the server
});