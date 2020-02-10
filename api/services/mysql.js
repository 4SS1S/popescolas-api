const mysql = require('mysql');
require('dotenv').config();

const connection = mysql.createConnection({
    user:     process.env.MYSQL_USER,
    password: process.env.MYSQL_PASS,
    database: process.env.MYSQL_DATA,
    host:     process.env.MYSQL_HOST
});

connection.connect(err => {
    console.log(err)
})

module.exports = connection;