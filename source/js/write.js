function displayPlugin() {
    const forms = document.querySelectorAll('.btn');
    const formes = document.querySelectorAll('.form')
    for (const form of forms) {
      form.addEventListener('click', () => {
        if (form.classList.contains('activate')) {
          form.classList.remove('activate');
          document.querySelector('.form.activate').classList.remove('activate');
        } else {
          clearActiveClasses();
          form.classList.add('activate');
          document.querySelector('.form').classList.add('activate');
        }
      });
    }
    function clearActiveClasses() {
      forms.forEach((form) => {
        form.classList.remove('activate');
      });
      formes.forEach((form) => {
        form.classList.remove('activate');
      });
    }
  }
  displayPlugin();
  