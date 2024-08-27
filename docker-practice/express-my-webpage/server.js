const express = require('express');
const path = require('path');

const app = express();

// Serve static files (e.g., CSS, images)
app.use(express.static(path.join(__dirname, 'public')));

// Route to serve the main HTML page
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'index.html'));
});

// Handle form submission (Contact Form)
app.post('/contact', (req, res) => {
    let body = '';

    // Collect data from the form
    req.on('data', chunk => {
        body += chunk.toString();
    });

    req.on('end', () => {
        // Here, you can process the form data
        console.log(body);

        // Send a response back to the client
        res.send('Message received!');
    });
});

// Start the server
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
