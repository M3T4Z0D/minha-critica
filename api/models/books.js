const mongoose = require('mongoose')


const Books = mongoose.model('Books', {
    name: String,
    sinopse: String,
    releaseDate: String,
    genre: String,
    author: String,
})


module.exports = Books