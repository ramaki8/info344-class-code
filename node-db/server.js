'use strict';

var express = require('express');
<<<<<<< HEAD
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
=======
var morgan = require('morgan');                         //logging
var bodyParser = require('body-parser');                //body parsing
var mysql = require('mysql');                           //database
var dbConfig = require('./secret/config-maria.json');   //database config
var bluebird = require('bluebird');                     //promise wrapper

//create a connection pool to the MariaDB server
//this allow multiple queries to execute against
//the database in parallel
var connPool = bluebird.promisifyAll(mysql.createPool(dbConfig));

//require our stories controller
var storiesApi = require('./controllers/stories-api');
//require our story model
var stories = require('./models/stories.js').Model(connPool);
>>>>>>> 2cf08cf17a3f5dd45e47699cc347b2ecbb7c7ea1

//create the express application
var app = express();

<<<<<<< HEAD
//logs every server request to the console
=======
//log requests
>>>>>>> 2cf08cf17a3f5dd45e47699cc347b2ecbb7c7ea1
app.use(morgan('dev'));
//parse JSON in the request body
app.use(bodyParser.json());

<<<<<<< HEAD
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
=======
//serve static files from the /static subdirectory
app.use(express.static(__dirname + '/static'));

//mount the stories API router under /api/v1
app.use('/api/v1', storiesApi.Router(stories));

//start listening for HTTP requests on port 80
app.listen(80, function() {
    console.log('server is listening...'); 
});
>>>>>>> 2cf08cf17a3f5dd45e47699cc347b2ecbb7c7ea1
