const texts = Array.from(document.querySelectorAll('.post'))

texts.forEach(text=>{
   text.textContent = truncateText(text.textContent,250)
})


function truncateText(text, maxLength) {
    if (text.length > maxLength) {
        return text.slice(0, maxLength) + ' ...';
    } else {
        return text;
    }
}