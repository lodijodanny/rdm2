# RDM 2.0 - Material Design 3 Component System

## Descripción del Proyecto
RDM 2.0 es un sistema de componentes moderno basado en Material Design 3 (MD3) implementado en PHP + CSS. El proyecto incluye componentes de interfaz estándar como buttons, badges, checkboxes, radio buttons, switches, cards, lists, navigation, y más.

**Ubicación**: `/Applications/XAMPP/xamppfiles/htdocs/proyectos/rdm2/`

---

## 1. CONVENCIONES DE NOMENCLATURA

### Archivos CSS
- **Nombre**: SINGULAR (minúsculas)
- **Ubicación**: `css/`
- **Ejemplos**:
  - `badge.css` - Componente Badge
  - `radiobutton.css` - Componente Radio Button
  - `checkbox.css` - Componente Checkbox
  - `button.css` - Componente Button
  - `card.css` - Componente Card
  - `list.css` - Componente List
  - `topbar.css` - Top App Bar
  - `bottombar.css` - Bottom App Bar

### Archivos PHP
- **Nombre**: PLURAL (minúsculas)
- **Ubicación**: Raíz del proyecto
- **Ejemplos**:
  - `badges.php` - Página de demostración Badge
  - `radiobuttons.php` - Página de demostración Radio Buttons
  - `checkboxes.php` - Página de demostración Checkboxes
  - `buttons.php` - Página de demostración Buttons
  - `cards.php` - Página de demostración Cards
  - `lists.php` - Página de demostración Lists

### Clases CSS
- **Sistema**: BEM modificado + variantes RDM
- **Prefijo**: `rdm-` (RedManGo)
- **Patrón**: `rdm-[component]--[element]` o `rdm-[component]__[element]`
- **Ejemplos**:
  - `.rdm-badge` - Componente badge
  - `.rdm-badge--content` - Badge con contenido (números)
  - `.rdm-radio` - Componente radio button
  - `.rdm-radio__icon` - Icono del radio
  - `.rdm-radio__label` - Label del radio
  - `.rdm-checkbox--container` - Contenedor checkbox
  - `.rdm-checkbox--checkmark` - Marca visual checkbox

---

## 2. ESTRUCTURA DE COMPONENTES

### Estructura Base HTML - Radio Button/Checkbox
```html
<label class="rdm-radio">
    <input type="radio" name="groupname" value="value">
    <span class="rdm-radio__icon"></span>
    <span class="rdm-radio__label">Etiqueta</span>
</label>
```

### Estructura Grupo de Opciones (Fieldset)
```html
<fieldset class="rdm-radio--fieldset">
    <legend class="rdm-sys-typography--title-large">Grupo de opciones</legend>
    <label class="rdm-radio">
        <input type="radio" name="language" value="javascript">
        <span class="rdm-radio__icon"></span>
        <span class="rdm-radio__label">JavaScript</span>
    </label>
    <label class="rdm-radio">
        <input type="radio" name="language" value="python">
        <span class="rdm-radio__icon"></span>
        <span class="rdm-radio__label">Python</span>
    </label>
</fieldset>
```

### Estructura Página de Demostración
```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>RDM 2.0 - [ComponentName]</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/topbar_scroll.js"></script>
    <script src="js/theme_toggle.js"></script>
</head>
<body>
<!-- Top bar (igual para todas las páginas) -->
<!-- Main content en rdm-form--container -->
</body>
</html>
```

---

## 3. ESPECIFICACIONES MATERIAL DESIGN 3

### Medidas Estándar (em-based para escalabilidad)

#### Radio Button
- **Icon size**: 20dp = `1.25em`
- **State layer size**: 40dp = `2.5em`
- **Target size (área táctil)**: 48dp = `3em` ⚠️ CRÍTICO para accesibilidad
- **Borde**: 2px
- **Border radius icon**: 50% (círculo)
- **Border radius inner dot**: 50% (círculo)

#### Checkbox
- **Icon size**: 20dp = `1.25em`
- **State layer size**: 40dp = `2.5em`
- **Target size (área táctil)**: 48dp = `3em`
- **Borde**: 2px
- **Border radius**: 2dp = `0.125em`
- **Checkmark stroke width**: 2px

#### Badge
- **Small badge**: 0.625em × 0.625em
- **Large badge**: 1em altura, min-width 1em, max-width 2.125em
- **Border**: 2px
- **Border radius small**: 0.3125em
- **Border radius large**: 0.5em
- **Padding large**: 0.2em 0.35em

### Color Tokens (Variables CSS)

#### Estados Sin Seleccionar
- **Borde**: `var(--md-sys-color-on-surface-variant)`
- **Fondo**: transparent

