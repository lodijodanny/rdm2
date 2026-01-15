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

### Estructura Base - Patrón Uniforme (Checkbox + Radio Button)

**Estructura semántica idéntica para checkbox y radiobutton:**

```html
<div class="rdm-[component]--wrapper">
    <label class="rdm-[component]--container">
        <input type="[checkbox|radio]" class="rdm-[component]--input" name="name" value="value">
        <span class="rdm-[component]--icon"></span>
        <span class="rdm-[component]--label">Etiqueta</span>
    </label>
</div>
```

**Ejemplo Checkbox:**
```html
<div class="rdm-checkbox--wrapper">
    <label class="rdm-checkbox--container">
        <input type="checkbox" class="rdm-checkbox--input" id="cb1" name="option1">
        <span class="rdm-checkbox--checkmark"></span>
        <span class="rdm-checkbox--label">Opción 1</span>
    </label>
</div>
```

**Ejemplo Radio Button:**
```html
<div class="rdm-radio--wrapper">
    <label class="rdm-radio--container">
        <input type="radio" class="rdm-radio--input" name="language" value="javascript">
        <span class="rdm-radio--icon"></span>
        <span class="rdm-radio--label">JavaScript</span>
    </label>
</div>
```

### Estructura Grupo de Opciones (Fieldset) - Patrón Uniforme

**Ambos componentes usan el mismo patrón con fieldset:**

```html
<fieldset class="rdm-[component]--fieldset">
    <legend class="rdm-sys-typography--title-large">Grupo de opciones</legend>
    
    <div class="rdm-[component]--wrapper">
        <label class="rdm-[component]--container">
            <input type="[checkbox|radio]" class="rdm-[component]--input" name="group" value="option1">
            <span class="rdm-[component]--icon"></span>
            <span class="rdm-[component]--label">Opción 1</span>
        </label>
    </div>
    
    <div class="rdm-[component]--wrapper">
        <label class="rdm-[component]--container">
            <input type="[checkbox|radio]" class="rdm-[component]--input" name="group" value="option2">
            <span class="rdm-[component]--icon"></span>
            <span class="rdm-[component]--label">Opción 2</span>
        </label>
    </div>
</fieldset>
```

**Ejemplo Radio Button - Grupo de opciones:**
```html
<fieldset class="rdm-radio--fieldset">
    <legend class="rdm-sys-typography--title-large">Grupo de opciones</legend>
    
    <div class="rdm-radio--wrapper">
        <label class="rdm-radio--container">
            <input type="radio" class="rdm-radio--input" name="language" value="javascript">
            <span class="rdm-radio--icon"></span>
            <span class="rdm-radio--label">JavaScript</span>
        </label>
    </div>
    
    <div class="rdm-radio--wrapper">
        <label class="rdm-radio--container">
            <input type="radio" class="rdm-radio--input" name="language" value="python">
            <span class="rdm-radio--icon"></span>
            <span class="rdm-radio--label">Python</span>
        </label>
    </div>
    
    <div class="rdm-radio--wrapper">
        <label class="rdm-radio--container">
            <input type="radio" class="rdm-radio--input" name="language" value="php">
            <span class="rdm-radio--icon"></span>
            <span class="rdm-radio--label">PHP</span>
        </label>
    </div>
</fieldset>
```

### Estructura Text Field + Select

**Text Field (input de texto):**
```html
<div class="rdm-textfield--wrapper">
    <div class="rdm-textfield--container rdm-textfield--outlined">
        <div class="rdm-textfield--control">
            <div class="rdm-textfield--leading-icon">
                <span class="material-symbols-rounded">search</span>
            </div>
            <input id="tf1" type="text" placeholder=" ">
            <label class="rdm-textfield--label" for="tf1">Buscar</label>
            <div class="rdm-textfield--trailing-icon">
                <span class="material-symbols-rounded">close</span>
            </div>
        </div>
    </div>
    <div class="rdm-textfield--support">
        <span class="rdm-textfield--support-text">Supporting text</span>
    </div>
</div>
```

