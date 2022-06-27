const mongoose = require('mongoose')


const Series = mongoose.model('Series', {
    name: String,
    sinopse: String,
    releaseDate: String,
    genre: String,
    cast: String,
})

module.exports = Series