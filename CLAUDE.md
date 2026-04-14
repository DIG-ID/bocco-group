end # Bocco Group — Project Context

## Stack
- WordPress custom theme
- SASS + Laravel Mix 6
- Bootstrap 5.1
- Swiper 8
- GSAP 3 + ScrollTrigger (animações)
- Lenis (smooth scroll)
- PHP 8.0+

## Custom Post Types
- `products` — produtos de software hoteleiro (Channel Manager, Web Booking Engine, Revenue Manager, GDS, Guest Journey Tool); registado via Custom Post Type UI
- `press-articles` — artigos de imprensa com PDF; registado via Custom Post Type UI
- `webinar` — webinars com data, host e links; registado via ACF Post Type

## Plugins usados
- Atenção: alguns plugins são apenas usados localmente (query-monitor, debug-bar, log-deprecated-notices, wp-sweep, wp-migrate-db, wordpress-importer)!
- advanced-custom-fields-pro 6.7.1
- contact-form-7 6.1.5
- custom-post-type-ui 1.18.3
- mailchimp-for-wp 4.12.0
- svg-support 2.5.14
- autodescription 5.1.4 (The SEO Framework)

## ACF Field Groups

### Page Template: `page-templates/page-home.php` — Home Page CF
Acesso por tabs no admin; cada secção é um group.
- `banner` (group): `image` (image, id), `title`, `subtitle`, `button_title`, `button_link`
- `highlights` (group): `block` (repeater) → `icon` (text, classe CSS), `title`, `description`
- `products` (group): `title`, `subtitle`, `description` (textarea), `repeater` (repeater) → `icon` (text), `title`, `description` (textarea), `link` (page_link → products)
- `services` (group): `image` (image, id), `title`, `subtitle`, `description` (textarea)
- `call_to_action` (group): `title`, `page_link` (page_link)
- `testimonials` (group): `title`, `subtitle`, `customer_testimonials` (repeater) → `customer_name`, `customer_details`, `customer_quote` (textarea), `customer_image` (image, id)
- `partners` (group): `title`, `description` (textarea), `partners_logos` (gallery, id)

### Page Template: `page-templates/page-about-us.php` — About Us Page CF
- `about_us_title` (textarea, top-level)
- `about_us_content` (group): `image` (image, id), `title` (textarea), `subtitle`, `description` (textarea)
- `team_title` (textarea, top-level), `team_subtitle` (text, top-level)
- `about_us_team` (repeater): `image` (image, id), `name`, `position`

### Page Template: `page-templates/page-contacts.php` — Contact Page CF
- `contact` (group): `title` (textarea), `open_hours` (wysiwyg), `google_maps` (google_map)

### Page Template: `page-templates/page-demo-request.php` — Demo Request Page CF
- `demo_request` (group): `title` (textarea), `subtitle`, `form` (text — shortcode CF7)

### Page Template: `page-templates/page-services.php` — Services CF
- `overview` (group): `subtitle`, `title`, `description` (textarea)
- `set_up` (group): `subtitle`, `title`, `description` (textarea), `set_up_list` (repeater) → `list_title_field`
- `support` (group): `subtitle`, `title`, `description` (textarea), `support_list` (repeater) → `list_title_field`

### Page Template: `page-templates/page-impressum-agb.php` — Legal Info CF
Usado em AGB, Impressum e Datenschutzhinweis.
- `legal_info` (group): `title`, `address` (textarea), `content` (wysiwyg)

### Page Template: `page-templates/page-landing-page.php` — HTML Mailings Page CF
- `hero` (group): `image` (image, id), `subtitle`, `title` (textarea), `button_text`, `button_url`
- `highlights_block` (repeater): `icon` (image, id), `description` (textarea)
- `html_templates` (repeater): `title`, `description` (textarea), `image` (image, id), `button_url`
- `offers` (group): `section_title`, `section_subtitle` (textarea), `section_notes` (textarea), `offers_item` (repeater) → `image` (image, id), `title`, `title_legend`, `includes` (wysiwyg), `price`, `info_notes` (textarea)
- `contact_form` (group): `subtitle`, `title` (textarea), `contact_form_shortcode`