**Select (desplegable) - Estructura idéntica a textfield:**
```html
<div class="rdm-select--wrapper">
    <div class="rdm-select--container rdm-select--outlined">
        <div class="rdm-select--control">
            <div class="rdm-select--leading-icon">
                <span class="material-symbols-rounded">category</span>
            </div>
            <select id="select1" name="categoria" required>
                <option value="" disabled selected>Seleccionar...</option>
                <option value="1">Opción 1</option>
                <option value="2">Opción 2</option>
            </select>
            <label class="rdm-select--label" for="select1">Categoría</label>
            <div class="rdm-select--trailing-icon">
                <span class="material-symbols-rounded">arrow_drop_down</span>
            </div>
        </div>
    </div>
    <div class="rdm-select--support">
        <span class="rdm-select--support-text">Selecciona una opción</span>
    </div>
</div>
```

**Select con Optgroup (grupos de opciones):**
```html
<select id="select_devices" name="device" required>
    <option value="" disabled selected>Seleccionar...</option>
    <optgroup label="Móviles">
        <option value="iphone">iPhone</option>
        <option value="android">Android</option>
    </optgroup>
    <optgroup label="Computadoras">
        <option value="mac">Mac</option>
        <option value="windows">Windows</option>
    </optgroup>
</select>
```

**Fieldset - Múltiples Select Relacionados:**
```html
<fieldset class="rdm-select--fieldset">
    <legend class="rdm-sys-typography--title-medium">Fecha de nacimiento</legend>
    
    <div class="rdm-select--wrapper">
        <div class="rdm-select--container rdm-select--outlined">
            <div class="rdm-select--control">
                <select id="select_day" name="day" required>
                    <option value="" disabled selected>Día</option>
                    <option value="01">1</option>
                    <option value="02">2</option>
                </select>
                <label class="rdm-select--label" for="select_day">Día</label>
                <div class="rdm-select--trailing-icon">
                    <span class="material-symbols-rounded">arrow_drop_down</span>
                </div>
            </div>
        </div>
    </div>

    <div class="rdm-select--wrapper">
        <div class="rdm-select--container rdm-select--outlined">
            <div class="rdm-select--control">
                <select id="select_month" name="month" required>
                    <option value="" disabled selected>Mes</option>
                    <option value="01">Enero</option>
                    <option value="02">Febrero</option>
                </select>
                <label class="rdm-select--label" for="select_month">Mes</label>
                <div class="rdm-select--trailing-icon">
                    <span class="material-symbols-rounded">arrow_drop_down</span>
                </div>
            </div>
        </div>
    </div>
</fieldset>
```

### Nomenclatura de Clases - Patrón Uniforme

Para cualquier nuevo componente binario (checkbox, radio, switch, etc.), usa:

- `.rdm-[component]--wrapper` - Contenedor bloque del elemento
- `.rdm-[component]--container` - Label contenedor con flexbox
- `.rdm-[component]--input` - Input nativo invisible
- `.rdm-[component]--icon` - Icono visual (o `.rdm-[component]--checkmark` para checkbox)
- `.rdm-[component]--label` - Texto de la etiqueta
- `.rdm-[component]--fieldset` - Contenedor de grupo de opciones
- `.rdm-[component]--support` - Texto de soporte/error (opcional)

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

#### Text Field
- **Altura outlined**: 56dp = `3.5em`
- **Padding horizontal**: 12px = `0.75em`
- **Gap icono-input**: 16px = `1em`
- **Icono size**: 24dp = `1.5em`
- **Label size (flotante)**: 0.85 scale de 16px

#### Select (basado en Text Field)
- **Altura outlined**: 56dp = `3.5em` (idéntico a textfield)
- **Padding horizontal**: 12px = `0.75em`
- **Gap icono-select**: 16px = `1em`
- **Icono size**: 24dp = `1.5em` (leading + trailing arrow)
- **Label size (flotante)**: 0.85 scale de 16px
- **Trailing icon (arrow)**: Rota 180° al abrir
- **Border radius**: 4dp = `0.25em`

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

## 4. PATRONES CSS - Estructura Uniforme

### 1. Input Nativo Invisible pero Interactivo

Para checkbox:
```css
.rdm-checkbox--input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    width: 0;
    height: 0;
}
```

Para radio button:
```css
.rdm-radio--input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    width: 3em;      /* 48dp - target size */
    height: 3em;
    margin: 0;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
```

### 2. Container Flex - Idéntico para ambos

