const getRemainTime = (deadline) => {
    let now = new Date(),
        remainTime = (new Date(deadline) - now + 1000) / 1000,
        remainSeconds = ("0" + Math.floor(remainTime % 60)).slice(-2),
        remainMinutes = ("0" + Math.floor((remainTime / 60) % 60)).slice(-2),
        remainHours = ("0" + Math.floor((remainTime / 3600) % 24)).slice(-2),
        remainDays = Math.floor(remainTime / (3600 * 24));

    return {
        remainTime,
        remainSeconds,
        remainMinutes,
        remainHours,
        remainDays,
    };
};

const countdown = (deadline, elem, finalMessage) => {
    const el = document.getElementById(elem);

    const timerUpdate = setInterval(() => {
        let t = getRemainTime(deadline);
        if (screen.width > 760) {
            el.innerHTML = `
  
                <div class="holder mr-1">                    
                    <div class="row d-flex align-items-center justify-content-center">                    
                        <div class="col-2"><span class="ft-30 texto-home-md">${t.remainDays}</span></div>
                        <div class="col-1"><span class="ft-30 texto-home-md">:</span></div>
                        <div class="col-2"><span class="ft-30 texto-home-md">${t.remainHours}</span></div>
                        <div class="col-1"><span class="ft-30 texto-home-md">:</span></div>
                        <div class="col-2"><span class="ft-30 texto-home-md">${t.remainMinutes}</span></div>
                        <div class="col-1"><span class="ft-30 texto-home-md">:</span></div>
                        <div class="col-3"><span class="ft-30 texto-home-md">${t.remainSeconds}</span></div>
                    </div>
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-2"><span class="ft-10 cl-azul texto-home-md">Días</span></div>
                        <div class="col-1"><span class="ft-10 cl-azul texto-home-md"></span></div>
                        <div class="col-2"><span class="ft-10 cl-azul texto-home-md">Horas</span></div>
                        <div class="col-1"><span class="ft-10 cl-azul texto-home-md"></span></div>
                        <div class="col-2"><span class="ft-10 cl-azul texto-home-md">Minutos</span></div>
                        <div class="col-1"><span class="ft-10 cl-azul texto-home-md"></span></div>
                        <div class="col-3"><span class="ft-10 cl-azul texto-home-md">Segundos</span></div>
                    </div>
                </div>                      
`;
        } else {
            el.innerHTML = `
  
                <div class="holder mr-1">                    
                    <div class="row d-flex align-items-center justify-content-center">                    
                        <div class="col-3"><span class="ft-30 texto-home-md">${t.remainDays}:</span></div>                        
                        <div class="col-3"><span class="ft-30 texto-home-md">${t.remainHours}:</span></div>                        
                        <div class="col-3"><span class="ft-30 texto-home-md">${t.remainMinutes}:</span></div>                        
                        <div class="col-3"><span class="ft-30 texto-home-md">${t.remainSeconds}</span></div>
                    </div>
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-3"><span class="ft-10 cl-azul texto-home-md">Días</span></div>                        
                        <div class="col-3"><span class="ft-10 cl-azul texto-home-md">Horas</span></div>                        
                        <div class="col-3"><span class="ft-10 cl-azul texto-home-md">Min</span></div>                        
                        <div class="col-3"><span class="ft-10 cl-azul texto-home-md">Seg</span></div>
                    </div>
                </div>                      
`;
        }

        if (t.remainTime <= 1) {
            clearInterval(timerUpdate);
            el.innerHTML = finalMessage;
        }
    }, 1000);
};

countdown("Sep 10 2021 18:30:00 GMT-0500", "time2", "COMENZAMOS");