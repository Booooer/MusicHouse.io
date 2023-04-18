const inputSearch = document.querySelector('.input-search')

inputSearch.addEventListener('input', async function(){
    let data = inputSearch.value

    const response = await fetch('/search',{
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            "X-CSRF-Token": document.querySelector('input[name=_token]').value
        },
        body: JSON.stringify(data) 
    })

    const json = await response.json()
    console.log("Ответ: ", JSON.stringify(json))
})