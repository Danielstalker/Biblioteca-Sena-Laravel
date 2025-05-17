document.addEventListener('DOMContentLoaded', function() {
  const bookItems = document.querySelectorAll('.book-item');

  bookItems.forEach(bookItem => {
    bookItem.addEventListener('click', function(event) {
      // Verifica si el clic ocurrió en un elemento <a> dentro de .book-item
      const linkElement = this.querySelector('a');
      if (linkElement) {
        // Evita el comportamiento predeterminado del clic (si es necesario)
        event.preventDefault();
        // Redirige a la URL especificada en el atributo href del enlace
        window.location.href = linkElement.getAttribute('href');
      }
    });
  });
});
