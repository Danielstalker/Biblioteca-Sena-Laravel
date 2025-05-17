 document.addEventListener('DOMContentLoaded', function() {
            const categoriesDropdown = document.getElementById('categoriesDropdown');
            const dropdownToggle = categoriesDropdown.querySelector('.dropdown-toggle');

            dropdownToggle.addEventListener('click', function(event) {
                event.preventDefault(); // Evita que el enlace "#" recargue la página
                categoriesDropdown.classList.toggle('active'); // Alterna la clase 'active' en el contenedor .dropdown
            });

            // Cierra el menú desplegable si se hace clic fuera de él
            document.addEventListener('click', function(event) {
                if (!categoriesDropdown.contains(event.target)) {
                    categoriesDropdown.classList.remove('active');
                }
            });
        });