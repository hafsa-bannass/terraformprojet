const express = require('express');
const path = require('path');

const app = express();
const port = 4000;

// Middleware pour servir des fichiers statiques (comme le fichier HTML)
app.use(express.static(path.join(__dirname, 'public')));

// Route pour la page racine
app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'index.html'));
})

// Démarrer le serveur
app.listen(port, () => {
  console.log('Server is running at http://localhost:${port}');
});