```css
.rdm-[component]--container {
    display: inline-flex;
    align-items: center;
    gap: 0.75em;     /* 12px entre icono y label */
    cursor: pointer;
    position: relative;
    user-select: none;
    min-height: 3em; /* 48dp - target size */
}
```

### 3. Icono Visual - Características específicas

**Checkbox (cuadrado):**
```css
.rdm-checkbox--checkmark {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 1.125em;  /* 18px */
    height: 1.125em;
    border: 0.125em solid var(--md-sys-color-on-surface-variant);
    border-radius: 0.125em; /* 2px - squared */
    background-color: transparent;
    transition: border-color 0.2s ease, background-color 0.2s ease;
    position: relative;
    flex-shrink: 0;
}
```

**Radio Button (circular):**
```css
.rdm-radio--icon {
    width: 1.25em;   /* 20dp */
    height: 1.25em;
    border: 0.125em solid var(--md-sys-color-on-surface-variant);
    border-radius: 50%; /* circular */
    display: flex;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
    transition: border-color 0.2s ease, background-color 0.2s ease;
    position: relative;
    flex-shrink: 0;
}
```

### 4. State Layer - Idéntico para ambos

Ubicado en el pseudo-elemento `::before` del icono:

```css
.rdm-[component]--[checkmark|icon]::before {
    content: '';
    position: absolute;
    width: 2.5em;    /* 40dp */
    height: 2.5em;
    border-radius: 50%;
    background-color: transparent;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    transition: background-color 0.2s ease;
}
```

### 5. State Layer con Color Diferenciado

```css
/* Hover - unselected */
.rdm-[component]--container:hover .rdm-[component]--[checkmark|icon]::before {
    background-color: var(--md-sys-color-on-surface);
    opacity: 0.08;
}

/* Hover - selected */
.rdm-[component]--container:has(.rdm-[component]--input:checked):hover .rdm-[component]--[checkmark|icon]::before {
    background-color: var(--md-sys-color-primary);
    opacity: 0.08;
}

/* Pressed - unselected */
.rdm-[component]--container:active .rdm-[component]--[checkmark|icon]::before {
    background-color: var(--md-sys-color-on-surface);
    opacity: 0.12;
}

/* Pressed - selected */
.rdm-[component]--container:has(.rdm-[component]--input:checked):active .rdm-[component]--[checkmark|icon]::before {
    background-color: var(--md-sys-color-primary);
    opacity: 0.12;
}
```

### 6. Wrapper y Fieldset

```css
.rdm-[component]--wrapper {
    display: block;
    margin: 1em 0;
}

.rdm-[component]--fieldset {
    border: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 0.5em;  /* Espaciado consistente entre elementos */
}

.rdm-[component]--fieldset legend {
    padding: 0;
    margin: 0;
    margin-bottom: 0.5em;
}
```

### 7. Label Text

```css
.rdm-[component]--label {
    margin-left: 0;  /* margin ya está en gap del container */
    user-select: none;
    cursor: pointer;
    color: var(--md-sys-color-on-surface);
}
```

### 8. Select - Características Especiales

**Input nativo sin apariencia personalizada:**
```css
.rdm-select--control select {
    appearance: none;           /* Remover apariencia nativa */
    -webkit-appearance: none;   /* Safari */
    -moz-appearance: none;      /* Firefox */
}

.rdm-select--control select::-ms-expand {
    display: none;              /* IE/Edge */
}
```

**Placeholder visual - Select sin valor:**
```css
.rdm-select--control select:invalid {
    color: var(--md-sys-color-on-surface-variant);  /* Más tenue */
}

.rdm-select--control select:valid {
    color: var(--md-sys-color-on-surface);          /* Color normal */
}
```

**Trailing icon (arrow) que rota:**
```css
.rdm-select--trailing-icon {
    transition: transform 160ms ease;
}

.rdm-select--container:focus-within .rdm-select--trailing-icon {
    transform: rotate(180deg);  /* Rota cuando está abierto */
}
```

**Validación HTML5 automática:**
```css
.rdm-select--outlined:has(select:invalid:not(:focus)) {
    border-color: var(--md-sys-color-error);
}

.rdm-select--container:has(select:invalid:not(:focus)) .rdm-select--label {
    color: var(--md-sys-color-error);
}
```

