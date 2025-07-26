const http = require('http');
const fs = require('fs');
const path = require('path');

const port = process.env.PORT || 3000;

const mimeTypes = {
  '.html': 'text/html',
  '.css': 'text/css',
  '.js': 'text/javascript',
  '.json': 'application/json',
  '.png': 'image/png',
  '.jpg': 'image/jpeg',
  '.jpeg': 'image/jpeg',
  '.gif': 'image/gif',
  '.svg': 'image/svg+xml',
  '.mp4': 'video/mp4',
  '.webm': 'video/webm',
  '.ico': 'image/x-icon'
};

const server = http.createServer((req, res) => {
  console.log(`Request: ${req.method} ${req.url}`);
  
  let filePath = '.' + req.url;
  
  // Handle root path
  if (filePath === './' || filePath === './index.html') {
    filePath = './index.html';
  }

  console.log(`Looking for file: ${filePath}`);

  // Check if file exists
  if (!fs.existsSync(filePath)) {
    console.log(`File not found: ${filePath}`);
    
    // If it's a 404, serve index.html for SPA
    if (req.url.includes('.html') || req.url === '/') {
      filePath = './index.html';
      console.log(`Serving index.html instead`);
    } else {
      res.writeHead(404, { 'Content-Type': 'text/html' });
      res.end('<h1>404 - File Not Found</h1>');
      return;
    }
  }

  const extname = path.extname(filePath).toLowerCase();
  const contentType = mimeTypes[extname] || 'application/octet-stream';

  console.log(`Serving: ${filePath} with type: ${contentType}`);

  fs.readFile(filePath, (error, content) => {
    if (error) {
      console.error(`Error reading file: ${error}`);
      
      if (error.code === 'ENOENT') {
        // File not found, try test.html first, then serve error
        console.log('File not found, trying test.html');
        fs.readFile('./test.html', (err, testContent) => {
          if (err) {
            console.error(`Error loading test.html: ${err}`);
            res.writeHead(500, { 'Content-Type': 'text/html' });
            res.end(`
              <h1>500 - Server Error</h1>
              <p>Could not load index.html or test.html</p>
              <p>Please make sure all files are uploaded to GitHub</p>
              <p>Error: ${error.message}</p>
            `);
          } else {
            res.writeHead(200, { 'Content-Type': 'text/html' });
            res.end(testContent, 'utf-8');
          }
        });
      } else {
        res.writeHead(500, { 'Content-Type': 'text/html' });
        res.end(`<h1>500 - Server Error</h1><p>${error.message}</p>`);
      }
    } else {
      res.writeHead(200, { 'Content-Type': contentType });
      res.end(content, 'utf-8');
    }
  });
});

server.listen(port, () => {
  console.log(`Server running on port ${port}`);
  console.log(`Visit: http://localhost:${port}`);
  
  // List available files
  console.log('\nAvailable files in current directory:');
  fs.readdir('.', (err, files) => {
    if (err) {
      console.error('Error reading directory:', err);
    } else {
      files.forEach(file => {
        console.log(`- ${file}`);
      });
    }
  });
}); 