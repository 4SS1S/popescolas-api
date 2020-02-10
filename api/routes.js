const express = require('express');
const routes = express.Router();

const relatorio_geral = require('./gestao/relatorio-geral');

routes.get('/api',(req,res) => {
    res.send({
        teste: 'ok'
    })
});

routes.get('/api/gestor/relatorio-geral',relatorio_geral.index);

module.exports = routes;