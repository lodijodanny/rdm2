/**
 * Text Field interactions
 * Maneja mostrar/ocultar icono clear y limpiar campos
 */

document.addEventListener('DOMContentLoaded', function() {
    // Obtener todos los text fields
    const textFields = document.querySelectorAll('.rdm-textfield--control input, .rdm-textfield--control textarea');
    
    textFields.forEach(field => {
        const control = field.closest('.rdm-textfield--control');
        const trailingIcon = control.querySelector('.rdm-textfield--trailing-icon');
        
        if (!trailingIcon) return;
        
        // Función para actualizar visibilidad del icono clear
        function updateClearIcon() {
            if (field.value.length > 0) {
                trailingIcon.classList.add('show');
            } else {
                trailingIcon.classList.remove('show');
            }
        }
        
        // Mostrar/ocultar icono según contenido
        field.addEventListener('input', updateClearIcon);
        field.addEventListener('focus', updateClearIcon);
        field.addEventListener('blur', function() {
            // Delay para permitir click en el icono
            setTimeout(updateClearIcon, 150);
        });
        
        // Limpiar campo al hacer click en el icono
        trailingIcon.addEventListener('click', function() {
            field.value = '';
            field.focus();
            updateClearIcon();
            // Disparar evento input para actualizar estado del label
            field.dispatchEvent(new Event('input', { bubbles: true }));
        });
        
        // Verificar estado inicial
        updateClearIcon();
    });
});
