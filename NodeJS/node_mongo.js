var express = require('express');
var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/";

var app = express();

MongoClient.connect(url, function (err, connection) {
    if (err) throw err;
    var dbo = connection.db("inventory");
    dbo.collection("data").find({}, { _id: 0 }).toArray(function (err, results) {
        if (err) throw err;
        console.log(results);
        connection.close();
        app.get('/results', function (req, res) {
            res.send(results);
        });
    });
});

app.listen(3000, function () {
    console.log(__dirname);
    console.log("Listening on port 3000");
});