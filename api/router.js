const router = require('express').Router()
const { addBook, addMovie, addSerie, searchBook, searchMovie, searchSerie } = require('./models/modelsFunctions')


router.post('/filme', async (req, res) => {
    const movie = req.body
    if(! await searchMovie(movie.name))
        await addMovie(movie)
    res.status(200).redirect('http://127.0.0.1:5500/src/views/media_reg.html')
})

router.post('/livro', async (req, res) => {
    const book = req.body
    if(! await searchBook(book.name))
        await addBook(book)
    res.status(200).redirect('http://127.0.0.1:5500/src/views/media_reg.html')
})

router.post('/serie', async (req, res) => {
    const serie = req.body
    if(! await searchSerie(serie.name))
        await addSerie(serie)
    res.status(200).redirect('http://127.0.0.1:5500/src/views/media_reg.html')
})

module.exports = router