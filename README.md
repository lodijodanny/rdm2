# RDM2 — Componentes estilo Material (MD3)

Proyecto de demostración de componentes de interfaz inspirados en Material Design 3 (MD3), implementados en PHP/HTML y CSS, con temas claro/oscuro y tokens de diseño.

## Contenido
- Página principal: [index.php](index.php)
- Ejemplos de componentes: 
  - [cards.php](cards.php), [forms.php](forms.php), [buttons.php](buttons.php), [lists.php](lists.php), [badges.php](badges.php), [tabs.php](tabs.php), [topbar.php](topbar.php), [bottombar.php](bottombar.php), [navigation_bar.php](navigation_bar.php), [navigation_drawer.php](navigation_drawer.php), [navigation_rail.php](navigation_rail.php), [shapes.php](shapes.php), [typography.php](typography.php), [barra_piso.php](barra_piso.php)
- Estilos globales: [css/estilos.css](css/estilos.css)
- Componentes CSS: 
  - Tarjetas: [css/cards.css](css/cards.css)
  - Formularios: [css/forms.css](css/forms.css)
  - Botones: [css/buttons.css](css/buttons.css)
  - Text fields: [css/textfields.css](css/textfields.css) (si está presente)
  - Navegación: [css/navigation_bar.css](css/navigation_bar.css), [css/navigation_drawer.css](css/navigation_drawer.css), [css/navigation_rail.css](css/navigation_rail.css), [css/topbar.css](css/topbar.css), [css/bottombar.css](css/bottombar.css), [css/tabs.css](css/tabs.css)
  - Tipografía: [css/typography.css](css/typography.css)
  - Iconos (Material Symbols): [css/icons.css](css/icons.css)
- Temas y tokens MD: 
  - Tokens: [css/md/tokens.css](css/md/tokens.css)
  - Tema claro: [css/md/theme.light.css](css/md/theme.light.css)
  - Tema oscuro: [css/md/theme.dark.css](css/md/theme.dark.css)
  - Tipografía MD: [css/md/typography.module.css](css/md/typography.module.css)
  - Colores de muestra: [css/md/colors.module.css](css/md/colors.module.css)
- Imágenes: [img/](img)
- JS: [js/topbar_scroll.js](js/topbar_scroll.js)

## Filosofía y pautas
- Paridad visual: `forms` y `cards` comparten estructura (container, media, body, action) y variantes `elevated`, `filled`, `outlined`, `flat`.
- Semántica correcta: en formularios se usa `<form>` con atributos `action`, `method`, `target` cuando corresponda.
- Acciones alineables: secciones `rdm-*-action-left|center|right` para control de alineación.
- Botones en formularios: `type="submit"` (primario, usualmente `filled`) y `type="reset"` (secundario, `text` u `outlined`).
- Outlined estándar MD3: borde 1px y color `--md-sys-color-outline` (ver tokens y temas).
- Temas: variables MD se aplican vía `html[data-theme="light|dark"]`.

## Ejecutar localmente
- Con XAMPP (recomendado): coloca el proyecto bajo `htdocs` y abre:
  - http://localhost/proyectos/rdm2/index.php
- Alternativa (PHP server embebido):
  ```bash
  php -S localhost:8000 -t /Applications/XAMPP/xamppfiles/htdocs/proyectos/rdm2
  ```
  Luego visita: http://localhost:8000/index.php

## Estructura de estilos
- Entrada principal: [css/estilos.css](css/estilos.css) importa normalización, tipografías, iconos, tokens, temas y componentes.
- Tokens MD: [css/md/tokens.css](css/md/tokens.css) define paleta y roles (`primary`, `surface`, `outline`, etc.).
- Tematización: [css/md/theme.light.css](css/md/theme.light.css) y [css/md/theme.dark.css](css/md/theme.dark.css) asignan variables según tema.

## Notas de diseño
- Variantes `outlined` usan `border: solid 0.0625em var(--md-sys-color-outline)` (~1px) conforme a MD3.
- `flat` no tiene sombra ni borde; `elevated` aplica elevación; `filled` usa superficies tonales.
- `media` puede usar imagen de fondo y capa de blur; `body` contiene tipografías MD; `action` aloja botones.

## Próximos pasos (opcionales)
- Ajustes de contraste si fuera necesario (tokens o estilos de secundarios en fondos `filled`).
- Ejemplos adicionales de formularios con validaciones y estados de `text fields`.

## Créditos
- Iconografía: Material Symbols.
- Inspiración: Material Design 3 (MD3).