#### Estados Seleccionados
- **Borde**: `var(--md-sys-color-primary)`
- **Círculo interior**: `var(--md-sys-color-primary)`

#### Labels
- **Color normal**: `var(--md-sys-color-on-surface)`
- **Color disabled**: `var(--md-sys-color-on-surface)` con `opacity: 0.38`

#### State Layer (Hover/Focus/Pressed)
- **Unselected hover**: `var(--md-sys-color-on-surface)` + `opacity: 0.08`
- **Selected hover**: `var(--md-sys-color-primary)` + `opacity: 0.08`
- **Unselected pressed**: `var(--md-sys-color-on-surface)` + `opacity: 0.12`
- **Selected pressed**: `var(--md-sys-color-primary)` + `opacity: 0.12`

#### Badge
- **Background**: `var(--md-sys-color-error)`
- **Text**: `var(--md-sys-color-on-error)`
- **Border**: `var(--md-sys-color-surface)`

### Estados de Interacción

#### Radio Button / Checkbox Estados:
1. **Enabled (unselected)** - Estado base sin marcar
2. **Enabled (selected)** - Estado base marcado
3. **Hover** - Cursor sobre el elemento (state layer visible)
4. **Focus** - Foco por teclado (state layer + outline)
5. **Pressed** - Click activo (state layer más opaco)
6. **Disabled (unselected)** - Deshabilitado sin marcar (opacity 0.38)
7. **Disabled (selected)** - Deshabilitado marcado (opacity 0.38)

#### Transiciones
- **Duración estándar**: 0.2s-0.3s
- **Easing**: `ease` o `ease-out`
- **Propiedades animadas**: 
  - `border-color`
  - `background-color`
  - `color`
  - `opacity`

---

## 4. PATRONES CSS

### Input Nativo Invisible pero Interactivo
```css
.rdm-radio input[type="radio"] {
    position: absolute;
    opacity: 0;
    width: 3em;      /* 48dp - target size */
    height: 3em;
    margin: 0;
    cursor: pointer;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
```

### State Layer Centrado en Icon
```css
.rdm-radio__icon::before {
    content: '';
    position: absolute;
    width: 2.5em;    /* 40dp */
    height: 2.5em;
    border-radius: 50%;
    background-color: transparent;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
```

### State Layer con Color Diferenciado
```css
/* Hover - unselected */
.rdm-radio:hover .rdm-radio__icon::before {
    background-color: var(--md-sys-color-on-surface);
    opacity: 0.08;
}

/* Hover - selected */
.rdm-radio:has(input[type="radio"]:checked):hover .rdm-radio__icon::before {
    background-color: var(--md-sys-color-primary);
    opacity: 0.08;
}
```

### Fieldset con Gap Consistente
```css
.rdm-radio--fieldset {
    border: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 0.5em;  /* Espaciado consistente entre elementos */
}

.rdm-radio--fieldset legend {
    padding: 0;
    margin: 0;
    margin-bottom: 0.5em;
}
```

---

## 5. CHECKLIST PARA NUEVOS COMPONENTES

Cuando implementes un nuevo componente MD3, verifica:

### Estructura
- [ ] Archivo CSS singular en `css/`
- [ ] Archivo PHP plural en raíz
- [ ] Clases con prefijo `rdm-`
- [ ] Input nativo invisible pero funcional

### Medidas
- [ ] Componente visual correcto (en em)
- [ ] State layer 2.5em (40dp)
- [ ] Target size 3em (48dp) ⚠️ CRÍTICO
- [ ] Border radius correcto en em

### Colores
- [ ] Token `--md-sys-color-primary` para selected
- [ ] Token `--md-sys-color-on-surface-variant` para unselected
- [ ] Label con `--md-sys-color-on-surface`
- [ ] Disabled con opacity 0.38

### Estados
- [ ] Enabled (unselected/selected)
- [ ] Hover (state layer visible)
- [ ] Focus (state layer + outline)
- [ ] Pressed (state layer más opaco)
- [ ] Disabled (opacity 0.38)

### Transiciones
- [ ] Duración 0.2s-0.3s
- [ ] Easing: ease o ease-out
- [ ] Propiedades animadas correctas

### Accesibilidad
- [ ] Target size 48dp
- [ ] Focus visible claro
- [ ] Label visible y asociado
- [ ] Contraste de colores WCAG AA

### Documentación
- [ ] Página de demostración con 4+ estados
- [ ] Ejemplos con y sin labels
- [ ] Grupo de opciones en fieldset
- [ ] Enlace en index.php

---

## 6. ARCHIVO DE IMPORTACIÓN CSS

En `css/estilos.css`, los componentes se importan en orden de dependencia:

```css
@import url(md/theme.css);           /* Tokens de color y tema */
@import url(normalize.css);          /* Reset */
@import url(typography.css);         /* Tipografía */
@import url(icons.css);              /* Material Symbols */
@import url(shape.css);              /* Shapes/Border radius */
@import url(button.css);             /* Buttons base */
@import url(card.css);               /* Cards */
@import url(list.css);               /* Lists */
@import url(badge.css);              /* Badges */
@import url(topbar.css);             /* Top bar */
@import url(bottombar.css);          /* Bottom bar */
@import url(navigation_bar.css);     /* Navigation bar */
@import url(navigation_drawer.css);  /* Navigation drawer */
@import url(navigation_rail.css);    /* Navigation rail */
@import url(tab.css);                /* Tabs */
@import url(form.css);               /* Formularios */
@import url(textfield.css);          /* Text fields */
@import url(checkbox.css);           /* Checkboxes */
@import url(radiobutton.css);        /* Radio buttons */
@import url(switches.css);           /* Switches */
```

---

## 7. TEMAS (Light/Dark)

Los tokens de color cambian automáticamente según el tema en `css/md/`:
- `theme.css` - Variables base
- `theme.light.css` - Overrides tema light
- `theme.dark.css` - Overrides tema dark

**No hardcodees colores**, siempre usa tokens CSS.

---

## 8. MEJORES PRÁCTICAS

### ✅ HACER
- Usar em para todas las medidas (escalabilidad)
- Usar tokens de color CSS (temas)
- Input nativo invisible (accesibilidad, funcionalidad)
- State layer diferenciado por estado (UX)
- Focus visible claro (accesibilidad)
- Target size 48dp mínimo (usabilidad táctil)
- Transiciones suaves 0.2s-0.3s
- BEM para nomenclatura de clases
- Documentar ejemplos en página PHP

### ❌ NO HACER
- Hardcodear colores hex/rgb
- Usar px para medidas (usa em)
- Input nativo visible
- State layer sin color
- Focus invisible
- Target size menor a 48dp
- Transiciones instantáneas
- Nombres de clase genéricos
- Falta de ejemplos

---

## 9. ESTRUCTURA DE PROYECTO ACTUAL

```
rdm2/
├── css/
│   ├── badge.css
│   ├── bottombar.css
│   ├── button.css
│   ├── card.css
│   ├── checkbox.css
│   ├── estilos.css (importa todos)
│   ├── icons.css
│   ├── list.css
│   ├── navigation_bar.css
│   ├── navigation_drawer.css
│   ├── navigation_rail.css
│   ├── normalize.css
│   ├── radiobutton.css
│   ├── shapes.css
│   ├── switches.css
│   ├── tabs.css
│   ├── textfield.css
│   ├── topbar.css
│   ├── typography.css
│   └── md/
│       ├── colors.module.css
│       ├── theme.css
│       ├── theme.dark.css
│       ├── theme.light.css
│       ├── tokens.css
│       └── typography.module.css
├── js/
│   ├── topbar_scroll.js
│   └── theme_toggle.js
├── img/
├── badges.php
├── bottombar.php
├── buttons.php
├── cards.php
├── checkboxes.php
├── index.php
├── lists.php
├── navigation_bar.php
├── navigation_drawer.php
├── navigation_rail.php
├── radiobuttons.php
├── shapes.php
├── switches.php
├── tabs.php
├── topbar.php
└── typography.php
```

---

## 10. GUÍA DE DEBUGGING

### El state layer no se centra
- Verifica que `.rdm-radio__icon` tenga `position: relative`
- Verifica que el pseudo-elemento use `left: 50%; top: 50%; transform: translate(-50%, -50%)`

### El espaciado entre opciones es inconsistente
- Usa `display: flex; flex-direction: column; gap: 0.5em` en fieldset
- No mezcles margin con gap (collapse issues)

### Focus outline no visible
- Verifica que use `input[type="radio"]:focus-visible + .rdm-radio__icon`
- Asegúrate que `outline-offset` sea positivo (2px)

### Colores no cambian con tema
- Verifica que uses tokens CSS `var(--md-sys-color-*)`
- Revisa que estilos.css importe theme.css primero

### Target size no funciona
- Input nativo debe ser 3em × 3em
- Debe estar centered: `left: 50%; top: 50%; transform: translate(-50%, -50%)`
- El cursor debe cambiar a pointer

---

## 11. RECURSOS ÚTILES

- **Material Design 3**: https://m3.material.io
- **Radio Button specs**: https://m3.material.io/components/radio-button
- **Checkbox specs**: https://m3.material.io/components/checkbox
- **Accessibility**: https://www.w3.org/WAI/tutorials/forms/

---

**Última actualización**: 9 de enero, 2026
**Versión**: 1.0
**Status**: En desarrollo activo
