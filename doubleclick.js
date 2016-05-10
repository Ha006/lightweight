window.onload = function() {
    if (Enabler.isInitialized()) {
        console.log('Enabler initialized');
        enablerInitHandler();
    } else {
        console.log('Enabler not initialized yet');
        Enabler.addEventListener(studio.events.StudioEvent.INIT, enablerInitHandler);
    }   
}

function enablerInitHandler() {
    document.querySelector('body').onclick = function() {
        Enabler.exit('Exit background');
    }
}
