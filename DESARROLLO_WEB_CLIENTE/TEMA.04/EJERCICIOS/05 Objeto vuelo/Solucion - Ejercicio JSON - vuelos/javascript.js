// PRIMER APARTADO
let cont=0;

let aeropuertos=[]

vuelos.data.forEach(function (vuelo){
    if (vuelo.airline.name=="Turkish Airlines"){
        cont++
        if (!aeropuertos.includes(vuelo.arrival.airport)){
                aeropuertos.push(vuelo.arrival.airport)      
        }
    }
})
info.innerHTML="El numero de vuelos de la aerolinea Turkish Airlines es "+cont+". Los aeropuertos de destino son: "+aeropuertos+"<br>"

// SEGUNDO APARTADO

let numberFlights=[]

vuelos.data.forEach(function (vuelo){
    if (vuelo.departure.airport=="Tullamarine" & (vuelo.departure.gate=="3")){
        numberFlights.push(vuelo.flight.number)
    }
})

info.innerHTML+="Los numeros de vuelos de Tullamarine puerta 3 son: "+numberFlights+"<br>"

// TERCER APARTADO

let cont2H=0
let arrayLog=[]
vuelos.data.forEach(function (vuelo){
    let fechaSalida=new Date(vuelo.departure.estimated)
    let fechaLlegada=new Date(vuelo.arrival.estimated)

    diferencia=(fechaLlegada-fechaSalida)/(1000*60*60)

    if (diferencia <2){
        cont2H++
        arrayLog.push(vuelo.flight.number)
    }
})

info.innerHTML+="Los vuelos que duran menos de 2 horas son: "+cont2H+"<br>"

// CUARTO APARTADO

let airlines=[]
let cantVuelos=[]

vuelos.data.forEach(function(vuelo){
    let pos=airlines.indexOf(vuelo.airline.name)
    if (pos!=-1){
        cantVuelos[pos]++
    } else {
        airlines.push(vuelo.airline.name)
        cantVuelos.push(1)
    }
})

airlines.forEach(function (airline,index){
    info.innerHTML+="La aerolinea "+airline+" tiene "+cantVuelos[index]+" vuelos.<br>"
})


