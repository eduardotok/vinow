const mesCalendario = document.getElementById('mesCalendario')
const anoCalendario = document.getElementById('anoCalendario')
const diasAno = document.getElementById('divDiasDoAno')
const prevButton = document.getElementById('prevButton')
const nextButton = document.getElementById('nextButton')


let dataAtual = new Date();

const atualizarCalendario = () => {
    const anoAtual = dataAtual.getFullYear()
    const mesAtual = dataAtual.getMonth()
console.log(dataAtual.getFullYear() , mesAtual)
    const primeiroDiaMes = new Date( anoAtual, mesAtual, 0)
    const ultimoDiaMes = new Date(anoAtual, mesAtual + 1, 0)
    const totalDias = ultimoDiaMes.getDate()
    const indexPrimeiroDia = primeiroDiaMes.getDay()
    const indexUltimoDia = ultimoDiaMes.getDay()

    const mesConvertido = dataAtual.toLocaleString('default', {month: 'long'})
    const anoConvertido = dataAtual.toLocaleString('default', {year: 'numeric'})
    const conversaoString = mesConvertido + ' ' + anoConvertido
    mesCalendario.textContent = conversaoString.toUpperCase()

    let datasHTML = ''

    for(let i = indexPrimeiroDia; i> 0; i--){
        const prevData = new Date(anoAtual, mesAtual, 0 - i + 1)

        datasHTML += `<div class="diasDoAno data-inativa">${prevData.getDate()} <div class="bolinha-verde"></div></div>`
    }

    for(let i = 1; i <= totalDias; i++){
        const data = new Date(anoAtual, mesAtual, i)
        const classeAtiva = data.toDateString() === new Date().toDateString() ? 'ativa': ''
        const mesAtualForm = mesAtual + 1
        console.log(i)
        datasHTML += `<div class="diasDoAno ${classeAtiva}">
        <input type="radio" id="diaMes - ${i}" name="dia" value="${i}">
                <input type="hidden" id="ano" name="ano" value="${anoAtual}">
        <input type="hidden" id="mes" name="mes" value="${mesAtualForm}">

        <label for="diaMes - ${i}">${i}</label>  <div class="bolinha-vermeia"></div></div>`
    }
    for(let i = 1; i<= 7- indexUltimoDia; i++){

        const proxData = new Date(anoAtual, mesAtual + 1, i)
        datasHTML += `<div class="diasDoAno data-inativa">${proxData.getDate()} <div class="bolinha-vermeia"></div></div>`

    }

    diasAno.innerHTML = datasHTML;
}

prevButton.addEventListener('click', () => {
    dataAtual.setMonth(dataAtual.getMonth() - 1)
    console.log(dataAtual.getMonth())
    atualizarCalendario()

})

nextButton.addEventListener('click', () => {
    dataAtual.setMonth(dataAtual.getMonth() + 1)
    console.log(dataAtual.getMonth())
    atualizarCalendario()


})

atualizarCalendario()