**Optgroup styling:**
```css
.rdm-select--control select optgroup {
    background-color: var(--md-sys-color-surface);
    color: var(--md-sys-color-on-surface-variant);
    font-weight: 600;
    font-size: 0.875em;
}

.rdm-select--control select optgroup option {
    padding-left: 1.5em;        /* Indentar opciones del grupo */
    font-weight: 400;
    color: var(--md-sys-color-on-surface);
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
@import url(select.css);             /* Selects */
@import url(search.css);             /* Search */
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

## 7.1 SEARCH - Componente de Búsqueda

**Ubicación**: `css/search.css` y `searches.php`

**Diferencias con TextFields:**
- Search está completamente redondeado (border-radius: 28px)
- Search tiene elevación que aumenta en focus (1 → 3)
- Search tiene icono de búsqueda (lupa) fijo al inicio
- Search tiene icono de limpiar (close) dinámico al final
- Search es semánticamente diferente (búsqueda vs entrada de datos)
- Search no tiene label flotante (placeholder estático)

### Especificaciones MD3 Search

```
Height: 56px (3.5em)
Border-radius: 28px (1.75em) - Fully rounded
Elevation base: 1 (0.5px, 2px)
Elevation focus: 3 (1px, 8px)
Padding horizontal: 16px (1em)
Gap entre elementos: 12px (0.75em)
Icon size: 24px (1.5em)
Leading icon: Siempre visible (search)
Trailing icon: Visible solo si hay contenido (close)
State layer: 40dp (2.5em) en trailing icon
Background: surface-container-high
Background hover: surface-container-highest
Color texto: on-surface
Color placeholder: on-surface-variant
Icon FILL: 1 (completamente lleno)
```

### Estructura HTML

```html
<div class="rdm-search--wrapper">
    <div class="rdm-search--bar">
        <div class="rdm-search--control">
            <!-- Leading icon - siempre visible -->
            <div class="rdm-search--leading-icon">
                <span class="material-symbols-rounded">search</span>
            </div>
            
            <!-- Input nativo -->
            <input 
                type="search" 
                placeholder="Buscar..."
                aria-label="Buscar"
            >
            
            <!-- Trailing icon - dinámico con JavaScript -->
            <div class="rdm-search--trailing-icon">
                <span class="material-symbols-rounded">close</span>
            </div>
        </div>
    </div>
    
    <!-- Support text opcional -->
    <div class="rdm-search--support">Texto de ayuda</div>
</div>
```

### CSS Pattern

**Contenedor principal:**
```css
.rdm-search--wrapper {
    display: block;
    width: 100%;
    margin: 1em 0;
}

.rdm-search--bar {
    position: relative;
    border-radius: 1.75em;
    background-color: var(--md-sys-color-surface-container-high);
    transition: background-color 200ms ease, box-shadow 200ms ease;
    /* Elevation 1 */
    box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3), 0px 1px 3px 1px rgba(0, 0, 0, 0.15);
}

.rdm-search--bar:focus-within {
    /* Elevation 3 */
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3), 0px 4px 8px 3px rgba(0, 0, 0, 0.15);
}

.rdm-search--bar:hover:not(:focus-within) {
    background-color: var(--md-sys-color-surface-container-highest);
}
```

**Control y espaciado:**
```css
.rdm-search--control {
    position: relative;
    padding: 0em 1em;
    display: flex;
    align-items: center;
    gap: 0.75em;
    min-height: 3.5em;
}
```

**Leading icon (búsqueda):**
```css
.rdm-search--leading-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--md-sys-color-on-surface);
    flex-shrink: 0;
    width: 1.5em;
    height: 1.5em;
}

.rdm-search--leading-icon .material-symbols-rounded {
    font-variation-settings: 'FILL' 1;
}
```

**Input:**
```css
.rdm-search--control input {
    display: block;
    width: 100%;
    border: none;
    outline: none !important;
    background: transparent;
    color: var(--md-sys-color-on-surface);
    flex: 1;
    caret-color: var(--md-sys-color-primary);
}

/* Ocultar icono nativo de HTML5 */
.rdm-search--control input[type="search"]::-webkit-search-cancel-button {
    display: none;
}

.rdm-search--control input[type="search"]::-moz-search-cancel-button {
    display: none;
}