### Page Template: `page-templates/page-webinar.php` — Webinar Page CF
- `hero` (group): `image` (image, id), `image_xl` (image, id), `title`, `subtitle`, `description` (textarea), `link` (link, array)
- `intro` (textarea, top-level)
- `shortcode` (text, top-level)

### Page Template: `page-templates/page-igeho.php` — IGEHO Page CF
- `hero` (group): `title` (textarea), `image` (image, id)
- `info` (repeater): `icon` (image, id), `text`
- `form` (group): `subtitle`, `title` (textarea), `form` (text — shortcode CF7)
- `presented_by` (group): `title`, `logos` (gallery, id)

### CPT: `products` — Products CF
Usado por Channel Manager, Web Booking Engine, Revenue Manager, GDS, Guest Journey Tool.
- `overview` (group): `subtitle`, `title`, `description` (textarea)
- `advantages` (group): `subtitle`, `title`, `advantages_list` (repeater) → `list_title_field`, `list_description_field` (textarea)
- `functions` (group): `subtitle`, `title`, `functions_list` (repeater) → `list_title_field`, `list_description_field` (textarea)

### CPT: `press-articles` — Press CPT CF
- `press` (group): `publisher`, `pdf_file` (file, returns url, mime: pdf)

### CPT: `webinar` — Webinar CPT
- `date` (date_picker, display/return: d/m/Y)
- `duration` (text, ex: "14:00 - 14:30 Uhr")
- `have_host` (true_false)
- `host` (text, condicional: `have_host = 1`)
- `past_event` (true_false)
- `youtube_link` (link, array, condicional: `past_event = 1`)
- `link` (link, array, condicional: `past_event != 1`)

## SEO
- SEO gerido pelo The SEO Framework (autodescription), NÃO Yoast
- Meta fields personalizados: `_genesis_title`, `_genesis_description`, `_tsf_title_no_blogname`

## Page Templates e Template Parts

### Product Pages (cada produto tem o seu template)
- `page-templates/page-cmanager.php` → `template-parts/channelmanager/`
- `page-templates/page-web-booking-engine.php` → `template-parts/webbookingengine/`
- `page-templates/page-revenue-manager.php` → `template-parts/revenue-manager/`
- `page-templates/page-gds.php` → `template-parts/gds/`
- `page-templates/page-guest-journey.php` → `template-parts/guest-journey/`

Cada directório de produto contém: `intro.php`, `content-1.php`, `content-2.php`, `content-3.php`

### Outras páginas
- `page-templates/page-home.php` → `template-parts/home-page/` (banner, highlights, products, services, call-to-action, testimonials, partners)
- `page-templates/page-landing-page.php` → `template-parts/landing-page/` (hero, highlights, html-templates, offers, contact-form)
- `page-templates/page-webinar.php` → `template-parts/webinar/` (hero, intro, loop, newsletter)
- `page-templates/page-igeho.php` → `template-parts/igeho/` (hero, info, form, logos)
- `page-templates/page-services.php` → `template-parts/services/` (intro, content-1, content-2)

### Headers/Footers alternativos
- `header-landing-page.php` / `footer-landing-page.php`
- `header-webinar.php` / `footer-webinar.php`

### Archive templates
- `archive-press-articles.php`
- `archive-services.php`

### Template parts globais
- `template-parts/main-header.php`, `main-footer.php`, `main-logo.php`, `newsletter.php`

## Build System
- Laravel Mix 6 — `webpack.mix.js`
- SASS source: `src/sass/` → compilado para `dist/`
- JS source: `src/js/` → compilado para `dist/`
- `npm run dev` / `npm run watch` / `npm run production`

## Animações (GSAP + Lenis)

