/*
JavaScript para Search Bar
Maneja la lógica del icono clear y eventos
*/

document.addEventListener('DOMContentLoaded', function() {
    // Seleccionar todos los search inputs
    const searchInputs = document.querySelectorAll('.rdm-search--control input[type="search"]');
    
    searchInputs.forEach(input => {
        const searchControl = input.closest('.rdm-search--control');
        const clearIcon = searchControl.querySelector('.rdm-search--trailing-icon');
        
        if (!clearIcon) return;
        
        // Función para actualizar visibilidad del icono
        function updateClearIcon() {
            if (input.value.trim().length > 0) {
                clearIcon.classList.add('show');
            } else {
                clearIcon.classList.remove('show');
            }
        }
        
        // Ejecutar al cargar (por si hay valor por defecto)
        updateClearIcon();
        
        // Escuchar cambios en el input
        input.addEventListener('input', updateClearIcon);
        input.addEventListener('change', updateClearIcon);
        
        // Click en el icono clear
        clearIcon.addEventListener('click', function(e) {
            e.preventDefault();
            input.value = '';
            input.focus();
            updateClearIcon();
        });
    });
});