.rdm-search--control input::placeholder {
    color: var(--md-sys-color-on-surface-variant);
}
```

**Trailing icon (limpiar) - Con transición suave:**
```css
.rdm-search--trailing-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--md-sys-color-on-surface-variant);
    cursor: pointer;
    width: 1.5em;
    height: 1.5em;
    border-radius: 50%;
    position: relative;
    flex-shrink: 0;
    opacity: 0;
    pointer-events: none;
    transition: color 160ms ease, opacity 240ms ease;
}

/* Mostrar cuando tiene clase .show */
.rdm-search--trailing-icon.show {
    opacity: 1;
    pointer-events: auto;
}

.rdm-search--trailing-icon .material-symbols-rounded {
    font-variation-settings: 'FILL' 1;
}

/* State layer en trailing icon */
.rdm-search--trailing-icon::before {
    content: '';
    position: absolute;
    width: 2.5em;
    height: 2.5em;
    border-radius: 50%;
    background-color: transparent;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    transition: background-color 160ms ease;
    z-index: -1;
}

.rdm-search--trailing-icon:hover::before {
    background-color: var(--md-sys-color-on-surface);
    opacity: 0.08;
}

.rdm-search--trailing-icon:active::before {
    background-color: var(--md-sys-color-on-surface);
    opacity: 0.12;
}

.rdm-search--trailing-icon:hover {
    color: var(--md-sys-color-on-surface);
}
```

**Estados deshabilitados:**
```css
.rdm-search--control input:disabled {
    opacity: 0.65;
    cursor: not-allowed;
}

.rdm-search--bar:has(input:disabled) {
    opacity: 0.65;
}
```

### JavaScript - Comportamiento Dinámico

**Archivo**: `js/search.js`

```javascript
document.addEventListener('DOMContentLoaded', function() {
    // Seleccionar todos los inputs de búsqueda
    const searchInputs = document.querySelectorAll('.rdm-search--control input[type="search"]');
    
    searchInputs.forEach(input => {
        const wrapper = input.closest('.rdm-search--wrapper');
        const trailingIcon = wrapper.querySelector('.rdm-search--trailing-icon');
        
        // Función para actualizar visibilidad del icono
        function updateClearIcon() {
            if (input.value.trim().length > 0) {
                trailingIcon.classList.add('show');
            } else {
                trailingIcon.classList.remove('show');
            }
        }
        
        // Actualizar en eventos
        input.addEventListener('input', updateClearIcon);
        input.addEventListener('change', updateClearIcon);
        
        // Click en icono de limpiar
        trailingIcon.addEventListener('click', function(e) {
            e.preventDefault();
            input.value = '';
            input.focus();
            updateClearIcon();
        });
        
        // Inicializar en carga
        updateClearIcon();
    });
});
```

**Comportamiento:**
- Icono aparece con fade-in (opacity 240ms) cuando hay texto
- Icono desaparece con fade-out cuando el campo está vacío
- Click en icono limpia el campo y mantiene el focus
- Compatible con múltiples búsquedas en la misma página

### Estados

```
1. Empty (vacío)
   - Input sin contenido
   - Leading icon visible (on-surface)
   - Trailing icon oculto (opacity: 0)
   - Background: surface-container-high
   - Elevation: 1

2. Filled (con contenido)
   - Input con texto
   - Leading icon visible
   - Trailing icon visible con fade-in (opacity: 1)
   - Background: surface-container-high
   - Elevation: 1

3. Hovered
   - Background cambia a surface-container-highest
   - Elevation: 1
   - State layer en trailing icon (8%)

4. Focused
   - Elevation aumenta a 3
   - Caret color: primary
   - State layer en trailing icon si hay hover

5. Disabled
   - Input disabled attribute
   - Opacity: 0.65 en todo el componente
   - Cursor: not-allowed
   - No interactive
```

### Integración

**En `css/estilos.css`:**
```css
@import url(search.css);
```

**En `index.php`:**
```html
<a href="searches.php" class="rdm-list--item">
    <span class="material-symbols-rounded">search</span>
    <span>Search</span>
</a>
```

**En la página demo (`searches.php`):**
```html
<script src="js/search.js"></script>
```

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
│   ├── select.css
│   ├── search.css
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
│   ├── search.js
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
├── searches.php
├── selects.php
├── shapes.php
├── switches.php
├── tabs.php
├── textfields.php
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

## 12. COMPORTAMIENTOS JAVASCRIPT

### Text Field (`textfield.js`)

**Clear Button (Trailing Icon):**
```javascript
// Mostrar icono clear solo si hay contenido
field.addEventListener('input', updateClearIcon);

