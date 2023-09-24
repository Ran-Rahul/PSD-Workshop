const express = require('express');
const app = express();
const port = 3000;
const path = require('path');

// Serve your HTML file
app.get('/', (req, res) => {
  const filePath = path.join(__dirname, 'loginpage.html');
  res.sendFile(filePath);
});

// Serve your static CSS files
app.use(express.static(__dirname)); // Assuming your CSS files are in the same directory as your server.js

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