### Arquitectura JS
- `src/js/custom/lenis.js` — inicializa Lenis + GSAP + ScrollTrigger + TextPlugin juntos; o `gsap.ticker` é o **único** RAF loop (nunca usar `requestAnimationFrame` separado para o Lenis). Expõe `window.lenis` globalmente.
- `src/js/custom/gsap.js` — presets de animação com `data-animate`, parallax, e banner intro timeline (typewriter); usa timelines `gsap.fromTo()` por elemento para permitir reverse suave.
- Ordem de import no `main.js`: `lenis` → `gsap` → `custom` → `swiper` → `fancybox`

### Data attributes para animações
Adicionar nos template-parts PHP:
- `data-animate="<preset>"` — tipo de animação (default: `fade-up`)
- `data-animate-delay="0.2"` — atraso em segundos
- `data-animate-duration="1"` — duração em segundos
- `data-animate-start="top 70%"` — posição de trigger do ScrollTrigger
- `data-animate-once="true"` — anima só uma vez (default: repete ao re-entrar no viewport)
- `data-animate-eager` — anima imediatamente no page load, sem ScrollTrigger (para elementos no topo da página)
- `data-animate-scrub` — animação ligada 1:1 ao scroll (avança e recua com a posição)
- `data-animate-scrub="2"` — scrub com suavização (maior = mais lag)
- `data-animate-end="bottom top"` — posição final do ScrollTrigger (usado com scrub)
- `data-animate-stagger="0.15"` — anima filhos em sequência (usar `data-animate-child` nos filhos)

### Presets disponíveis
`fade-up`, `fade-down`, `fade-left`, `fade-right`, `fade-in`, `zoom-in`, `zoom-out`, `flip-up`, `slide-up`

### Parallax
Movimento contínuo ligado ao scroll (sem from/to de opacity):
- `data-parallax="100"` — move 100px para cima durante o scroll
- `data-parallax="-80"` — move 80px para baixo
- `data-parallax-x="60"` — parallax horizontal
- `data-parallax-speed="0.5"` — velocidade do scrub (default: 1)
- `data-parallax-start` / `data-parallax-end` — posições do ScrollTrigger

### Modos de animação
| Modo | Comportamento |
|---|---|
| Normal (default) | Dispara ao entrar no viewport, reverse ao sair |
| `data-animate-scrub` | Ligado 1:1 ao scroll — avança e recua com a posição |
| `data-animate-eager` | Corre imediatamente no page load, sem ScrollTrigger |
| `data-parallax` | Movimento contínuo de posição, sem from/to de opacity |
| `data-banner-intro` | Timeline sequencial: subtitle → typewriter → CTA (ver secção dedicada) |

### Exemplo stagger
```html
<div data-animate="fade-up" data-animate-stagger="0.15">
  <div data-animate-child>Item 1</div>
  <div data-animate-child>Item 2</div>
</div>
```

### Exemplo scrub numa secção inteira
```html
<div data-animate="fade-left" data-animate-scrub data-animate-stagger="0.1">
  <div data-animate-child>Item 1</div>
  <div data-animate-child>Item 2</div>
</div>
```

### Exemplo em `wp_get_attachment_image`
```php
echo wp_get_attachment_image( $image, $size, false, array( 'data-animate' => 'fade-in' ) );
```

### Banner Intro Timeline (typewriter)
Timeline sequencial no banner da home page. Usa o GSAP TextPlugin (registado em `lenis.js`).

**Plugins:** `TextPlugin` importado e registado em `src/js/custom/lenis.js`

**Data attributes (em `template-parts/home-page/banner.php`):**
- `data-banner-intro` — wrapper da timeline (na coluna de texto)
- `data-banner-subtitle` — overline/subtitle (fade-in + slide up)
- `data-banner-typewriter` — título com efeito typewriter
- `data-banner-cursor="persist"` — cursor fica a piscar no fim (default)
- `data-banner-cursor="hide"` — cursor desaparece 1.5s após terminar
- `data-banner-cta` — botão call-to-action (fade-in + slide up)