// Limpiar campo al hacer click
trailingIcon.addEventListener('click', function() {
    field.value = '';
    field.focus();
    updateClearIcon();
    field.dispatchEvent(new Event('input', { bubbles: true }));
});
```

**Contador de caracteres:**
```javascript
// Atributo data-counter-for="[field-id]"
const counter = wrapper.querySelector('[data-counter-for="' + field.id + '"]');
// Actualiza: "15/50" al escribir
field.addEventListener('input', updateCounter);
```

**Evento Input:**
- Se dispara al escribir, focus, blur
- Permite actualizar estado visual del label en tiempo real
- Compatible con contador y clear button

### Switch (`switch.js`)

**Icon Both (cambio de icono):**
```javascript
// Clase: .rdm-switch--container.icon-both
// Cambia icono según estado checked

input.addEventListener('change', function() {
    icon.textContent = input.checked ? 'check' : 'close';
});
```

**Usos:**
- Off: icono `close`
- On: icono `check`
- Animación suave por CSS (200ms)

### Selectores CSS-in-JS

**Input visible pero transparent:**
```css
/* El cursor entra porque el input es 100% del area */
.rdm-switch--input {
    width: 100%;
    height: 100%;
    opacity: 0;
    cursor: pointer;
}
```

---

## 13. VALIDACIÓN HTML5 AUTOMÁTICA

### Select - Validación Nativa

```css
/* Option vacía = required inválido */
select:invalid {
    color: var(--md-sys-color-on-surface-variant);
}

select:valid {
    color: var(--md-sys-color-on-surface);
}

/* Mostrar borde rojo si es invalid pero no está focused */
.rdm-select--outlined:has(select:invalid:not(:focus)) {
    border-color: var(--md-sys-color-error);
}

.rdm-select--container:has(select:invalid:not(:focus)) .rdm-select--label {
    color: var(--md-sys-color-error);
}

/* No mostrar error si está disabled */
.rdm-select--outlined:has(select:invalid:disabled) {
    border-color: var(--md-sys-color-outline);
}
```

### Attributes HTML5

```html
<!-- Required (invalid sin selección) -->
<select id="select1" name="categoria" required>
    <option value="" disabled selected>Seleccionar...</option>
    <option value="1">Opción 1</option>
</select>

<!-- Maxlength para textfield (contador integrado) -->
<input id="tf1" type="text" maxlength="50">

<!-- Disabled (automáticamente opacity 0.65) -->
<select id="select2" name="pais" disabled>
```

---

## 14. ACCESIBILIDAD AVANZADA

### ARIA Attributes

```html
<!-- Text Field con support text -->
<input id="tf1" type="text" aria-describedby="tf1_help">
<span id="tf1_help">Supporting text</span>

<!-- Select con error support -->
<select id="select1" required aria-describedby="select1_error">
<span id="select1_error">Selecciona una opción</span>

<!-- Switch accesible -->
<label class="rdm-switch--wrapper">
    <input type="checkbox" class="rdm-switch--input" 
           aria-label="Activar notificaciones">
    <!-- ... rest of switch -->
</label>
```

### Focus Management

- **Todos los inputs nativo**: mantienen `:focus-visible` automático
- **Outline personalizado**: `2px solid --md-sys-color-primary`
- **Outline-offset**: `2px` (visible fuera del elemento)
- **Tab order**: HTML natural (sin tabindex)

### Label Association

```html
<!-- CORRECTO: label anidado -->
<label class="rdm-[component]--container">
    <input type="[type]">
    <span class="rdm-[component]--label">Texto</span>
</label>

<!-- O con for + id -->
<label for="input_id">Texto</label>
<input id="input_id">
```

---

## 15. COMPORTAMIENTOS ESPECIALES POR COMPONENTE

### Select - Trailing Icon Rotación

```css
/* Arrow (triangle) por defecto apunta DOWN */
.rdm-select--trailing-icon {
    transition: transform 160ms ease;
}

