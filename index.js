const express = require('express');
const logger = require('morgan');
const path = require('path');

const api_router = require('./api/routes');

const app = express();

app.use(express.json());
app.use(logger('dev'));
app.use(api_router);

app.get(["/","/index.html.var"],(req,res) => {
    res.redirect('https://www.popescolas.com');
});

app.get('/portal',(req,res) => {
    res.send('ok')
});

app.use('/css',express.static('css'));
app.use('/images',express.static('images'));
app.use('/videos',express.static('videos'));
app.use('/script',express.static('script'));

app.listen(3000);