**Sequência da timeline:**
1. Subtitle fade-in (0.5s)
2. Título typewriter caracter a caracter (0.04s/char)
3. Botão fade-up (0.6s, sobrepõe 0.3s com o fim do typewriter)

**Anti-FOUC:** Os elementos `[data-banner-subtitle]`, `[data-banner-typewriter]` e `[data-banner-cta]` são escondidos via CSS (`opacity: 0; visibility: hidden`) em `_banner.sass` para evitar flash de conteúdo antes do JS correr.

**Estrutura interna do typewriter (gerada pelo JS):**
```html
<h1 data-banner-typewriter style="position: relative">
  <span class="typewriter-placeholder">texto completo (invisível, reserva altura)</span>
  <span class="typewriter-overlay">
    <span class="typewriter-text">texto animado...</span>
    <span class="typewriter-cursor">|</span>
  </span>
</h1>
```
O `.typewriter-placeholder` garante que o layout não muda durante a animação (responsive-safe).

**Exemplo completo:**
```php
<div data-banner-intro>
  <p data-banner-subtitle><?php the_field( 'banner_subtitle' ); ?></p>
  <h1 data-banner-typewriter><?php the_field( 'banner_title' ); ?></h1>
  <a href="..." data-banner-cta>Button</a>
</div>
```

### CSS — evitar conflitos
Nunca usar `transition: all` em elementos animados pelo GSAP. Especificar propriedades individuais (ex: `transition: background-color .3s, box-shadow .3s`), caso contrário o CSS transition compete com o GSAP e causa atrasos visuais.

## Customizer
Opções do tema no Customizer WP (ficheiros em `inc/customizer/`):
- `404.php` — imagem e textos da página 404
- `footer.php` — contactos do footer (morada, tel, fax, email)
- `mega-menu.php` — título, descrição e botão do mega menu
- `newsletter.php` — título, descrição e shortcode da newsletter
- `socials.php` — redes sociais (não usado actualmente)

## PHPDoc — Padrão obrigatório

Todo o ficheiro PHP deve ter file-level docblock e docblocks em todas as funções.

**File header:**
```php
<?php
/**
 * Breve descrição do ficheiro.
 *
 * @package    BoccoGroup
 * @subpackage NomeDoMódulo
 */
```

**Subpackages usados no tema:**
- `Templates` — page templates em `page-templates/` e `single-*.php`, `archive-*.php`
- `Sections` — secções específicas de uma página em `template-parts/*/`; cada ficheiro representa uma secção visual de um template pai
- `Modules` — módulos reutilizáveis entre páginas em `template-parts/` (main-header, main-footer, newsletter, etc.)
- `Admin` — ficheiros de configuração do admin e customizer (`inc/`)

**Função:**
```php
/**
 * Breve descrição do que a função faz.
 *
 * @param int   $post_id The post ID.
 * @param array $fields  The ACF field group values.
 * @return void
 */
function boccog_example( $post_id, $fields ) {}
```

**Tags mais usadas:** `@param type $name desc`, `@return type desc`, `@since 1.0.0`, `@see function_name()`

Tipos PHP válidos: `int`, `string`, `bool`, `float`, `array`, `null`, `void`, `WP_Post`, `WP_Query`

## Convenções
- Responder sempre em português de portugal no chat; comentários em código em inglês (en-GB)
- Não usar plugins desnecessários; preferir código no tema ou plugins já instalados
- Seguir PHP Coding Standards: https://github.com/PHPCSStandards/PHP_CodeSniffer/
- Seguir WordPress Coding Standards: https://github.com/WordPress/WordPress-Coding-Standards
- Prefixo de funções: `boccog_` (ex: `boccog_theme_setup`)
- Usar `array()` em vez de `[]` em código PHP puro (WCS)
- Sanitizar outputs: `esc_html()`, `esc_url()`, `wp_kses_post()`, `sanitize_text_field()`
- Idioma do site: Alemão (de_DE)
