const openKastButtons = document.querySelectorAll('[data-kast-target]')
const closeKastButtons = document.querySelectorAll('[data-close-button]')

const overlay = document.getElementById('overlay')

openKastButtons.forEach(button => {
    button.addEventListener('click', () => {
        const kast = document.querySelector(button.dataset.kastTarget)
        openKast(kast)
    })
})
overlay.addEventListener('click', () => {
    const kast = document.querySelectorAll('kast.active')
    kast.forEach(kast => {
        closeKast(kast)
    })
})
closeKastButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = button.closest('.kast')
        closeKast(kast)
    })
})

function openKast(kast) {
    if(kast == null) return
    kast.classList.add('active')
    overlay.classList.add('active')
}
function closeKast(kast) {
    if(kast == null) return
    kast.classList.remove('active')
    overlay.classList.remove('active')
}