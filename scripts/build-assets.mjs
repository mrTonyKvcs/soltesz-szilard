import { cp, mkdir } from 'node:fs/promises';
const packages = ['tinymce', 'bootstrap', 'jquery', 'popper.js', '@fortawesome/fontawesome-free'];
await mkdir('public/vendor', { recursive: true });
for (const name of packages) {
  await cp(`node_modules/${name}`, `public/vendor/${name}`, { recursive: true });
}
console.log('Admin assets copied. Existing public CSS/JS bundles are preserved.');
