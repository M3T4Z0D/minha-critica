require('dotenv').config()
const express = require('express')
const mongoose = require('mongoose')
const router = require('./router.js')


const app = express()
app.use(express.urlencoded({extended: true}))
app.use(express.json())
app.use('/progweb/cadastro_de_midia', router)

const DB_USER = process.env.DB_USER
const DB_PASSWORD = process.env.DB_PASSWORD 

mongoose.connect(`mongodb+srv://${DB_USER}:${DB_PASSWORD}@projeto-final.8ad3x.mongodb.net/?retryWrites=true&w=majority`)
.then(() => {
    console.log('Conexão ao banco de dados estabelecida!')
    app.listen(3000, () => console.log('Servidor rodando!'))
})
.catch((erro) => {
    console.log(erro)
})