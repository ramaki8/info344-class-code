'use strict';
/*
function add2(i) {
    new Promise(function(resolve, reject) {
        resolve(i);
    })
    .then(function(i) {
        return i+1;
    })
    .then(function(i) {
        return i+1;
    })
    .then(function(i) {
        console.log(i);
    })
}
*/

var http = require('http');

function get(url) {
  // Return a new promise.
  return new Promise(function(resolve, reject) {
    // Do the usual request stuff
    http.get(url, function(res) {
        var body = '';
        res.on('data', function(chunk) {
            body += chunk;
        });
        res.on('end', function() {
            resolve(body);
        });
    }).on('error', function(err) {
        reject(err);
    });
  });
}

function getMovie(movieId) {
    get("http://www.omdbapi.com/?i=" + movieId)
    .then(JSON.parse)
    .then(function(response) {
        console.log("success", response);
    }).catch(function(error) {
        console.log("Failed!", error);
    });
}

//getMovie('tt0120737');

function getThreeMovies(id1, id2, id3) {
    get("http://www.omdbapi.com/?i=" + id1)
    .then(JSON.parse)
    .then(function(response) {
        console.log("success", response);
    }).then(function() {
        get("http://www.omdbapi.com/?i=" + id1)
        .then(JSON.parse)
        .then(function(response) {
            console.log("success", response);
        }).then(function() {
            get("http://www.omdbapi.com/?i=" + id1)
            .then(JSON.parse)
            .then(function(response) {
                console.log("success", response);
            });
}

getThreeMovies('tt0120737', 'tt0120738', 'tt0120739');
