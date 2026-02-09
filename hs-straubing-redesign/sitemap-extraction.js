// Sitemap-Extraktor für hs-straubing.de
// Wir crawlen die Seite und finden alle internen Links

const https = require('https');
const http = require('http');
const { URL } = require('url');

const visited = new Set();
const sitemap = [];
const baseUrl = 'https://hs-straubing.de';

function fetch(url) {
  return new Promise((resolve, reject) => {
    const lib = url.startsWith('https') ? https : http;
    lib.get(url, (res) => {
      let data = '';
      res.on('data', chunk => data += chunk);
      res.on('end', () => resolve(data));
    }).on('error', reject);
  });
}

function extractLinks(html, currentUrl) {
  const links = [];
  const regex = /href=["']([^"']+)["']/g;
  let match;
  
  while ((match = regex.exec(html)) !== null) {
    try {
      const href = match[1];
      const absoluteUrl = new URL(href, currentUrl).href;
      
      if (absoluteUrl.startsWith(baseUrl) && !absoluteUrl.includes('#')) {
        links.push(absoluteUrl);
      }
    } catch (e) {}
  }
  
  return [...new Set(links)];
}

async function crawl(url, depth = 0) {
  if (visited.has(url) || depth > 3) return;
  visited.add(url);
  
  try {
    const html = await fetch(url);
    const path = url.replace(baseUrl, '') || '/';
    
    // Title extrahieren
    const titleMatch = html.match(/<title>([^<]+)<\/title>/);
    const title = titleMatch ? titleMatch[1].replace('Geiger &amp; Cizek - ', '').trim() : path;
    
    sitemap.push({ path, title, url });
    console.log(`✓ ${path} - ${title}`);
    
    const links = extractLinks(html, url);
    for (const link of links) {
      await crawl(link, depth + 1);
    }
  } catch (error) {
    console.error(`✗ ${url}: ${error.message}`);
  }
}

(async () => {
  await crawl(baseUrl);
  
  console.log('\n\n=== SITEMAP ===\n');
  console.log(JSON.stringify(sitemap, null, 2));
})();
