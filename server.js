var express		= require('express'),
	app			= express();

app.use(express.static(__dirname + '/public'));
app.set('views', '/views');

/****************************************/
app.get('/', function homepage(req, res){
	res.sendFile(__dirname + '/views/index.html');
});
app.get('/snake', function homepage(req, res){
	res.sendFile(__dirname + '/views/snake.html');
});

/*********************** ROUTES ******************************/
// var routes = require('./routes/routes.js');
// app.use(routes);

/*********************** SERVER ******************************/
app.listen(process.env.PORT || 3000, function() {
	console.log('BOOM, Express is firing on all cylinders');
});