const mongoose = require('mongoose')


const Movies = mongoose.model('Movies', {
    name: String,
    sinopse: String,
    releaseDate: String,
    genre: String,
    cast: String,
    movieLength: String
})

module.exports = Movies