/* Al focus, rota 180° (apunta UP) */
.rdm-select--container:focus-within .rdm-select--trailing-icon {
    transform: rotate(180deg);
}
```

**Visual:**
- Sin focus: ⬇️ (down)
- Con focus: ⬆️ (up)
- Transición suave 160ms

### Text Field - Label Flotante

```css
/* Estado inicial: posicionado en el centro */
.rdm-textfield--label {
    top: 50%;
    transform: translateY(-50%);
    color: var(--md-sys-color-on-surface-variant);
}

/* Al focus o con valor: flota arriba y escala */
.rdm-textfield--outlined:focus-within .rdm-textfield--label,
.rdm-textfield--control input:not([value=""]) ~ .rdm-textfield--label {
    top: -0.8em;
    transform: scale(0.85);
    color: var(--md-sys-color-primary);
}
```

**Transición:** `160ms ease` en `transform`, `color`, `top`

### Switch - Handle Animation

```css
/* OFF: handle pequeño a la izquierda */
.rdm-switch--handle {
    width: 1em;      /* 16px */
    height: 1em;
    left: 0.25em;    /* 4px */
    background-color: var(--md-sys-color-outline);
}

/* ON: handle grande a la derecha */
.rdm-switch--input:checked + .rdm-switch--track .rdm-switch--handle {
    width: 1.5em;    /* 24px - crece */
    height: 1.5em;
    left: calc(100% - 1.75em);  /* se mueve */
    background-color: var(--md-sys-color-on-primary);
}
```

**Transición:** `200ms ease` en `width`, `height`, `left`, `background-color`

### Form Types - Variantes

```css
/* Elevated: con sombra */
.rdm-form--elevated {
    background-color: var(--md-sys-color-surface);
    box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), /* z-elevation 1 */
                0px 2px 2px 0px rgba(0, 0, 0, 0.14),
                0px 1px 5px 0px rgba(0, 0, 0, 0.12);
}

/* Filled: color de fondo */
.rdm-form--filled {
    background-color: var(--md-sys-color-surface-variant);
    color: var(--md-sys-color-on-surface-variant);
}

/* Outlined: solo borde */
.rdm-form--outlined {
    background-color: var(--md-sys-color-surface);
    border: solid 0.0625em var(--md-sys-color-outline);
}

/* Flat: sin borde ni sombra */
.rdm-form--flat {
    background-color: var(--md-sys-color-surface);
}
```

---

## 16. COLOR-MIX UNIFORME

Todos los componentes interactivos usan `color-mix` para opacidades consistentes:

```css
/* 8% opacidad - Hover */
background-color: color-mix(in srgb, var(--md-sys-color-primary) 8%, transparent);

/* 12% opacidad - Pressed/Focus */
background-color: color-mix(in srgb, var(--md-sys-color-primary) 12%, transparent);

/* 20% opacidad - Focus seleccionado */
background-color: color-mix(in srgb, var(--md-sys-color-primary) 20%, transparent);

/* Error state */
background-color: color-mix(in srgb, var(--md-sys-color-error) 8%, transparent);

/* Disabled (65%) */
color: color-mix(in srgb, var(--md-sys-color-on-surface-variant) 65%, transparent);
```

**Ventajas:**
- Consistencia visual
- Adaptación automática a temas
- Sin hardcodear rgba()

---

## 17. TROUBLESHOOTING EXPANDIDO

### Select - Arrow no Rota

**Problema:** El trailing icon no gira al hacer focus
**Soluciones:**
```css
/* Verificar selector correcto */
.rdm-select--container:focus-within .rdm-select--trailing-icon {
    transform: rotate(180deg);
}

/* NO funciona: */
.rdm-select--trailing-icon:focus-within { /* ❌ no tiene focus */
    transform: rotate(180deg);
}

/* Alternativa: usar has() */
.rdm-select--container:has(select:focus) .rdm-select--trailing-icon {
    transform: rotate(180deg);
}
```

### Text Field - Label no Flota

**Problema:** El label no se mueve al escribir
**Soluciones:**
```css
/* Verificar que el label use ~ selector (siguiente hermano) */
.rdm-textfield--control input ~ .rdm-textfield--label { /* ✅ correcto */
    /* estilos flotante */
}

/* NO funciona si está dentro del input: */
<input><label></label> <!-- ✅ orden HTML correcto -->

