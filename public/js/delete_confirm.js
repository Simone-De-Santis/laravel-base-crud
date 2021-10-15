// intercettare l' evento in uscita dal form del deleet
// bloccare il comportamento naturale del form (submit che poi si trasforma con il method)
// chiedere all'utente
// agire di conseguenza
//  ------------------------------------------------------------------------//
//! preso elemento dal quale esce l'evento   // queri selector prende il primo con quella classe All prende tutti
const deletFormElement = document.querySelectorAll(".delete-form");
// con il cilo attachiamo il listener a tutti gli elementi in pagina
deletFormElement.forEach(form => {
    form.addEventListener("submit", function(e) {
        const name = form.getAttribute("data-comic");
        e.preventDefault(); // blocca l'esecuzione dell'evento naturale (nel form è submit)
        const conf = window.confirm(`Sei sicuro di voler eliminare ${name} ?`);
        if (conf) this.submit();
    });
});
//  ------------------------------------------------------------------------//
// ! questo lo possiamo fare se siamo su un elemento singolo tipo lo show si siamo come in questo caso su più elementi generati da un ciclo non possiamo aggasnciarli tutti con lo stesso id e allora agganciamo con la classe ---> up prosegue

//! preso elemento dal quale esce l'evento
// const deletFormElement = document.getElementById('delet-form');
// ascoltiamo l'evento ed agiamo    // il primo parametro della funzione in un addeventlistener è l'evento stesso
// deletFormElement.addEventListener('submit', function(e) {
// e.preventDefault(); // blocca l'esecuzione dell'evento naturale (nel form è submit)
// const conf = window.confirm('Sei sicuro di voler eliminare  ?');
// if (conf) this.submit();
// })
