const express = require('express');

const app = express();
app.use(express.urlencoded({ extended: true }));

app.listen(3000, function () {
    console.log(__dirname);
    console.log("Listening on port 3000");
});

app.get('/', function (req, res) {
    res.sendFile(__dirname + '/index.html');
});

app.post('/quotes', (req, res) => {
    console.log(req.body);
    res.status(200);
    res.setHeader("Content-Type", "text/html");
    res.send("<h1>Done</h1>");
});

app.get('/jqueryajax', function (req, res) {
    res.sendFile(__dirname + '/jqueryajax.html');
})

app.get('/result', function (req, res) {
    res.sendFile(__dirname + '/result.json');
});