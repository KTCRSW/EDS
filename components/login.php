<style>
  /*
! tailwindcss v3.3.2 | MIT License | https://tailwindcss.com
*/

/*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

*,
::before,
::after {
  box-sizing: border-box;
  /* 1 */
  border-width: 0;
  /* 2 */
  border-style: solid;
  /* 2 */
  border-color: #e5e7eb;
  /* 2 */
}

::before,
::after {
  --tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
*/

html {
  line-height: 1.5;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
  -moz-tab-size: 4;
  /* 3 */
  -o-tab-size: 4;
     tab-size: 4;
  /* 3 */
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  /* 4 */
  font-feature-settings: normal;
  /* 5 */
  font-variation-settings: normal;
  /* 6 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0;
  /* 1 */
  line-height: inherit;
  /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0;
  /* 1 */
  color: inherit;
  /* 2 */
  border-top-width: 1px;
  /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font family by default.
2. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  /* 1 */
  font-size: 1em;
  /* 2 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0;
  /* 1 */
  border-color: inherit;
  /* 2 */
  border-collapse: collapse;
  /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  /* 1 */
  font-size: 100%;
  /* 1 */
  font-weight: inherit;
  /* 1 */
  line-height: inherit;
  /* 1 */
  color: inherit;
  /* 1 */
  margin: 0;
  /* 2 */
  padding: 0;
  /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
[type='button'],
[type='reset'],
[type='submit'] {
  -webkit-appearance: button;
  /* 1 */
  background-color: transparent;
  /* 2 */
  background-image: none;
  /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield;
  /* 1 */
  outline-offset: -2px;
  /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button;
  /* 1 */
  font: inherit;
  /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/

:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
  /* 1 */
  vertical-align: middle;
  /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/* Make elements with the HTML hidden attribute stay hidden by default */

[hidden] {
  display: none;
}

:root,
[data-theme]{
  background-color: hsla(var(--b1) / var(--tw-bg-opacity, 1));
  color: hsla(var(--bc) / var(--tw-text-opacity, 1));
}

html{
  -webkit-tap-highlight-color: transparent;
}

:root{
  color-scheme: light;
  --pf: 258.89 94.378% 40.941%;
  --sf: 314 100% 37.647%;
  --af: 174 60% 40.784%;
  --nf: 219 14.085% 22.275%;
  --in: 198 93% 60%;
  --su: 158 64% 52%;
  --wa: 43 96% 56%;
  --er: 0 91% 71%;
  --inc: 198 100% 12%;
  --suc: 158 100% 10%;
  --wac: 43 100% 11%;
  --erc: 0 100% 14%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 258.89 94.378% 51.176%;
  --pc: 0 0% 100%;
  --s: 314 100% 47.059%;
  --sc: 0 0% 100%;
  --a: 174 60% 50.98%;
  --ac: 174.71 43.59% 15.294%;
  --n: 219 14.085% 27.843%;
  --nc: 0 0% 100%;
  --b1: 0 0% 100%;
  --b2: 0 0% 94.902%;
  --b3: 180 1.9608% 90%;
  --bc: 215 27.907% 16.863%;
}

@media (prefers-color-scheme: dark){
  :root{
    color-scheme: dark;
    --pf: 262.35 80.315% 40.157%;
    --sf: 315.75 70.196% 40%;
    --af: 174.69 70.335% 32.784%;
    --in: 198 93% 60%;
    --su: 158 64% 52%;
    --wa: 43 96% 56%;
    --er: 0 91% 71%;
    --inc: 198 100% 12%;
    --suc: 158 100% 10%;
    --wac: 43 100% 11%;
    --erc: 0 100% 14%;
    --rounded-box: 1rem;
    --rounded-btn: 0.5rem;
    --rounded-badge: 1.9rem;
    --animation-btn: 0.25s;
    --animation-input: .2s;
    --btn-text-case: uppercase;
    --btn-focus-scale: 0.95;
    --border-btn: 1px;
    --tab-border: 1px;
    --tab-radius: 0.5rem;
    --p: 262.35 80.315% 50.196%;
    --pc: 0 0% 100%;
    --s: 315.75 70.196% 50%;
    --sc: 0 0% 100%;
    --a: 174.69 70.335% 40.98%;
    --ac: 0 0% 100%;
    --n: 218.18 18.033% 11.961%;
    --nf: 222.86 17.073% 8.0392%;
    --nc: 220 13.376% 69.216%;
    --b1: 220 17.647% 20%;
    --b2: 220 17.241% 17.059%;
    --b3: 218.57 17.949% 15.294%;
    --bc: 220 13.376% 69.216%;
  }
}

[data-theme=light]{
  color-scheme: light;
  --pf: 258.89 94.378% 40.941%;
  --sf: 314 100% 37.647%;
  --af: 174 60% 40.784%;
  --nf: 219 14.085% 22.275%;
  --in: 198 93% 60%;
  --su: 158 64% 52%;
  --wa: 43 96% 56%;
  --er: 0 91% 71%;
  --inc: 198 100% 12%;
  --suc: 158 100% 10%;
  --wac: 43 100% 11%;
  --erc: 0 100% 14%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 258.89 94.378% 51.176%;
  --pc: 0 0% 100%;
  --s: 314 100% 47.059%;
  --sc: 0 0% 100%;
  --a: 174 60% 50.98%;
  --ac: 174.71 43.59% 15.294%;
  --n: 219 14.085% 27.843%;
  --nc: 0 0% 100%;
  --b1: 0 0% 100%;
  --b2: 0 0% 94.902%;
  --b3: 180 1.9608% 90%;
  --bc: 215 27.907% 16.863%;
}

[data-theme=dark]{
  color-scheme: dark;
  --pf: 262.35 80.315% 40.157%;
  --sf: 315.75 70.196% 40%;
  --af: 174.69 70.335% 32.784%;
  --in: 198 93% 60%;
  --su: 158 64% 52%;
  --wa: 43 96% 56%;
  --er: 0 91% 71%;
  --inc: 198 100% 12%;
  --suc: 158 100% 10%;
  --wac: 43 100% 11%;
  --erc: 0 100% 14%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 262.35 80.315% 50.196%;
  --pc: 0 0% 100%;
  --s: 315.75 70.196% 50%;
  --sc: 0 0% 100%;
  --a: 174.69 70.335% 40.98%;
  --ac: 0 0% 100%;
  --n: 218.18 18.033% 11.961%;
  --nf: 222.86 17.073% 8.0392%;
  --nc: 220 13.376% 69.216%;
  --b1: 220 17.647% 20%;
  --b2: 220 17.241% 17.059%;
  --b3: 218.57 17.949% 15.294%;
  --bc: 220 13.376% 69.216%;
}

[data-theme=cupcake]{
  color-scheme: light;
  --pf: 183.03 47.368% 47.216%;
  --sf: 338.25 71.429% 62.431%;
  --af: 39 84.112% 46.431%;
  --nf: 280 46.479% 11.137%;
  --in: 198 93% 60%;
  --su: 158 64% 52%;
  --wa: 43 96% 56%;
  --er: 0 91% 71%;
  --pc: 183.03 100% 11.804%;
  --sc: 338.25 100% 15.608%;
  --ac: 39 100% 11.608%;
  --nc: 280 82.688% 82.784%;
  --inc: 198 100% 12%;
  --suc: 158 100% 10%;
  --wac: 43 100% 11%;
  --erc: 0 100% 14%;
  --rounded-box: 1rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --p: 183.03 47.368% 59.02%;
  --s: 338.25 71.429% 78.039%;
  --a: 39 84.112% 58.039%;
  --n: 280 46.479% 13.922%;
  --b1: 24 33.333% 97.059%;
  --b2: 26.667 21.951% 91.961%;
  --b3: 22.5 14.286% 89.02%;
  --bc: 280 46.479% 13.922%;
  --rounded-btn: 1.9rem;
  --tab-border: 2px;
  --tab-radius: .5rem;
}

[data-theme=bumblebee]{
  color-scheme: light;
  --pf: 41.124 74.167% 42.353%;
  --sf: 49.901 94.393% 46.431%;
  --af: 240 33.333% 11.294%;
  --nf: 240 33.333% 11.294%;
  --b2: 0 0% 90%;
  --b3: 0 0% 81%;
  --in: 198 93% 60%;
  --su: 158 64% 52%;
  --wa: 43 96% 56%;
  --er: 0 91% 71%;
  --bc: 0 0% 20%;
  --ac: 240 60.274% 82.824%;
  --nc: 240 60.274% 82.824%;
  --inc: 198 100% 12%;
  --suc: 158 100% 10%;
  --wac: 43 100% 11%;
  --erc: 0 100% 14%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 41.124 74.167% 52.941%;
  --pc: 240 33.333% 14.118%;
  --s: 49.901 94.393% 58.039%;
  --sc: 240 33.333% 14.118%;
  --a: 240 33.333% 14.118%;
  --n: 240 33.333% 14.118%;
  --b1: 0 0% 100%;
}

[data-theme=emerald]{
  color-scheme: light;
  --pf: 141.18 50% 48%;
  --sf: 218.88 96.078% 48%;
  --af: 9.8901 81.25% 44.863%;
  --nf: 219.23 20.312% 20.078%;
  --b2: 0 0% 90%;
  --b3: 0 0% 81%;
  --in: 198 93% 60%;
  --su: 158 64% 52%;
  --wa: 43 96% 56%;
  --er: 0 91% 71%;
  --inc: 198 100% 12%;
  --suc: 158 100% 10%;
  --wac: 43 100% 11%;
  --erc: 0 100% 14%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --btn-text-case: uppercase;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 141.18 50% 60%;
  --pc: 151.11 28.421% 18.627%;
  --s: 218.88 96.078% 60%;
  --sc: 210 20% 98.039%;
  --a: 9.8901 81.25% 56.078%;
  --ac: 210 20% 98.039%;
  --n: 219.23 20.312% 25.098%;
  --nc: 210 20% 98.039%;
  --b1: 0 0% 100%;
  --bc: 219.23 20.312% 25.098%;
  --animation-btn: 0;
  --animation-input: 0;
  --btn-focus-scale: 1;
}

[data-theme=corporate]{
  color-scheme: light;
  --pf: 229.09 95.652% 51.137%;
  --sf: 214.91 26.316% 47.216%;
  --af: 154.2 49.02% 48%;
  --nf: 233.33 27.273% 10.353%;
  --b2: 0 0% 90%;
  --b3: 0 0% 81%;
  --in: 198 93% 60%;
  --su: 158 64% 52%;
  --wa: 43 96% 56%;
  --er: 0 91% 71%;
  --pc: 229.09 100% 92.784%;
  --sc: 214.91 100% 11.804%;
  --ac: 154.2 100% 12%;
  --inc: 198 100% 12%;
  --suc: 158 100% 10%;
  --wac: 43 100% 11%;
  --erc: 0 100% 14%;
  --btn-text-case: uppercase;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 229.09 95.652% 63.922%;
  --s: 214.91 26.316% 59.02%;
  --a: 154.2 49.02% 60%;
  --n: 233.33 27.273% 12.941%;
  --nc: 210 38.462% 94.902%;
  --b1: 0 0% 100%;
  --bc: 233.33 27.273% 12.941%;
  --rounded-box: 0.25rem;
  --rounded-btn: .125rem;
  --rounded-badge: .125rem;
  --animation-btn: 0;
  --animation-input: 0;
  --btn-focus-scale: 1;
}

[data-theme=synthwave]{
  color-scheme: dark;
  --pf: 320.73 69.62% 55.216%;
  --sf: 197.03 86.592% 51.922%;
  --af: 48 89.041% 45.647%;
  --nf: 253.22 60.825% 15.216%;
  --b2: 253.85 59.091% 23.294%;
  --b3: 253.85 59.091% 20.965%;
  --pc: 320.73 100% 13.804%;
  --sc: 197.03 100% 12.98%;
  --ac: 48 100% 11.412%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 320.73 69.62% 69.02%;
  --s: 197.03 86.592% 64.902%;
  --a: 48 89.041% 57.059%;
  --n: 253.22 60.825% 19.02%;
  --nc: 260 60% 98.039%;
  --b1: 253.85 59.091% 25.882%;
  --bc: 260 60% 98.039%;
  --in: 199.13 86.957% 63.922%;
  --inc: 257.45 63.218% 17.059%;
  --su: 168.1 74.233% 68.039%;
  --suc: 257.45 63.218% 17.059%;
  --wa: 48 89.041% 57.059%;
  --wac: 257.45 63.218% 17.059%;
  --er: 351.85 73.636% 56.863%;
  --erc: 260 60% 98.039%;
}

[data-theme=retro]{
  color-scheme: light;
  --pf: 2.6667 73.77% 60.863%;
  --sf: 144.62 27.273% 57.569%;
  --af: 49.024 67.213% 60.863%;
  --nf: 41.667 16.822% 33.569%;
  --inc: 221.21 100% 90.667%;
  --suc: 142.13 100% 87.255%;
  --wac: 32.133 100% 8.7451%;
  --erc: 0 100% 90.118%;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 2.6667 73.77% 76.078%;
  --pc: 345 5.2632% 14.902%;
  --s: 144.62 27.273% 71.961%;
  --sc: 345 5.2632% 14.902%;
  --a: 49.024 67.213% 76.078%;
  --ac: 345 5.2632% 14.902%;
  --n: 41.667 16.822% 41.961%;
  --nc: 45 47.059% 80%;
  --b1: 45 47.059% 80%;
  --b2: 45.283 37.063% 71.961%;
  --b3: 42.188 35.955% 65.098%;
  --bc: 345 5.2632% 14.902%;
  --in: 221.21 83.193% 53.333%;
  --su: 142.13 76.216% 36.275%;
  --wa: 32.133 94.619% 43.725%;
  --er: 0 72.222% 50.588%;
  --rounded-box: 0.4rem;
  --rounded-btn: 0.4rem;
  --rounded-badge: 0.4rem;
}

[data-theme=cyberpunk]{
  color-scheme: light;
  --pf: 344.78 100% 58.353%;
  --sf: 195.12 80.392% 56%;
  --af: 276 74.324% 56.784%;
  --nf: 57.273 100% 10.353%;
  --b2: 56 100% 45%;
  --b3: 56 100% 40.5%;
  --in: 198 93% 60%;
  --su: 158 64% 52%;
  --wa: 43 96% 56%;
  --er: 0 91% 71%;
  --bc: 56 100% 10%;
  --pc: 344.78 100% 14.588%;
  --sc: 195.12 100% 14%;
  --ac: 276 100% 14.196%;
  --inc: 198 100% 12%;
  --suc: 158 100% 10%;
  --wac: 43 100% 11%;
  --erc: 0 100% 14%;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  font-family: ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;
  --p: 344.78 100% 72.941%;
  --s: 195.12 80.392% 70%;
  --a: 276 74.324% 70.98%;
  --n: 57.273 100% 12.941%;
  --nc: 56 100% 50%;
  --b1: 56 100% 50%;
  --rounded-box: 0;
  --rounded-btn: 0;
  --rounded-badge: 0;
  --tab-radius: 0;
}

[data-theme=valentine]{
  color-scheme: light;
  --pf: 353.23 73.81% 53.647%;
  --sf: 254.12 86.441% 61.49%;
  --af: 181.41 55.556% 56%;
  --nf: 336 42.857% 38.431%;
  --b2: 318.46 46.429% 80.118%;
  --b3: 318.46 46.429% 72.106%;
  --pc: 353.23 100% 13.412%;
  --sc: 254.12 100% 15.373%;
  --ac: 181.41 100% 14%;
  --inc: 221.21 100% 90.667%;
  --suc: 142.13 100% 87.255%;
  --wac: 32.133 100% 8.7451%;
  --erc: 0 100% 90.118%;
  --rounded-box: 1rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 353.23 73.81% 67.059%;
  --s: 254.12 86.441% 76.863%;
  --a: 181.41 55.556% 70%;
  --n: 336 42.857% 48.039%;
  --nc: 318.46 46.429% 89.02%;
  --b1: 318.46 46.429% 89.02%;
  --bc: 343.64 38.462% 28.039%;
  --in: 221.21 83.193% 53.333%;
  --su: 142.13 76.216% 36.275%;
  --wa: 32.133 94.619% 43.725%;
  --er: 0 72.222% 50.588%;
  --rounded-btn: 1.9rem;
}

[data-theme=halloween]{
  color-scheme: dark;
  --pf: 31.927 89.344% 41.725%;
  --sf: 271.22 45.794% 33.569%;
  --af: 91.071 100% 26.353%;
  --nf: 180 3.5714% 8.7843%;
  --b2: 0 0% 11.647%;
  --b3: 0 0% 10.482%;
  --bc: 0 0% 82.588%;
  --sc: 271.22 100% 88.392%;
  --ac: 91.071 100% 6.5882%;
  --nc: 180 4.8458% 82.196%;
  --inc: 221.21 100% 90.667%;
  --suc: 142.13 100% 87.255%;
  --wac: 32.133 100% 8.7451%;
  --erc: 0 100% 90.118%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 31.927 89.344% 52.157%;
  --pc: 180 7.3171% 8.0392%;
  --s: 271.22 45.794% 41.961%;
  --a: 91.071 100% 32.941%;
  --n: 180 3.5714% 10.98%;
  --b1: 0 0% 12.941%;
  --in: 221.21 83.193% 53.333%;
  --su: 142.13 76.216% 36.275%;
  --wa: 32.133 94.619% 43.725%;
  --er: 0 72.222% 50.588%;
}

[data-theme=garden]{
  color-scheme: light;
  --pf: 138.86 15.982% 34.353%;
  --sf: 96.923 37.143% 74.51%;
  --af: 0 67.742% 75.137%;
  --nf: 0 3.9106% 28.078%;
  --b2: 0 4.3478% 81.882%;
  --b3: 0 4.3478% 73.694%;
  --in: 198 93% 60%;
  --su: 158 64% 52%;
  --wa: 43 96% 56%;
  --er: 0 91% 71%;
  --pc: 138.86 100% 88.588%;
  --inc: 198 100% 12%;
  --suc: 158 100% 10%;
  --wac: 43 100% 11%;
  --erc: 0 100% 14%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 138.86 15.982% 42.941%;
  --s: 96.923 37.143% 93.137%;
  --sc: 96 32.468% 15.098%;
  --a: 0 67.742% 93.922%;
  --ac: 0 21.951% 16.078%;
  --n: 0 3.9106% 35.098%;
  --nc: 0 4.3478% 90.98%;
  --b1: 0 4.3478% 90.98%;
  --bc: 0 3.2258% 6.0784%;
}

[data-theme=forest]{
  color-scheme: dark;
  --pf: 141.04 71.963% 33.569%;
  --sf: 140.98 74.694% 38.431%;
  --af: 35.148 68.98% 41.569%;
  --nf: 0 9.6774% 4.8627%;
  --b2: 0 12.195% 7.2353%;
  --b3: 0 12.195% 6.5118%;
  --in: 198 93% 60%;
  --su: 158 64% 52%;
  --wa: 43 96% 56%;
  --er: 0 91% 71%;
  --bc: 0 11.727% 81.608%;
  --sc: 140.98 100% 9.6078%;
  --ac: 35.148 100% 10.392%;
  --nc: 0 6.8894% 81.216%;
  --inc: 198 100% 12%;
  --suc: 158 100% 10%;
  --wac: 43 100% 11%;
  --erc: 0 100% 14%;
  --rounded-box: 1rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 141.04 71.963% 41.961%;
  --pc: 140.66 100% 88.039%;
  --s: 140.98 74.694% 48.039%;
  --a: 35.148 68.98% 51.961%;
  --n: 0 9.6774% 6.0784%;
  --b1: 0 12.195% 8.0392%;
  --rounded-btn: 1.9rem;
}

[data-theme=aqua]{
  color-scheme: dark;
  --pf: 181.79 92.857% 39.529%;
  --sf: 274.41 30.909% 45.49%;
  --af: 47.059 100% 64%;
  --nf: 205.4 53.725% 40%;
  --b2: 218.61 52.511% 38.647%;
  --b3: 218.61 52.511% 34.782%;
  --bc: 218.61 100% 88.588%;
  --sc: 274.41 100% 91.373%;
  --ac: 47.059 100% 16%;
  --nc: 205.4 100% 90%;
  --inc: 221.21 100% 90.667%;
  --suc: 142.13 100% 87.255%;
  --wac: 32.133 100% 8.7451%;
  --erc: 0 100% 90.118%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 181.79 92.857% 49.412%;
  --pc: 181.41 100% 16.667%;
  --s: 274.41 30.909% 56.863%;
  --a: 47.059 100% 80%;
  --n: 205.4 53.725% 50%;
  --b1: 218.61 52.511% 42.941%;
  --in: 221.21 83.193% 53.333%;
  --su: 142.13 76.216% 36.275%;
  --wa: 32.133 94.619% 43.725%;
  --er: 0 72.222% 50.588%;
}

[data-theme=lofi]{
  color-scheme: light;
  --pf: 0 0% 4.0784%;
  --sf: 0 1.9608% 8%;
  --af: 0 0% 11.922%;
  --nf: 0 0% 0%;
  --btn-text-case: uppercase;
  --border-btn: 1px;
  --tab-border: 1px;
  --p: 0 0% 5.098%;
  --pc: 0 0% 100%;
  --s: 0 1.9608% 10%;
  --sc: 0 0% 100%;
  --a: 0 0% 14.902%;
  --ac: 0 0% 100%;
  --n: 0 0% 0%;
  --nc: 0 0% 100%;
  --b1: 0 0% 100%;
  --b2: 0 0% 94.902%;
  --b3: 0 1.9608% 90%;
  --bc: 0 0% 0%;
  --in: 212.35 100% 47.647%;
  --inc: 0 0% 100%;
  --su: 136.84 72.152% 46.471%;
  --suc: 0 0% 100%;
  --wa: 4.5614 100% 66.471%;
  --wac: 0 0% 100%;
  --er: 325.05 77.6% 49.02%;
  --erc: 0 0% 100%;
  --rounded-box: 0.25rem;
  --rounded-btn: 0.125rem;
  --rounded-badge: 0.125rem;
  --animation-btn: 0;
  --animation-input: 0;
  --btn-focus-scale: 1;
  --tab-radius: 0;
}

[data-theme=pastel]{
  color-scheme: light;
  --pf: 283.64 21.569% 64%;
  --sf: 351.63 70.492% 70.431%;
  --af: 158.49 54.639% 64.784%;
  --nf: 198.62 43.719% 48.784%;
  --in: 198 93% 60%;
  --su: 158 64% 52%;
  --wa: 43 96% 56%;
  --er: 0 91% 71%;
  --bc: 0 0% 20%;
  --pc: 283.64 59.314% 16%;
  --sc: 351.63 100% 17.608%;
  --ac: 158.49 100% 16.196%;
  --nc: 198.62 100% 12.196%;
  --inc: 198 100% 12%;
  --suc: 158 100% 10%;
  --wac: 43 100% 11%;
  --erc: 0 100% 14%;
  --rounded-box: 1rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 283.64 21.569% 80%;
  --s: 351.63 70.492% 88.039%;
  --a: 158.49 54.639% 80.98%;
  --n: 198.62 43.719% 60.98%;
  --b1: 0 0% 100%;
  --b2: 210 20% 98.039%;
  --b3: 216 12.195% 83.922%;
  --rounded-btn: 1.9rem;
}

[data-theme=fantasy]{
  color-scheme: light;
  --pf: 296.04 82.813% 20.078%;
  --sf: 200 100% 29.647%;
  --af: 30.894 94.378% 40.941%;
  --nf: 215 27.907% 13.49%;
  --b2: 0 0% 90%;
  --b3: 0 0% 81%;
  --in: 198 93% 60%;
  --su: 158 64% 52%;
  --wa: 43 96% 56%;
  --er: 0 91% 71%;
  --pc: 296.04 100% 85.02%;
  --sc: 200 100% 87.412%;
  --ac: 30.894 100% 10.235%;
  --nc: 215 62.264% 83.373%;
  --inc: 198 100% 12%;
  --suc: 158 100% 10%;
  --wac: 43 100% 11%;
  --erc: 0 100% 14%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 296.04 82.813% 25.098%;
  --s: 200 100% 37.059%;
  --a: 30.894 94.378% 51.176%;
  --n: 215 27.907% 16.863%;
  --b1: 0 0% 100%;
  --bc: 215 27.907% 16.863%;
}

[data-theme=wireframe]{
  color-scheme: light;
  --pf: 0 0% 57.725%;
  --sf: 0 0% 57.725%;
  --af: 0 0% 57.725%;
  --nf: 0 0% 73.725%;
  --bc: 0 0% 20%;
  --pc: 0 0% 14.431%;
  --sc: 0 0% 14.431%;
  --ac: 0 0% 14.431%;
  --nc: 0 0% 18.431%;
  --inc: 240 100% 90%;
  --suc: 120 100% 85.02%;
  --wac: 60 100% 10%;
  --erc: 0 100% 90%;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  font-family: Chalkboard,comic sans ms,"sanssecondaryerif";
  --p: 0 0% 72.157%;
  --s: 0 0% 72.157%;
  --a: 0 0% 72.157%;
  --n: 0 0% 92.157%;
  --b1: 0 0% 100%;
  --b2: 0 0% 93.333%;
  --b3: 0 0% 86.667%;
  --in: 240 100% 50%;
  --su: 120 100% 25.098%;
  --wa: 60 30.196% 50%;
  --er: 0 100% 50%;
  --rounded-box: 0.2rem;
  --rounded-btn: 0.2rem;
  --rounded-badge: 0.2rem;
  --tab-radius: 0.2rem;
}

[data-theme=black]{
  color-scheme: dark;
  --pf: 0 1.9608% 16%;
  --sf: 0 1.9608% 16%;
  --af: 0 1.9608% 16%;
  --bc: 0 0% 80%;
  --pc: 0 5.3922% 84%;
  --sc: 0 5.3922% 84%;
  --ac: 0 5.3922% 84%;
  --nc: 0 2.5404% 83.02%;
  --inc: 240 100% 90%;
  --suc: 120 100% 85.02%;
  --wac: 60 100% 10%;
  --erc: 0 100% 90%;
  --border-btn: 1px;
  --tab-border: 1px;
  --p: 0 1.9608% 20%;
  --s: 0 1.9608% 20%;
  --a: 0 1.9608% 20%;
  --b1: 0 0% 0%;
  --b2: 0 0% 5.098%;
  --b3: 0 1.9608% 10%;
  --n: 0 1.2987% 15.098%;
  --nf: 0 1.9608% 20%;
  --in: 240 100% 50%;
  --su: 120 100% 25.098%;
  --wa: 60 100% 50%;
  --er: 0 100% 50%;
  --rounded-box: 0;
  --rounded-btn: 0;
  --rounded-badge: 0;
  --animation-btn: 0;
  --animation-input: 0;
  --btn-text-case: lowercase;
  --btn-focus-scale: 1;
  --tab-radius: 0;
}

[data-theme=luxury]{
  color-scheme: dark;
  --pf: 0 0% 80%;
  --sf: 218.4 54.348% 14.431%;
  --af: 318.62 21.805% 20.863%;
  --nf: 270 4.3478% 7.2157%;
  --pc: 0 0% 20%;
  --sc: 218.4 100% 83.608%;
  --ac: 318.62 84.615% 85.216%;
  --inc: 202.35 100% 14%;
  --suc: 89.007 100% 10.392%;
  --wac: 53.906 100% 12.706%;
  --erc: 0 100% 14.353%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 0 0% 100%;
  --s: 218.4 54.348% 18.039%;
  --a: 318.62 21.805% 26.078%;
  --n: 270 4.3478% 9.0196%;
  --nc: 37.083 67.29% 58.039%;
  --b1: 240 10% 3.9216%;
  --b2: 270 4.3478% 9.0196%;
  --b3: 270 2.1739% 18.039%;
  --bc: 37.083 67.29% 58.039%;
  --in: 202.35 100% 70%;
  --su: 89.007 61.633% 51.961%;
  --wa: 53.906 68.817% 63.529%;
  --er: 0 100% 71.765%;
}

[data-theme=dracula]{
  color-scheme: dark;
  --pf: 325.52 100% 58.98%;
  --sf: 264.71 89.474% 62.118%;
  --af: 31.02 100% 56.941%;
  --nf: 229.57 15.033% 24%;
  --b2: 231.43 14.894% 16.588%;
  --b3: 231.43 14.894% 14.929%;
  --pc: 325.52 100% 14.745%;
  --sc: 264.71 100% 15.529%;
  --ac: 31.02 100% 14.235%;
  --nc: 229.57 70.868% 86%;
  --inc: 190.53 100% 15.373%;
  --suc: 135.18 100% 12.941%;
  --wac: 64.909 100% 15.294%;
  --erc: 0 100% 93.333%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 325.52 100% 73.725%;
  --s: 264.71 89.474% 77.647%;
  --a: 31.02 100% 71.176%;
  --n: 229.57 15.033% 30%;
  --b1: 231.43 14.894% 18.431%;
  --bc: 60 30% 96.078%;
  --in: 190.53 96.61% 76.863%;
  --su: 135.18 94.444% 64.706%;
  --wa: 64.909 91.667% 76.471%;
  --er: 0 100% 66.667%;
}

[data-theme=cmyk]{
  color-scheme: light;
  --pf: 202.72 83.251% 48.157%;
  --sf: 335.25 77.67% 47.686%;
  --af: 56.195 100% 47.843%;
  --nf: 0 0% 8.1569%;
  --b2: 0 0% 90%;
  --b3: 0 0% 81%;
  --bc: 0 0% 20%;
  --pc: 202.72 100% 12.039%;
  --sc: 335.25 100% 91.922%;
  --ac: 56.195 100% 11.961%;
  --nc: 0 0% 82.039%;
  --inc: 192.2 100% 10.431%;
  --suc: 291.06 100% 87.608%;
  --wac: 25.027 100% 11.333%;
  --erc: 3.956 100% 91.137%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 202.72 83.251% 60.196%;
  --s: 335.25 77.67% 59.608%;
  --a: 56.195 100% 59.804%;
  --n: 0 0% 10.196%;
  --b1: 0 0% 100%;
  --in: 192.2 48.361% 52.157%;
  --su: 291.06 48.454% 38.039%;
  --wa: 25.027 84.615% 56.667%;
  --er: 3.956 80.531% 55.686%;
}

[data-theme=autumn]{
  color-scheme: light;
  --pf: 344.23 95.804% 22.431%;
  --sf: 0.44444 63.38% 46.588%;
  --af: 27.477 56.021% 50.039%;
  --nf: 22.105 17.117% 34.824%;
  --b2: 0 0% 85.059%;
  --b3: 0 0% 76.553%;
  --bc: 0 0% 18.902%;
  --pc: 344.23 100% 85.608%;
  --sc: 0.44444 100% 91.647%;
  --ac: 27.477 100% 12.51%;
  --nc: 22.105 100% 88.706%;
  --inc: 186.94 100% 9.9216%;
  --suc: 164.59 100% 8.6275%;
  --wac: 30.141 100% 9.9216%;
  --erc: 353.6 100% 89.765%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 344.23 95.804% 28.039%;
  --s: 0.44444 63.38% 58.235%;
  --a: 27.477 56.021% 62.549%;
  --n: 22.105 17.117% 43.529%;
  --b1: 0 0% 94.51%;
  --in: 186.94 47.826% 49.608%;
  --su: 164.59 33.636% 43.137%;
  --wa: 30.141 84.19% 49.608%;
  --er: 353.6 79.116% 48.824%;
}

[data-theme=business]{
  color-scheme: dark;
  --pf: 210 64.103% 24.471%;
  --sf: 200 12.931% 43.608%;
  --af: 12.515 79.512% 47.843%;
  --nf: 212.73 13.58% 12.706%;
  --b2: 0 0% 11.294%;
  --b3: 0 0% 10.165%;
  --bc: 0 0% 82.51%;
  --pc: 210 100% 86.118%;
  --sc: 200 100% 10.902%;
  --ac: 12.515 100% 11.961%;
  --nc: 212.73 28.205% 83.176%;
  --inc: 199.15 100% 88.353%;
  --suc: 144 100% 11.137%;
  --wac: 39.231 100% 12.078%;
  --erc: 6.3415 100% 88.667%;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 210 64.103% 30.588%;
  --s: 200 12.931% 54.51%;
  --a: 12.515 79.512% 59.804%;
  --n: 212.73 13.58% 15.882%;
  --b1: 0 0% 12.549%;
  --in: 199.15 100% 41.765%;
  --su: 144 30.973% 55.686%;
  --wa: 39.231 64.356% 60.392%;
  --er: 6.3415 55.656% 43.333%;
  --rounded-box: 0.25rem;
  --rounded-btn: .125rem;
  --rounded-badge: .125rem;
}

[data-theme=acid]{
  color-scheme: light;
  --pf: 302.59 100% 40%;
  --sf: 27.294 100% 40%;
  --af: 72 98.425% 40.157%;
  --nf: 238.42 43.182% 13.804%;
  --b2: 0 0% 88.235%;
  --b3: 0 0% 79.412%;
  --bc: 0 0% 19.608%;
  --pc: 302.59 100% 90%;
  --sc: 27.294 100% 10%;
  --ac: 72 100% 10.039%;
  --nc: 238.42 99.052% 83.451%;
  --inc: 209.85 100% 11.569%;
  --suc: 148.87 100% 11.608%;
  --wac: 52.574 100% 11.451%;
  --erc: 0.78261 100% 89.02%;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 302.59 100% 50%;
  --s: 27.294 100% 50%;
  --a: 72 98.425% 50.196%;
  --n: 238.42 43.182% 17.255%;
  --b1: 0 0% 98.039%;
  --in: 209.85 91.628% 57.843%;
  --su: 148.87 49.533% 58.039%;
  --wa: 52.574 92.661% 57.255%;
  --er: 0.78261 100% 45.098%;
  --rounded-box: 1.25rem;
  --rounded-btn: 1rem;
  --rounded-badge: 1rem;
}

[data-theme=lemonade]{
  color-scheme: light;
  --pf: 88.8 96.154% 24.471%;
  --sf: 60 80.952% 43.765%;
  --af: 62.553 79.661% 70.745%;
  --nf: 238.42 43.182% 13.804%;
  --b2: 0 0% 90%;
  --b3: 0 0% 81%;
  --bc: 0 0% 20%;
  --pc: 88.8 100% 86.118%;
  --sc: 60 100% 10.941%;
  --ac: 62.553 100% 17.686%;
  --nc: 238.42 99.052% 83.451%;
  --inc: 191.61 79.118% 16.902%;
  --suc: 74.458 100% 15.725%;
  --wac: 50.182 100% 15.059%;
  --erc: 0.98361 100% 16.588%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 88.8 96.154% 30.588%;
  --s: 60 80.952% 54.706%;
  --a: 62.553 79.661% 88.431%;
  --n: 238.42 43.182% 17.255%;
  --b1: 0 0% 100%;
  --in: 191.61 39.241% 84.51%;
  --su: 74.458 76.147% 78.627%;
  --wa: 50.182 87.302% 75.294%;
  --er: 0.98361 70.115% 82.941%;
}

[data-theme=night]{
  color-scheme: dark;
  --pf: 198.44 93.204% 47.686%;
  --sf: 234.45 89.474% 59.137%;
  --af: 328.85 85.621% 56%;
  --b2: 222.22 47.368% 10.059%;
  --b3: 222.22 47.368% 9.0529%;
  --bc: 222.22 65.563% 82.235%;
  --pc: 198.44 100% 11.922%;
  --sc: 234.45 100% 14.784%;
  --ac: 328.85 100% 14%;
  --nc: 217.24 75.772% 83.49%;
  --inc: 198.46 100% 9.6078%;
  --suc: 172.46 100% 10.078%;
  --wac: 40.61 100% 12.706%;
  --erc: 350.94 100% 14.235%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 198.44 93.204% 59.608%;
  --s: 234.45 89.474% 73.922%;
  --a: 328.85 85.621% 70%;
  --n: 217.24 32.584% 17.451%;
  --nf: 217.06 30.357% 21.961%;
  --b1: 222.22 47.368% 11.176%;
  --in: 198.46 90.204% 48.039%;
  --su: 172.46 66.008% 50.392%;
  --wa: 40.61 88.172% 63.529%;
  --er: 350.94 94.558% 71.176%;
}

[data-theme=coffee]{
  color-scheme: dark;
  --pf: 29.583 66.667% 46.118%;
  --sf: 182.4 24.752% 15.843%;
  --af: 194.19 74.4% 19.608%;
  --nf: 300 20% 4.7059%;
  --b2: 306 18.519% 9.5294%;
  --b3: 306 18.519% 8.5765%;
  --pc: 29.583 100% 11.529%;
  --sc: 182.4 67.237% 83.961%;
  --ac: 194.19 100% 84.902%;
  --nc: 300 13.75% 81.176%;
  --inc: 171.15 100% 13.451%;
  --suc: 92.5 100% 12.471%;
  --wac: 43.125 100% 13.725%;
  --erc: 9.7561 100% 14.941%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 29.583 66.667% 57.647%;
  --s: 182.4 24.752% 19.804%;
  --a: 194.19 74.4% 24.51%;
  --n: 300 20% 5.8824%;
  --b1: 306 18.519% 10.588%;
  --bc: 36.667 8.3333% 42.353%;
  --in: 171.15 36.527% 67.255%;
  --su: 92.5 25% 62.353%;
  --wa: 43.125 100% 68.627%;
  --er: 9.7561 95.349% 74.706%;
}

[data-theme=winter]{
  color-scheme: light;
  --pf: 211.79 100% 40.627%;
  --sf: 246.92 47.273% 34.51%;
  --af: 310.41 49.388% 41.569%;
  --nf: 217.02 92.157% 8%;
  --pc: 211.79 100% 90.157%;
  --sc: 246.92 100% 88.627%;
  --ac: 310.41 100% 90.392%;
  --nc: 217.02 100% 82%;
  --inc: 191.54 100% 15.608%;
  --suc: 181.5 100% 13.255%;
  --wac: 32.308 100% 16.706%;
  --erc: 0 100% 14.431%;
  --rounded-box: 1rem;
  --rounded-btn: 0.5rem;
  --rounded-badge: 1.9rem;
  --animation-btn: 0.25s;
  --animation-input: .2s;
  --btn-text-case: uppercase;
  --btn-focus-scale: 0.95;
  --border-btn: 1px;
  --tab-border: 1px;
  --tab-radius: 0.5rem;
  --p: 211.79 100% 50.784%;
  --s: 246.92 47.273% 43.137%;
  --a: 310.41 49.388% 51.961%;
  --n: 217.02 92.157% 10%;
  --b1: 0 0% 100%;
  --b2: 216.92 100% 97.451%;
  --b3: 218.82 43.59% 92.353%;
  --bc: 214.29 30.061% 31.961%;
  --in: 191.54 92.857% 78.039%;
  --su: 181.5 46.512% 66.275%;
  --wa: 32.308 61.905% 83.529%;
  --er: 0 63.38% 72.157%;
}

*, ::before, ::after{
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

::backdrop{
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

.avatar.placeholder > div{
  display: flex;
  align-items: center;
  justify-content: center;
}

@keyframes spin{
  from{
    transform: rotate(0deg);
  }

  to{
    transform: rotate(360deg);
  }
}

.label{
  display: flex;
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
  align-items: center;
  justify-content: space-between;
  padding-left: 0.25rem;
  padding-right: 0.25rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.input{
  flex-shrink: 1;
  height: 3rem;
  padding-left: 1rem;
  padding-right: 1rem;
  font-size: 1rem;
  line-height: 2;
  line-height: 1.5rem;
  border-width: 1px;
  border-color: hsl(var(--bc) / var(--tw-border-opacity));
  --tw-border-opacity: 0;
  --tw-bg-opacity: 1;
  background-color: hsl(var(--b1) / var(--tw-bg-opacity));
  border-radius: var(--rounded-btn, 0.5rem);
}

.input-group > .input{
  isolation: isolate;
}

.input-group > *,
  .input-group > .input,
  .input-group > .textarea,
  .input-group > .select{
  border-radius: 0px;
}

.link{
  cursor: pointer;
  text-decoration-line: underline;
}

.btm-nav>* .label{
  font-size: 1rem;
  line-height: 1.5rem;
}

@keyframes button-pop{
  0%{
    transform: scale(var(--btn-focus-scale, 0.95));
  }

  40%{
    transform: scale(1.02);
  }

  100%{
    transform: scale(1);
  }
}

@keyframes checkmark{
  0%{
    background-position-y: 5px;
  }

  50%{
    background-position-y: -2px;
  }

  100%{
    background-position-y: 0;
  }
}

.label a:hover{
  --tw-text-opacity: 1;
  color: hsl(var(--bc) / var(--tw-text-opacity));
}

.input[list]::-webkit-calendar-picker-indicator{
  line-height: 1em;
}

.input:focus{
  outline: 2px solid hsla(var(--bc) / 0.2);
  outline-offset: 2px;
}

.input-disabled,
  .input[disabled]{
  cursor: not-allowed;
  --tw-border-opacity: 1;
  border-color: hsl(var(--b2, var(--b1)) / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: hsl(var(--b2, var(--b1)) / var(--tw-bg-opacity));
  --tw-text-opacity: 0.2;
}

.input-disabled::-moz-placeholder, .input[disabled]::-moz-placeholder{
  color: hsl(var(--bc) / var(--tw-placeholder-opacity));
  --tw-placeholder-opacity: 0.2;
}

.input-disabled::placeholder,
  .input[disabled]::placeholder{
  color: hsl(var(--bc) / var(--tw-placeholder-opacity));
  --tw-placeholder-opacity: 0.2;
}

.link:focus{
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.link:focus-visible{
  outline: 2px solid currentColor;
  outline-offset: 2px;
}

@keyframes progress-loading{
  50%{
    left: 107%;
  }
}

@keyframes radiomark{
  0%{
    box-shadow: 0 0 0 12px hsl(var(--b1)) inset, 0 0 0 12px hsl(var(--b1)) inset;
  }

  50%{
    box-shadow: 0 0 0 3px hsl(var(--b1)) inset, 0 0 0 3px hsl(var(--b1)) inset;
  }

  100%{
    box-shadow: 0 0 0 4px hsl(var(--b1)) inset, 0 0 0 4px hsl(var(--b1)) inset;
  }
}

@keyframes rating-pop{
  0%{
    transform: translateY(-0.125em);
  }

  40%{
    transform: translateY(-0.125em);
  }

  100%{
    transform: translateY(0);
  }
}

@keyframes toast-pop{
  0%{
    transform: scale(0.9);
    opacity: 0;
  }

  100%{
    transform: scale(1);
    opacity: 1;
  }
}

.absolute{
  position: absolute;
}

.relative{
  position: relative;
}

.left-0{
  left: 0px;
}

.left-10{
  left: 2.5rem;
}

.left-\[117px\]{
  left: 117px;
}

.left-\[168px\]{
  left: 168px;
}

.left-\[188px\]{
  left: 188px;
}

.left-\[20px\]{
  left: 20px;
}

.left-\[29\.25px\]{
  left: 29.25px;
}

.left-\[424\.76px\]{
  left: 424.76px;
}

.left-\[440px\]{
  left: 440px;
}

.left-\[73\.56px\]{
  left: 73.56px;
}

.top-0{
  top: 0px;
}

.top-\[139px\]{
  top: 139px;
}

.top-\[143\.8px\]{
  top: 143.8px;
}

.top-\[146\.18px\]{
  top: 146.18px;
}

.top-\[390\.06px\]{
  top: 390.06px;
}

.top-\[414\.86px\]{
  top: 414.86px;
}

.top-\[661px\]{
  top: 661px;
}

.left-\[50px\]{
  left: 50px;
}

.left-\[50\%\]{
  left: 50%;
}

.m-8{
  margin: 2rem;
}

.-mx-px{
  margin-left: -1px;
  margin-right: -1px;
}

.mx-1{
  margin-left: 0.25rem;
  margin-right: 0.25rem;
}

.mx-auto{
  margin-left: auto;
  margin-right: auto;
}

.mb-4{
  margin-bottom: 1rem;
}

.mb-8{
  margin-bottom: 2rem;
}

.ml-1{
  margin-left: 0.25rem;
}

.ml-2{
  margin-left: 0.5rem;
}

.ml-5{
  margin-left: 1.25rem;
}

.ml-7{
  margin-left: 1.75rem;
}

.ml-\[300px\]{
  margin-left: 300px;
}

.mr-1{
  margin-right: 0.25rem;
}

.mt-14{
  margin-top: 3.5rem;
}

.mt-24{
  margin-top: 6rem;
}

.mt-3{
  margin-top: 0.75rem;
}

.mt-8{
  margin-top: 2rem;
}

.mt-\[109px\]{
  margin-top: 109px;
}

.mt-\[37px\]{
  margin-top: 37px;
}

.mt-\[3px\]{
  margin-top: 3px;
}

.mb-2{
  margin-bottom: 0.5rem;
}

.mb-3{
  margin-bottom: 0.75rem;
}

.mb-6{
  margin-bottom: 1.5rem;
}

.ml-12{
  margin-left: 3rem;
}

.mt-12{
  margin-top: 3rem;
}

.block{
  display: block;
}

.inline-block{
  display: inline-block;
}

.flex{
  display: flex;
}

.inline-flex{
  display: inline-flex;
}

.h-519{
  height: 519px;
}

.h-772{
  height: 772px;
}

.h-\[57px\]{
  height: 57px;
}

.h-\[58px\]{
  height: 58px;
}

.h-\[650px\]{
  height: 650px;
}

.h-\[79px\]{
  height: 79px;
}

.h-12{
  height: 3rem;
}

.h-\[541px\]{
  height: 541px;
}

.h-\[432px\]{
  height: 432px;
}

.h-\[24px\]{
  height: 24px;
}

.h-\[44px\]{
  height: 44px;
}

.h-8{
  height: 2rem;
}

.max-h-96{
  max-height: 24rem;
}

.w-1609{
  width: 1609px;
}

.w-187{
  width: 187;
}

.w-571{
  width: 571px;
}

.w-\[107px\]{
  width: 107px;
}

.w-\[351px\]{
  width: 351px;
}

.w-\[450px\]{
  width: 450px;
}

.w-\[600px\]{
  width: 600px;
}

.w-\[90px\]{
  width: 90px;
}

.w-\[109px\]{
  width: 109px;
}

.w-\[10px\]{
  width: 10px;
}

.w-\[100px\]{
  width: 100px;
}

.w-\[150px\]{
  width: 150px;
}

.w-\[30px\]{
  width: 30px;
}

.w-full{
  width: 100%;
}

.w-24{
  width: 6rem;
}

.w-\[446px\]{
  width: 446px;
}

.w-\[470px\]{
  width: 470px;
}

.w-\[94px\]{
  width: 94px;
}

.max-w-md{
  max-width: 28rem;
}

.max-w-xs{
  max-width: 20rem;
}

.max-w-full{
  max-width: 100%;
}

.flex-grow-0{
  flex-grow: 0;
}

.translate-x-5{
  --tw-translate-x: 1.25rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.translate-x-1\/3{
  --tw-translate-x: 33.333333%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.appearance-none{
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}

.flex-row{
  flex-direction: row;
}

.place-content-center{
  place-content: center;
}

.items-end{
  align-items: flex-end;
}

.items-center{
  align-items: center;
}

.justify-end{
  justify-content: flex-end;
}

.justify-center{
  justify-content: center;
}

.justify-between{
  justify-content: space-between;
}

.gap-\[10px\]{
  gap: 10px;
}

.gap-9{
  gap: 2.25rem;
}

.gap-10{
  gap: 2.5rem;
}

.gap-20{
  gap: 5rem;
}

.rounded-\[10px\]{
  border-radius: 10px;
}

.rounded-round-40{
  border-radius: 40px;
}

.rounded-\[20px\]{
  border-radius: 20px;
}

.rounded-\[15px\]{
  border-radius: 15px;
}

.rounded-l-round-40{
  border-top-left-radius: 40px;
  border-bottom-left-radius: 40px;
}

.rounded-r-round-40{
  border-top-right-radius: 40px;
  border-bottom-right-radius: 40px;
}

.border{
  border-width: 1px;
}

.border-gray-300{
  --tw-border-opacity: 1;
  border-color: rgb(209 213 219 / var(--tw-border-opacity));
}

.border-red-500{
  --tw-border-opacity: 1;
  border-color: rgb(239 68 68 / var(--tw-border-opacity));
}

.border-blue-100{
  --tw-border-opacity: 1;
  border-color: rgb(219 234 254 / var(--tw-border-opacity));
}

.border-blue-400{
  --tw-border-opacity: 1;
  border-color: rgb(96 165 250 / var(--tw-border-opacity));
}

.bg-\#0093FB{
  --tw-bg-opacity: 1;
  background-color: rgb(0 147 251 / var(--tw-bg-opacity));
}

.bg-bg-login{
  background-color: rgba(0, 147, 251, 0.8);
}

.bg-white{
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.bg-red-500{
  --tw-bg-opacity: 1;
  background-color: rgb(239 68 68 / var(--tw-bg-opacity));
}

.bg-gray-300{
  --tw-bg-opacity: 1;
  background-color: rgb(209 213 219 / var(--tw-bg-opacity));
}

.bg-blue-500{
  --tw-bg-opacity: 1;
  background-color: rgb(59 130 246 / var(--tw-bg-opacity));
}

.bg-slate-400{
  --tw-bg-opacity: 1;
  background-color: rgb(148 163 184 / var(--tw-bg-opacity));
}

.bg-green-500{
  --tw-bg-opacity: 1;
  background-color: rgb(34 197 94 / var(--tw-bg-opacity));
}

.bg-purple-500{
  --tw-bg-opacity: 1;
  background-color: rgb(168 85 247 / var(--tw-bg-opacity));
}

.bg-red-300{
  --tw-bg-opacity: 1;
  background-color: rgb(252 165 165 / var(--tw-bg-opacity));
}

.bg-center{
  background-position: center;
}

.p-0{
  padding: 0px;
}

.p-\[10px\]{
  padding: 10px;
}

.px-3{
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}

.px-4{
  padding-left: 1rem;
  padding-right: 1rem;
}

.px-8{
  padding-left: 2rem;
  padding-right: 2rem;
}

.py-2{
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.py-6{
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

.py-8{
  padding-top: 2rem;
  padding-bottom: 2rem;
}

.pl-10{
  padding-left: 2.5rem;
}

.pl-3{
  padding-left: 0.75rem;
}

.pl-\[3px\]{
  padding-left: 3px;
}

.pl-\[\]{
  padding-left: ;
}

.pb-8{
  padding-bottom: 2rem;
}

.pt-6{
  padding-top: 1.5rem;
}

.pl-\[p\]{
  padding-left: p;
}

.pl-7{
  padding-left: 1.75rem;
}

.pl-2{
  padding-left: 0.5rem;
}

.pl-6{
  padding-left: 1.5rem;
}

.pl-5{
  padding-left: 1.25rem;
}

.text-center{
  text-align: center;
}

.align-baseline{
  vertical-align: baseline;
}

.font-ibm-plex-sans{
  font-family: IBM Plex Sans, sans-serif;
}

.font-ibm-thai{
  font-family: IBM Plex Sans Thai, sans-serif;
}

.text-\[24px\]{
  font-size: 24px;
}

.text-\[30px\]{
  font-size: 30px;
}

.text-\[70px\]{
  font-size: 70px;
}

.text-sm{
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.text-xs{
  font-size: 0.75rem;
  line-height: 1rem;
}

.text-\[16px\]{
  font-size: 16px;
}

.font-bold{
  font-weight: 700;
}

.font-medium{
  font-weight: 500;
}

.font-normal{
  font-weight: 400;
}

.italic{
  font-style: italic;
}

.not-italic{
  font-style: normal;
}

.leading-\[39px\]{
  line-height: 39px;
}

.leading-\[40px\]{
  line-height: 40px;
}

.leading-\[91px\]{
  line-height: 91px;
}

.leading-tight{
  line-height: 1.25;
}

.text-\[\#808080\]{
  --tw-text-opacity: 1;
  color: rgb(128 128 128 / var(--tw-text-opacity));
}

.text-red-50{
  --tw-text-opacity: 1;
  color: rgb(254 242 242 / var(--tw-text-opacity));
}

.text-white{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.text-gray-800{
  --tw-text-opacity: 1;
  color: rgb(31 41 55 / var(--tw-text-opacity));
}

.text-blue-500{
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}

.text-gray-500{
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.text-gray-700{
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity));
}

.text-red-500{
  --tw-text-opacity: 1;
  color: rgb(239 68 68 / var(--tw-text-opacity));
}

.shadow-blux{
  --tw-shadow: 0px 0px 30px 4px rgba(0, 147, 251, 0.5);
  --tw-shadow-colored: 0px 0px 30px 4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-sha-input{
  --tw-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);
  --tw-shadow-colored: 0px 0px 4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow{
  --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-md{
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-xl{
  --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.drop-shadow-shadow-xlxl{
  --tw-drop-shadow: drop-shadow(0px 0px 50px rgba(0, 0, 0, 0.12));
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.hover\:border-solid:hover{
  border-style: solid;
}

.hover\:bg-blue-700:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(29 78 216 / var(--tw-bg-opacity));
}

.hover\:bg-gray-400:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(156 163 175 / var(--tw-bg-opacity));
}

.hover\:bg-red-500:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(239 68 68 / var(--tw-bg-opacity));
}

.hover\:bg-pink-500:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(236 72 153 / var(--tw-bg-opacity));
}

.hover\:bg-yellow-500:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(234 179 8 / var(--tw-bg-opacity));
}

.hover\:text-blue-800:hover{
  --tw-text-opacity: 1;
  color: rgb(30 64 175 / var(--tw-text-opacity));
}

.hover\:text-blue-500:hover{
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}

.focus\:bg-red-500:focus{
  --tw-bg-opacity: 1;
  background-color: rgb(239 68 68 / var(--tw-bg-opacity));
}

.focus\:bg-pink-500:focus{
  --tw-bg-opacity: 1;
  background-color: rgb(236 72 153 / var(--tw-bg-opacity));
}

.focus\:bg-yellow-500:focus{
  --tw-bg-opacity: 1;
  background-color: rgb(234 179 8 / var(--tw-bg-opacity));
}

.focus\:text-blue-500:focus{
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}

.focus\:outline-none:focus{
  outline: 2px solid transparent;
  outline-offset: 2px;
}

@media (min-width: 768px){
  .md\:h-\[538px\]{
    height: 538px;
  }

  .md\:w-\[1168px\]{
    width: 1168px;
  }
}

@media (min-width: 1280px){
  .xl\:h-\[538px\]{
    height: 538px;
  }

  .xl\:w-\[1168px\]{
    width: 1168px;
  }

  .xl\:max-w-2xl{
    max-width: 42rem;
  }
}

@media (min-width: 1536px){
  .\32xl\:h-\[538px\]{
    height: 538px;
  }

  .\32xl\:w-\[1168px\]{
    width: 1168px;
  }
}
</style>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include "assets/header_bt.php";?></title>
    <link rel="stylesheet" href="./assets/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body class="flex justify-center ">
  <div class="flex w-600  h-600 bg-white 400 mt-24 drop-shadow-shadow-xlxl border rounded-round-40 "> 
    <div class="w-571 h-772 bg-#0093FB shadow-blux border rounded-round-40 ">
      <img src="image/woman_student.png" alt="" class="w-187 h-519 absolute left-[188px] top-[139px]">
      <div class="flex flex-row items-center p-0 absolute w-[450px] h-[79px] left-[20px] top-0">
          <div class=" p-[10px] gap-[10px] w-[107px] h-[79px]"><h1 class="absolute  left-[29.25px] mt-[3px] "><img src="/image/logoEDS.svg" alt=""></h1></div>
            <label class="font-medium text-[30px] leading-[39px] not-italic text-white font-ibm-plex-sans ml-7 mt-3 ">Education System</label> 
      </div>
        <img src="image/yellow.svg" class="absolute left-[117px] top-[143.8px]" alt="">
        <img src="image/orange.svg" class="absolute left-[424.76px] top-[146.18px]" alt="">
        <img src="image/green.svg" class="absolute left-[440px] top-[414.86px]" alt="">
        <img src="image/Group 5.svg" class="absolute left-[168px] top-[661px]" alt="">
        <img src="image/pink.svg" class="absolute left-[73.56px] top-[390.06px]" alt="">
    </div>
    <div class="  w-[600px] h-[650px] mt-[109px] ml-[300px]">
      <div class="w-[470px] h-[541px]">
        <label class="font-bold not-italic text-[70px] leading-[91px] text-[#808080] -mx-px font-ibm-thai">เข้าสู่ระบบ EDS</label>
        <div class=" rounded w-[470px] h-[432px] mt-14 ">
          <div class="flex gap-20 ">
            <img src="image/female 1.svg" class=" w-[94px] h-[44px] pl-3 " alt="">
            <img src="image/graduating-student 1.svg" class="w-[94px] h-[44px] "alt="">
            <img src="image/user-gear 1.svg" class="w-[94px] h-[44px] pl-5 " alt="">
          </div>
          <div class="flex gap-20 font-ibm-thai text-[16px] font-normal">
            <button class="w-24 h-12  hover:text-blue-500 focus:text-blue-500">
              ครู/บุคลากร
            </button>
            <button class="w-24 h-12  hover:text-blue-500 focus:text-blue-500">
              นักเรียน
            </button>
            <button class="w-24 h-12 hover:text-blue-500 focus:text-blue-500">
              ผู้ดูแล
            </button>
          </div> 
​
          <!-- ---Login---- -->
          
          <form action="../Backend/auth/signin.php" method="post">
          <div class="ml-12 mt-12">
            <div class="mb-4 font-ibm-thai font-normal text-[24px] leading-[40px]">
              <div class="relative">
                <div class="flex left-10">
                  <input id="idcard" 
                  name="idcard" 
                  type="text" 
                  class="block appearance-none w-[351px] h-[57px] rounded-[10px] bg-white border border-gray-300  rounded py-2 px-3   leading-tight focus:outline-none focus:shadow-outline shadow-sha-input " placeholder="รหัสประจำตัวประชาชน/ID Card">
                </div>
              </div>
            </div>
            
            <div class="mb-4 font-ibm-thai font-normal text-[24px] leading-[40px] mt-8">
              <div class="relative">
                <input id="pwd" name="pwd" type="password" class="block appearance-none w-[351px] h-[57px] rounded-[10px] bg-white border border-gray-300 rounded py-2 px-3 pl-[p] leading-tight  focus:outline-none focus:shadow-outline shadow-sha-input " placeholder="รหัสผ่าน/Password">
              </div>
            </div>
            
            
            <div class="flex items-center justify-between font-ibm-thai text-[24px]">
            <input id="loginBtn" type="submit" class="bg-bg-login hover:bg-blue-700 font-normal text-red-50 w-[351px] h-[58px] rounded-[10px] focus:outline-none focus:shadow-outline mt-[37px]" type="button" value="เข้าระบบ">
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>   
</html> 





