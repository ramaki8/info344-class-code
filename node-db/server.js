'use strict';

var express = require('express');
var morgan = require('morgan');
var bodyParser = require('body-parser');
var mysql = require('mysql');
var dbConfig = require('./secret/config-maria.json');
var bluebird = require('bluebird');

// creates a connection pool, init to 10 connections by default
// do this to handle concurent requests 
var connPool = bluebird.promisifyAll(mysql.createPool(dbConfig));

//var set to whatever you set module.exports to
var storiesApi = require('./controllers/stories-api');
//require our story model
var Story = require('./models/story.js').Model(connPool);

//create the express application
var app = express();

//logs every server request to the console
app.use(morgan('dev'));
//parse JSON in the request body
app.use(bodyParser.json());

//look in static directory, and if what is requested matches, send it to client
app.use(express.static(__dirname + '/static'));

//if someone makes req to anything starting with this path, 
//we look in storiesApi.Router for the rest of the url.
//mount the stories API router under /api/v1
app.use('/api/v1', storiesApi.Router(Story));


app.listen(80, function() {
    console.log('server is listening...');
});

//terminal: node server.js
//broswer: localhost:8080