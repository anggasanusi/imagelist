/** Application Dependencies */
var express = require('express');
var mysql = require('mysql');

/** New Application ENV OBJ */
var app = express();

/** Initiate Mysql Connection */
var connection = mysql.createConnection({
host : 'localhost',
user : 'admindlEzcBc',
database :'nodejs',
password : '3PN77JlM4HX_'
});

connection.connect();

/** Actions */
app.get('/',function(req,res){
res.send('&lt;h1&gt;LoLi - Laugh Out Loud Indonesia&lt;/h1&gt;');
});


/** get all images */
app.get('/api/get/:id',function(req,res){
var results;
if (req.params.id == 'undefined' || req.params.id == 'null')
{
	req.params.id = '0';
}  
connection.query('SELECT * from media ORDER BY id DESC LIMIT ' + req.params.id + ' , 3 ', function(err, rows, fields) {
results = rows;
res.type('application/json');
res.jsonp(results);
});
});

/** get dp bbm images */
app.get('/api/bbm/:id',function(req,res){
var results;
if (req.params.id == 'undefined' || req.params.id == 'null')
{
	req.params.id = '0';
}  
connection.query('SELECT * from media WHERE category = \'bbm\' ORDER BY id DESC LIMIT ' + req.params.id + ' , 3 ', function(err, rows, fields) {
results = rows;
res.type('application/json');
res.jsonp(results);
});
});


/** get gif images */
app.get('/api/gerak/:id',function(req,res){
var results;
if (req.params.id == 'undefined' || req.params.id == 'null')
{
	req.params.id = '0';
}  
connection.query('SELECT * from media WHERE category = \'gerak\' ORDER BY id DESC LIMIT ' + req.params.id + ' , 3 ', function(err, rows, fields) {
results = rows;
res.type('application/json');
res.jsonp(results);
});
});


/** get meme images */
app.get('/api/meme/:id',function(req,res){
var results;
if (req.params.id == 'undefined' || req.params.id == 'null')
{
	req.params.id = '0';
}  
connection.query('SELECT * from media WHERE category = \'meme\' ORDER BY id DESC LIMIT ' + req.params.id + ' , 3 ', function(err, rows, fields) {
results = rows;
res.type('application/json');
res.jsonp(results);
});
});


/** get teks images */
app.get('/api/teks/:id',function(req,res){
var results;
if (req.params.id == 'undefined' || req.params.id == 'null')
{
	req.params.id = '0';
}  
connection.query('SELECT * from media WHERE category = \'teks\' ORDER BY id DESC LIMIT ' + req.params.id + ' , 3 ', function(err, rows, fields) {
results = rows;
res.type('application/json');
res.jsonp(results);
});
});


/** get random images */
app.get('/api/random/:id',function(req,res){
var results;
if (req.params.id == 'undefined' || req.params.id == 'null')
{
	req.params.id = '0';
}  
connection.query('SELECT * from media ORDER BY RAND() LIMIT ' + req.params.id + ' , 3 ', function(err, rows, fields) {
results = rows;
res.type('application/json');
res.jsonp(results);
});
});

app.listen(3000);