const Books = require('./books')
const Movies = require('./movies')
const Series = require('./Series')


async function addBook(book) {
    const bookModel = {
        name: book.name,
        sinopse: book.sinopse,
        releaseDate: book.releaseDate,
        genre: book.genre,
        author: book.author
    }

    try { await Books.create(bookModel) }
    catch(erro) { console.log(erro) }
}

async function addMovie(movie) {
    const movieModel = {
        name: movie.name,
        sinopse: movie.sinopse,
        releaseDate: movie.releaseDate,
        genre: movie.genre,
        cast: movie.cast,
        movieLength: movie.movieLength
    }

    try { await Movies.create(movieModel) }
    catch(erro) { console.log(erro) }
}

async function addSerie(series) {
    const seriesModel = {
        name: series.name,
        sinopse: series.sinopse,
        releaseDate: series.releaseDate,
        genre: series.genre,
        cast: series.cast
    }

    try { await Series.create(seriesModel) }
    catch(erro) { console.log(erro) }
}

async function searchBook(title) {
    try {
        const book = await Books.findOne({name: title})
        return book != null
    }
    catch(erro) { console.log(erro) }
}

async function searchMovie(title) {
    try {
        const movie = await Movies.findOne({name: title})
        return movie != null
    }
    catch(erro) { console.log(erro) }
}

async function searchSerie(title) {
    try {
        const serie = await Series.findOne({name: title})
        return serie != null
    }
    catch(erro) { console.log(erro) }
}

module.exports = { addBook, addMovie, addSerie, searchBook, searchMovie, searchSerie }