/* El selector `:not([value=""])` solo funciona en algunos navegadores */
/* Preferir enfoque con :valid o :focus */
input:valid ~ .rdm-textfield--label,
input:focus ~ .rdm-textfield--label {
    /* float */ }
```

### Switch - Handle no se Mueve Suavemente

**Problema:** El handle no anima, solo aparece al otro lado
**Soluciones:**
```css
/* Verificar transition en .rdm-switch--handle */
.rdm-switch--handle {
    transition: left 200ms ease, width 200ms ease; /* ✅ include left */
}

/* NO funciona: */
.rdm-switch--handle {
    transition: all 200ms ease; /* ❌ puede no animar left correctamente */
}

/* Usar calc() para la posición */
.rdm-switch--input:checked + .rdm-switch--track .rdm-switch--handle {
    left: calc(100% - 1.75em); /* ✅ relativo al parent */
}
```

### Clear Button no Aparece

**Problema:** El icono close no se muestra al escribir
**Soluciones:**
```javascript
// Verificar que trailing-icon tenga clase .show
trailingIcon.classList.add('show'); // ✅

// CSS debe mostrar .show
.rdm-textfield--trailing-icon.show {
    display: flex; /* ✅ debe estar visible */
}

.rdm-textfield--trailing-icon {
    display: none; /* por defecto */
}

// Si el evento no dispara:
field.addEventListener('input', updateClearIcon); // ✅
```

### Validación HTML5 no Funciona

**Problema:** El borde error no se muestra aunque sea invalid
**Soluciones:**
```css
/* Verificar que select tenga required */
<select required> <!-- ✅ -->

/* Validación solo se muestra si :not(:focus) */
.rdm-select--outlined:has(select:invalid:not(:focus)) {
    border-color: var(--md-sys-color-error);
}

/* Si está focused, no muestra error (experiencia UX) */

/* Para forzar error siempre: */
.rdm-select--wrapper.is-error .rdm-select--outlined {
    border-color: var(--md-sys-color-error); /* clase manual */
}
```

---

## 18. PATTERNS CSS AVANZADOS

### Appearance: None y sus Variantes

```css
/* Select/dropdown */
select {
    appearance: none;           /* Chrome/Edge/Safari */
    -webkit-appearance: none;   /* Safari */
    -moz-appearance: none;      /* Firefox */
}

/* Internet Explorer */
select::-ms-expand {
    display: none; /* oculta flecha nativa IE */
}

/* Resultado: permite icono personalizado */
```

### Fieldset Pattern Uniforme

```css
/* Todos los fieldsets usan el mismo patrón */
.rdm-[component]--fieldset {
    border: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 0.5em; /* espaciado consistente */
}

.rdm-[component]--fieldset legend {
    padding: 0;
    margin: 0;
    margin-bottom: 0.5em;
}

.rdm-[component]--fieldset .rdm-[component]--wrapper {
    margin: 0; /* gap del fieldset lo maneja */
}
```

### Support Text (Ayuda + Error Unificado)

```html
<div class="rdm-[component]--wrapper">
    <label class="rdm-[component]--container">
        <input type="[type]">
        <span class="rdm-[component]--label">Etiqueta</span>
    </label>
    <span class="rdm-[component]--support">Texto de ayuda o error</span>
</div>
```

```css
.rdm-[component]--support {
    display: block;
    font-size: 0.875em;
    color: var(--md-sys-color-on-surface-variant);
    margin-top: 0.5em;
    padding-left: 1.875em; /* alineado con label */
}

.rdm-[component]--wrapper.has-error .rdm-[component]--support {
    color: var(--md-sys-color-error);
}
```

---

## 11. RECURSOS ÚTILES

- **Material Design 3**: https://m3.material.io
- **Radio Button specs**: https://m3.material.io/components/radio-button
- **Checkbox specs**: https://m3.material.io/components/checkbox
- **Select specs**: https://m3.material.io/components/menus
- **Text Field specs**: https://m3.material.io/components/text-fields
- **Accessibility**: https://www.w3.org/WAI/tutorials/forms/
- **HTML5 Validation**: https://developer.mozilla.org/en-US/docs/Learn/Forms/Form_validation

---

**Última actualización**: 15 de enero, 2026
**Versión**: 1.3
**Status**: En desarrollo activo
